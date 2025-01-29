<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\KomentarInfo;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log; 
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

    public function index(Request $request)
    {
        $query = Berita::where('status_info', 'terbit');
        
        if ($request->has('search')) {
            $searchTerm = $request->search;
            $query->where('judul_berita', 'LIKE', "%{$searchTerm}%");
        }
        
        $featuredNews = $query->orderBy('tanggal_dibuat', 'desc')
                             ->paginate(15)
                             ->withQueryString();
        
        return view('berita', compact('featuredNews'));
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

    public function like(Request $request, $kd_info)
    {
        try {
            $berita = Berita::findOrFail($kd_info);
            $userId = Auth::id(); // Get logged in user ID
            
            // Create a unique key for this user and berita
            $likeKey = "user_{$userId}_likes_berita_{$kd_info}";
            
            // Check if user has already liked
            if (session()->has($likeKey)) {
                return response()->json([
                    'success' => false,
                    'message' => 'You have already liked this news'
                ], 400);
            }
            
            if ($berita->likes === null) {
                $berita->likes = 0;
            }
            
            $berita->increment('likes');
            
            // Mark this berita as liked by this user
            session()->put($likeKey, true);
            
            return response()->json([
                'success' => true,
                'likes' => $berita->likes
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error updating likes: ' . $e->getMessage()
            ], 500);
        }
    }
    
    public function view(Request $request, $kd_info)
    {
        try {
            $berita = Berita::findOrFail($kd_info);
            
            if ($berita->views === null) {
                $berita->views = 0;
            }
            
            $berita->increment('views');
            
            return response()->json([
                'success' => true,
                'views' => $berita->views
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error updating views: ' . $e->getMessage()
            ], 500);
        }
    }

    public function search(Request $request)
    {
        $query = $request->input('search');
        
        if (empty($query)) {
            $berita = Berita::where('status_info', 'terbit')
                ->orderBy('tanggal_dibuat', 'desc')
                ->get();
        } else {
            $berita = Berita::where('status_info', 'terbit')
                ->where('judul_berita', 'like', '%' . $query . '%')
                ->orderBy('tanggal_dibuat', 'desc')
                ->get();
        }
    
        return response()->json([
            'berita' => $berita,
            'count' => $berita->count()
        ]);
    }
}