<?php

namespace App\Http\Controllers;

use App\Models\KomentarInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class KomentarController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'kd_info' => 'required',
            'isi_kom_info' => 'required|string'
        ]);

        // Pastikan kd_user adalah ID pengguna yang benar
        $kd_user = Auth::user()->kd_user; // Mengambil kolom kd_user dari tabel users

        // Generate kd_kom_info (misalnya: KMT001)
        $lastKomentar = KomentarInfo::orderBy('kd_kom_info', 'desc')->first();
        $lastNumber = $lastKomentar ? intval(substr($lastKomentar->kd_kom_info, 2)) : 0; // Ambil angka setelah 'KM'
        $newKode = 'KM' . str_pad($lastNumber + 1, 2, '0', STR_PAD_LEFT); // Format KM01

        // Simpan komentar ke dalam database
        $komentar = KomentarInfo::create([
            'kd_kom_info' => $newKode,
            'isi_kom_info' => $request->isi_kom_info,
            'kd_user' => $kd_user, // Pastikan ini valid
            'kd_info' => $request->kd_info,
            'tglpost_kom_info' => Carbon::now()
        ]);

        // Kembalikan response JSON untuk AJAX
        return response()->json([
            'success' => true,
            'komentar' => $komentar->load('user') // Memuat relasi dengan user
        ]);
    }
    
}
