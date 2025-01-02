<?php
// app/Http/Controllers/PengumumanController.php

namespace App\Http\Controllers;

use App\Models\InformasiPengumuman;
use Illuminate\Http\Request;

class PengumumanController extends Controller
{
    public function index()
    {
        $pengumuman = InformasiPengumuman::where('status_info', 'terbit')
        ->orderBy('tanggal_dibuat', 'desc')
        ->paginate(6); // 6 pengumuman per halaman
        return view('pengumuman', compact('pengumuman'));
    }


    public function show($id)
    {
        $pengumuman = InformasiPengumuman::findOrFail($id);
        return view('detailPengumuman', compact('pengumuman'));
    }
}
