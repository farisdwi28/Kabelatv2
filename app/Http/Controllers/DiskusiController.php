<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Diskusi;
use App\Models\Komunitas;
use App\Models\KomentarDiskusi;
use Illuminate\Support\Facades\DB;
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
        $diskusi = Diskusi::with(['user', 'komunitas', 'komentars'])
            ->orderBy('tglpost_diskusi', 'desc')
            ->get();
        return view('forumdiskusi', compact('diskusi'));
    }

    public function create()
    {
        $userId = auth()->id();
    
        // Ambil komunitas pengguna yang login
        $memberKomunitas = DB::table('member_komunitas')
            ->join('komunitas', 'member_komunitas.kd_komunitas', '=', 'komunitas.kd_komunitas')
            ->where('member_komunitas.id', $userId)
            ->select('komunitas.kd_komunitas', 'komunitas.nm_komunitas')
            ->first();
    
        if (!$memberKomunitas) {
            return redirect()->route('diskusi.index')
                ->with('error', 'Anda belum bergabung dengan komunitas');
        }
    
        // Kirim data komunitas ke view
        return view('tambahdiskusi', compact('memberKomunitas'));
    }
    
    
    
    public function store(Request $request)
    {
        \Log::info('Request Data:', $request->all()); // Log data untuk debugging
    
        $validated = $request->validate([
            'judul' => 'required|string|max:250',
            'deskripsi' => 'required|string',
        ]);
    
        $userId = auth()->id();
    
        $memberKomunitas = DB::table('member_komunitas')
            ->where('id', $userId)
            ->first();
    
        if (!$memberKomunitas) {
            return back()->with('error', 'Anda belum bergabung dengan komunitas');
        }
    
        Diskusi::create([
            'kd_diskusi' => Str::random(5),
            'topik_diskusi' => $validated['judul'],
            'isi_diskusi' => $validated['deskripsi'],
            'id' => $userId,
            'kd_komunitas' => $memberKomunitas->kd_komunitas,
            'tglpost_diskusi' => now(),
        ]);
    
        return redirect()->route('diskusi.index')->with('success', 'Diskusi berhasil dibuat!');
    }
    
    
    public function show($id)
    {
        $diskusi = Diskusi::with(['user', 'komunitas', 'komentars.user'])
            ->findOrFail($id);
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
    $komentar->id = auth()->id(); // Pastikan menyimpan id user yang login
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