<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laporan;
use Illuminate\Support\Str;

class LaporanController extends Controller
{
    public function create()
    {
        return view('tambahLaporan');
    }

    public function store(Request $request)
    {
        // Validasi data input
        $validated = $request->validate([
            'judul' => 'required|string|max:50',
            'tgl_dibuat' => 'required|date',
            'desk_lap' => 'required|string',
            'file' => 'nullable|file|mimes:pdf,jpg,png|max:2048', // Validasi file (opsional)
        ]);

        // Simpan laporan baru
        $laporan = new Laporan();
        $laporan->kd_laporan = Str::random(5); // Generate kode laporan unik
        $laporan->judul = $validated['judul'];
        $laporan->tgl_dibuat = $validated['tgl_dibuat'];
        $laporan->desk_lap = $validated['desk_lap'];
        $laporan->status_periksa = 'belum diperiksa'; // Set default status

        // Cek jika ada file yang diupload
        if ($request->hasFile('file')) {
            // Ambil file yang diupload
            $file = $request->file('file');

            // Pastikan file valid sebelum disimpan
            if ($file->isValid()) {
                // Simpan file ke storage/app/public/laporan_files dan ambil path file
                $laporan->file = $file->store('laporan_files', 'public'); // Menyimpan file di storage/app/public/laporan_files
            } else {
                // Jika file tidak valid, bisa menambahkan penanganan error atau notifikasi
                return back()->withErrors(['file' => 'File yang diupload tidak valid.'])->withInput();
            }
        }

        // Simpan laporan ke database
        $laporan->save();

        // Redirect dengan pesan sukses
        return redirect()->route('laporan.index')->with('success', 'Laporan berhasil ditambahkan!');
    }
    public function index()
    {
        $laporans = Laporan::all();
        return view('riwayatLaporan', compact('laporans'));
    }
}
