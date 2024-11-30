<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function index()
    {
        $laporans = Laporan::all();
        return view('riwayatLaporan', compact('laporans'));
    }

    public function create()
    {
        return view('tambahLaporan');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'tgl_dibuat' => 'required|date',
            'desk_lap' => 'required',
            'file' => 'nullable|file|mimes:pdf,jpg,png',
        ]);

        $file = $request->file('file') ? $request->file('file')->store('laporans') : null;

        Laporan::create([
            'judul' => $request->judul,
            'tgl_dibuat' => $request->tgl_dibuat,
            'desk_lap' => $request->desk_lap,
            'file' => $file,
        ]);

        return redirect()->route('riwayatLaporan')->with('success', 'Laporan berhasil ditambahkan!');
    }
}

