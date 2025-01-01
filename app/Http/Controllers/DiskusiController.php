<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Diskusi;
use App\Models\Komunitas;
use App\Models\KomentarDiskusi;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DiskusiController extends Controller
{
    use HasFactory;

    protected $table = 'diskusi'; // Pastikan nama tabel sesuai
    protected $primaryKey = 'kd_diskusi'; // Primary key sesuai
    public $incrementing = false; // Jika primary key bukan auto increment
    public $timestamps = false; // Jika tabel tidak menggunakan kolom timestamps

    // Relasi ke KomentarDiskusi
    public function komentars()
    {
        return $this->hasMany(KomentarDiskusi::class, 'kd_diskusi', 'kd_diskusi');
    }
    public function index()
    {
        // Ambil id user yang login
        $userId = Auth::id();
        
        // Cari kd_komunitas user dari tabel member_komunitas
        $userKomunitas = \App\Models\MemberKomunitas::where('id', $userId)
            ->pluck('kd_komunitas')
            ->first();
        
        $diskusi = Diskusi::with('komunitas')
            ->where('kd_komunitas', $userKomunitas)
            ->orderBy('tglpost_diskusi', 'desc')
            ->get();
            
        return view('forumdiskusi', compact('diskusi'));
    }
    public function create()
    {
        // Get logged-in user's community data
        $komunitas = Komunitas::where('kd_komunitas', Auth::user()->kd_komunitas)->first();
        return view('tambahdiskusi', compact('komunitas'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul' => 'required|string|max:250',
            'deskripsi' => 'required|string',
        ]);
    
        // Dapatkan id user yang login
        $userId = Auth::id();
        
        // Ambil kd_komunitas dari member_komunitas
        $userKomunitas = \App\Models\MemberKomunitas::where('id', $userId)
            ->pluck('kd_komunitas')
            ->first();
        
        $diskusi = new Diskusi();
        $diskusi->kd_diskusi = Str::random(5);
        $diskusi->topik_diskusi = $validated['judul'];
        $diskusi->isi_diskusi = $validated['deskripsi'];
        $diskusi->tglpost_diskusi = now();
        $diskusi->id = $userId;
        $diskusi->kd_komunitas = $userKomunitas;
    
        $diskusi->save();
    
        return redirect()->route('diskusi.index')
            ->with('success', 'Diskusi berhasil ditambahkan!');
    }

    public function show($id)
    {
        $userId = Auth::id();
        
        // Ambil kd_komunitas dari member_komunitas
        $userKomunitas = \App\Models\MemberKomunitas::where('id', $userId)
            ->pluck('kd_komunitas')
            ->first();
            
        $diskusi = Diskusi::with(['komentars', 'komunitas', 'user'])
            ->findOrFail($id);
            
        // Check if user belongs to the same community
        if ($diskusi->kd_komunitas !== $userKomunitas) {
            abort(403, 'Unauthorized action.');
        }
    
        return view('detaildiskusi', compact('diskusi'));
    }
    public function storeComment(Request $request, $id)
{
    $request->validate([
        'isi_kom_diskusi' => 'required|string',
    ]);

    $komentar = new KomentarDiskusi();
    $komentar->kd_kom_diskusi = Str::random(5);
    $komentar->isi_kom_diskusi = $request->isi_kom_diskusi;
    $komentar->kd_diskusi = $id;
    $komentar->id = Auth::id(); // Pastikan menyimpan id user yang login
    $komentar->tglpost_kom_diskusi = now();
    $komentar->save();

    return redirect()->route('detaildiskusi', ['id' => $id])
        ->with('success', '');
}

    // In DiskusiController constructor
public function __construct()
{
    $this->middleware('auth')->only(['storeComment']);
}
}