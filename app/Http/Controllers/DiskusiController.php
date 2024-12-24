<?php

// app/Http/Controllers/DiskusiController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Diskusi;
use App\Models\KomentarDiskusi;

class DiskusiController extends Controller
{
    public function index()
    {
        $diskusi = Diskusi::all();
        return view('forumdiskusi', compact('diskusi'));
    }

    public function create()
    {
        return view('tambahdiskusi');
    }
 
    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul' => 'required|string|max:250',
            'deskripsi' => 'required|string',
        ]);

        $diskusi = new Diskusi();
        $diskusi->kd_diskusi = \Illuminate\Support\Str::random(5);
        $diskusi->topik_diskusi = $validated['judul'];
        $diskusi->isi_diskusi = $validated['deskripsi'];
        $diskusi->tglpost_diskusi = now()->format('Y-m-d H:i:s');

        $diskusi->save();

        return redirect()->route('diskusi.index')->with('success', 'Diskusi berhasil ditambahkan!');
    }

    public function show($id)
    {
        // Mengambil diskusi beserta komentar-komentarnya
        $diskusi = Diskusi::with('komentars')->findOrFail($id);
        return view('detaildiskusi', compact('diskusi'));
    }

    public function storeComment(Request $request, $id)
    {
        // Validasi input komentar
        $request->validate([
            'isi_kom_diskusi' => 'required|string',
        ]);

        // Menyimpan komentar
        $komentar = new KomentarDiskusi();
        $komentar->kd_kom_diskusi = \Illuminate\Support\Str::random(5);
        $komentar->isi_kom_diskusi = $request->isi_kom_diskusi;
        $komentar->kd_diskusi = $id;
        $komentar->kd_user = auth()->user()->kd_user;  // Pastikan menggunakan ID pengguna yang valid
        $komentar->tglpost_kom_diskusi = now();
        $komentar->save();
        

        // Redirect kembali ke detail diskusi
        return redirect()->route('detaildiskusi', ['id' => $id]);
    }
}
