<?php

namespace App\Http\Controllers;

use App\Models\Diskusi;
use App\Models\Komunitas;
use App\Models\KomentarDiskusi;
use App\Models\MemberKomunitas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Carbon\Carbon;

class DiskusiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $userId = Auth::id();
        $userKomunitas = MemberKomunitas::where('id', $userId)
            ->pluck('kd_komunitas')
            ->first();
    
        $query = Diskusi::with(['komunitas', 'user', 'komentars'])
            ->where('kd_komunitas', $userKomunitas);
    
        if ($request->has('search')) {
            $searchTerm = $request->search;
            $query->where('topik_diskusi', 'LIKE', "%{$searchTerm}%")
                  ->orWhere('isi_diskusi', 'LIKE', "%{$searchTerm}%");
        }
    
        $diskusi = $query->orderBy('tglpost_diskusi', 'desc')
                         ->paginate(10)
                         ->withQueryString();
    
        return view('forumDiskusi', compact('diskusi'));
    }

    public function create()
    {
        $userId = Auth::id();
        $komunitas = MemberKomunitas::where('id', $userId)
            ->with('komunitas')
            ->first();

        return view('tambahDiskusi', compact('komunitas'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul' => 'required|string|max:250',
            'deskripsi' => 'required|string',
        ]);

        $userId = Auth::id();
        $userKomunitas = MemberKomunitas::where('id', $userId)
            ->pluck('kd_komunitas')
            ->first();

        if (!$userKomunitas) {
            return back()->with('error', 'Anda harus bergabung dengan komunitas terlebih dahulu.');
        }

        $diskusi = new Diskusi();
        $diskusi->kd_diskusi = Str::random(5);
        $diskusi->topik_diskusi = $validated['judul'];
        $diskusi->isi_diskusi = $validated['deskripsi'];
        $diskusi->tglpost_diskusi = Carbon::now()->format('Y-m-d H:i:s');
        $diskusi->id = $userId;
        $diskusi->kd_komunitas = $userKomunitas;
        $diskusi->save();

        return redirect()->route('diskusi.index')
            ->with('success', 'Diskusi berhasil ditambahkan!');
    }

    public function show($id)
    {
        $userId = Auth::id();
        $userKomunitas = MemberKomunitas::where('id', $userId)
            ->pluck('kd_komunitas')
            ->first();
    
        $diskusi = Diskusi::with(['komentars.user', 'komunitas', 'user'])
            ->findOrFail($id);
    
        if ($diskusi->kd_komunitas !== $userKomunitas) {
            abort(403, 'Anda tidak memiliki akses ke diskusi ini.');
        }
    
        return view('detailDiskusi', compact('diskusi'));
    }

    public function storeComment(Request $request, $id)
    {
        $request->validate([
            'isi_kom_diskusi' => 'required|string',
        ]);

        $diskusi = Diskusi::findOrFail($id);
        $userId = Auth::id();
        
        $userKomunitas = MemberKomunitas::where('id', $userId)
            ->pluck('kd_komunitas')
            ->first();

        if ($diskusi->kd_komunitas !== $userKomunitas) {
            abort(403, 'Anda tidak memiliki akses untuk berkomentar.');
        }

        $komentar = new KomentarDiskusi();
        $komentar->kd_kom_diskusi = Str::random(5);
        $komentar->isi_kom_diskusi = $request->isi_kom_diskusi;
        $komentar->kd_diskusi = $id;
        $komentar->id = $userId;
        $komentar->tglpost_kom_diskusi = Carbon::now();
        $komentar->save();

        return redirect()->route('diskusi.detail', $id)
            ->with('success');
    }
}