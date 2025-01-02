<?php
// app/Http/Controllers/PengumumanController.php

namespace App\Http\Controllers;

use App\Models\InformasiPengumuman;
use Illuminate\Http\Request;

class PengumumanController extends Controller
{
public function index()
{
    $pengumuman = InformasiPengumuman::where('status_info', 'terbit') // hanya yang statusnya aktif
                                        ->orderBy('tanggal_dibuat', 'desc')
                                        ->get();
    return view('pengumuman', compact('pengumuman'));
}


    public function show($id)
    {
        $pengumuman = InformasiPengumuman::findOrFail($id);
        return view('detailPengumuman', compact('pengumuman'));
    }
}