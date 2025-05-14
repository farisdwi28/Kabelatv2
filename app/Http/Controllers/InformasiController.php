<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Informasi;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;

class InformasiController extends Controller
{
    public function index()
    {
        $informasi = Informasi::orderBy('tanggal_dibuat', 'desc')->get();
        return view('daftarBerita', compact('informasi'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'judul_berita' => 'required|unique:informasi',
            'isi_berita' => 'required',
            'status_info' => 'required|in:draft,terbit,sembunyi',
            'kategori_berita' => 'required|in:semua berita,kegiatan,layanan,koleksi,fasilitas,prestasi,kerjasama,events',
            'foto_berita' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'author' => 'required|array',
            'author.*' => 'required|string',
        ], [
            'judul_berita.required' => 'Judul berita harus diisi',
            'judul_berita.unique' => 'Judul berita sudah digunakan',
            'isi_berita.required' => 'Isi berita harus diisi',
            'status_info.required' => 'Status informasi harus dipilih',
            'kategori_berita.required' => 'Kategori berita harus dipilih',
            'foto_berita.image' => 'File harus berupa gambar',
            'foto_berita.mimes' => 'Format gambar harus jpeg, png, jpg, atau gif',
            'foto_berita.max' => 'Ukuran file maksimal 2MB',
            'author.required' => 'Minimal satu author harus diisi',
            'author.*.required' => 'Nama author tidak boleh kosong',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 422);
        }

        // Generate kode informasi (KD001, KD002, etc.)
        $latestInfo = Informasi::orderBy('kd_info', 'desc')->first();
        $kd_info = 'KD001';
        
        if ($latestInfo) {
            $lastNumber = intval(substr($latestInfo->kd_info, 2));
            $kd_info = 'KD' . str_pad($lastNumber + 1, 3, '0', STR_PAD_LEFT);
        }

        // Handle foto berita upload
        $foto_path = null;
        if ($request->hasFile('foto_berita')) {
            $foto = $request->file('foto_berita');
            $foto_name = time() . '.' . $foto->getClientOriginalExtension();
            $foto->storeAs('public/informasi', $foto_name);
            $foto_path = 'informasi/' . $foto_name;
        }

        $informasi = new Informasi();
        $informasi->kd_info = $kd_info;
        $informasi->judul_berita = $request->judul_berita;
        $informasi->isi_berita = $request->isi_berita;
        $informasi->status_info = $request->status_info;
        $informasi->kategori_berita = $request->kategori_berita;
        $informasi->foto_berita = $foto_path;
        $informasi->author = $request->author;
        $informasi->tanggal_dibuat = now()->format('Y-m-d');
        $informasi->kd_kecamatan = $request->kd_kecamatan ?? null;
        $informasi->likes = 0;
        $informasi->views = 0;
        $informasi->id = Auth::id();
        $informasi->save();

        return response()->json([
            'success' => true,
            'message' => 'Informasi berhasil ditambahkan!'
        ]);
    }

    public function show(string $id)
    {
        $informasi = Informasi::findOrFail($id);
        $informasi->increment('views');
        return view('informasi.show', compact('informasi'));
    }

    public function edit(string $id)
    {
        $informasi = Informasi::findOrFail($id);
        return response()->json($informasi);
    }

    public function update(Request $request, string $id)
    {
        $informasi = Informasi::findOrFail($id);

        $validator = Validator::make($request->all(), [
            'judul_berita' => 'required|unique:informasi,judul_berita,'.$id.',kd_info',
            'isi_berita' => 'required',
            'status_info' => 'required|in:draft,terbit,sembunyi',
            'kategori_berita' => 'required|in:semua berita,kegiatan,layanan,koleksi,fasilitas,prestasi,kerjasama,events',
            'foto_berita' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'author' => 'required|array',
            'author.*' => 'required|string',
        ], [
            'judul_berita.required' => 'Judul berita harus diisi',
            'judul_berita.unique' => 'Judul berita sudah digunakan',
            'isi_berita.required' => 'Isi berita harus diisi',
            'status_info.required' => 'Status informasi harus dipilih',
            'kategori_berita.required' => 'Kategori berita harus dipilih',
            'foto_berita.image' => 'File harus berupa gambar',
            'foto_berita.mimes' => 'Format gambar harus jpeg, png, jpg, atau gif',
            'foto_berita.max' => 'Ukuran file maksimal 2MB',
            'author.required' => 'Minimal satu author harus diisi',
            'author.*.required' => 'Nama author tidak boleh kosong',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 422);
        }

        // Handle foto berita upload
        if ($request->hasFile('foto_berita')) {
            // Delete old file if exists
            if ($informasi->foto_berita) {
                Storage::delete('public/' . $informasi->foto_berita);
            }
            
            $foto = $request->file('foto_berita');
            $foto_name = time() . '.' . $foto->getClientOriginalExtension();
            $foto->storeAs('public/informasi', $foto_name);
            $informasi->foto_berita = 'informasi/' . $foto_name;
        }

        $informasi->judul_berita = $request->judul_berita;
        $informasi->isi_berita = $request->isi_berita;
        $informasi->status_info = $request->status_info;
        $informasi->kategori_berita = $request->kategori_berita;
        $informasi->author = $request->author;
        $informasi->kd_kecamatan = $request->kd_kecamatan ?? $informasi->kd_kecamatan;
        $informasi->save();

        return redirect()->route('informasi.index')
            ->with('success', 'Informasi berhasil diperbarui!');
    
    }

    public function destroy(string $id)
    {
        $informasi = Informasi::findOrFail($id);
        
        // Delete associated image if exists
        if ($informasi->foto_berita) {
            Storage::delete('public/' . $informasi->foto_berita);
        }
        
        $informasi->delete();
        
        return redirect()->route('informasi.index')->with('success', 'Informasi berhasil dihapus!');
    }
    public function getInfo(string $id)
    {
        $informasi = Informasi::findOrFail($id);
        return response()->json($informasi);
    }
}