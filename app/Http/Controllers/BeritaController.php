<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\KomentarInfo;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class BeritaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only(['storeComment', 'like', 'view']);
    }

    public function listBerita()
    {
        $featuredNews = Berita::where('status_info', 'terbit')
            ->orderBy('tanggal_dibuat', 'desc')
            ->take(3)
            ->get();

        $sidebarNews = Berita::where('status_info', 'terbit')
            ->orderBy('tanggal_dibuat', 'desc')
            ->skip(3)
            ->take(4)
            ->get();

        return view('index', compact('featuredNews', 'sidebarNews'));
    }

    public function index()
    {
        $featuredNews = Berita::where('status_info', 'terbit')
            ->orderBy('tanggal_dibuat', 'desc')
            ->take(3)
            ->get();

        $sidebarNews = Berita::where('status_info', 'terbit')
            ->orderBy('tanggal_dibuat', 'desc')
            ->skip(3)
            ->take(4)
            ->get();

        return view('berita', compact('featuredNews', 'sidebarNews'));
    }

    public function show($kd_info)
    {
        $berita = Berita::with(['komentar' => function ($query) {
            $query->orderBy('tglpost_kom_info', 'desc');
        }, 'komentar.user'])->findOrFail($kd_info);

        $relatedNews = Berita::where('kd_info', '!=', $kd_info)
            ->where('status_info', 'terbit')
            ->orderBy('tanggal_dibuat', 'desc')
            ->take(3)
            ->get();

        return view('detailBerita', compact('berita', 'relatedNews'));
    }

    public function storeComment(Request $request, $kd_info)
    {
        $request->validate([
            'isi_kom_info' => 'required|string'
        ]);

        $komentar = new KomentarInfo();
        $komentar->kd_kom_info = 'KM' . Str::random(3);
        $komentar->isi_kom_info = $request->isi_kom_info;
        $komentar->kd_info = $kd_info;
        $komentar->id = Auth::user()->id;
        $komentar->tglpost_kom_info = Carbon::now();
        $komentar->save();

        return redirect()->back()->with('success', 'Komentar berhasil ditambahkan');
    }

    public function like($kd_info)
    {
        $berita = Berita::findOrFail($kd_info);
        $berita->increment('likes');
        return response()->json(['success' => true]);
    }

    public function view($kd_info)
    {
        $berita = Berita::findOrFail($kd_info);
        $berita->increment('views');
        return response()->json(['success' => true]);
    }
}
