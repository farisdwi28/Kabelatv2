<?php

namespace App\Http\Controllers;

use App\Models\ProgramDispusip;
use Illuminate\Http\Request;

class ProgramDispusipController extends Controller
{

    public function index()
    {
        // Membatasi program menjadi 6 per halaman
        $programs = ProgramDispusip::where('status_program', 'aktif');

        // Mengirim data program ke view
        return view('programDispusip', compact('programs'));
    }


    public function index1()
    {
        // Menampilkan halaman index utama dengan program aktif
        return view('index');
    }

    public function detail($kd_program)
    {
        // Mengambil detail program berdasarkan kode
        $program = ProgramDispusip::findOrFail($kd_program);
        return view('detailProgramDispusip', compact('program'));
    }

    public function store(Request $request)
    {
        // Validasi dan simpan data program
        $request->validate([
            'sampul_program' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Menyimpan sampul program ke storage
        $path = $request->file('sampul_program')->store('public/images');

        // Menyimpan program ke database
        ProgramDispusip::create([
            'kd_program' => $request->kd_program,
            'nm_program' => $request->nm_program,
            'tanggal_dibuat' => now(),
            'status_program' => $request->status_program,
            'tentang_program' => $request->tentang_program,
            'tujuan_program' => $request->tujuan_program,
            'sampul_program' => basename($path),
        ]);

        // Redirect dengan pesan sukses
        return redirect()->route('programdispusip.index')->with('success', 'Program Dispusip berhasil ditambahkan');
    }
    public function search(Request $request)
    {
        // Ambil query pencarian dari input
        $query = $request->input('search');
        
        // Jika query kosong, kembalikan semua program aktif
        if (empty($query)) {
            $programs = ProgramDispusip::where('status_program', 'aktif')->get();
        } else {
            // Cari program berdasarkan judul saja (nm_program)
            $programs = ProgramDispusip::where('status_program', 'aktif')
                ->where('nm_program', 'like', '%' . $query . '%')
                ->get();  // Menggunakan get() karena tidak perlu paginate di sini
        }
    
        // Kembalikan data pencarian dalam bentuk JSON
        return response()->json([
            'programs' => $programs,
            'count' => $programs->count()
        ]);
    }
}    
