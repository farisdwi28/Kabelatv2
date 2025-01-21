<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laporan;
use App\Models\MemberKomunitas;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class LaporanController extends Controller
{
    public function create()
    {
        // Check if user has member status before showing create form
        $memberKomunitas = MemberKomunitas::where('id', Auth::id())->first();
        
        // if (!$memberKomunitas) {
        //     return redirect()->back()->with('error', 'Anda harus menjadi member komunitas terlebih dahulu.');
        // }
        
        return view('tambahLaporan');
    }

    public function store(Request $request)
    {
        // Validasi data input
        $validated = $request->validate([
            'judul' => 'required|string|max:50',
            'tgl_dibuat' => 'required|date',
            'desk_lap' => 'required|string',
            'file' => 'nullable|file|max:2048',
        ]);
    
        try {
            // Get current user
            $user = Auth::user();
            
            // Get member data
            $memberKomunitas = MemberKomunitas::where('id', $user->id)->first();
            
            // Check if user is a member
            if (!$memberKomunitas) {
                return back()->with('error', 'Anda harus menjadi member komunitas terlebih dahulu.')
                    ->withInput();
            }
    
            // Generate kode laporan (5 karakter acak)
            $kd_laporan = strtoupper(Str::random(5));
    
            // Create new laporan
            $laporan = new Laporan();
            $laporan->kd_laporan = $kd_laporan;
            $laporan->judul = $validated['judul'];
            $laporan->tgl_dibuat = now();
            $laporan->desk_lap = $validated['desk_lap'];
            $laporan->status_periksa = 'belum diperiksa';
            $laporan->kd_member = $memberKomunitas->kd_member;
    
            // Handle file upload
            if ($request->hasFile('file')) {
                $file = $request->file('file');
                if ($file->isValid()) {
                    $fileName = 'laporan_' . $kd_laporan . '.' . $file->getClientOriginalExtension();
                    $file->move(public_path('storage/laporan_files'), $fileName);
                    $laporan->file = $fileName;
                }
            }
    
            // Save laporan
            $laporan->save();
            
            return redirect()->route('laporan.index')
                ->with('success', 'Laporan berhasil ditambahkan!');
                
        } catch (\Exception $e) {
            return back()->with('error', 'Gagal menyimpan laporan: ' . $e->getMessage())
                ->withInput();
        }
    }
    
    public function index()
    {
        $user = Auth::user();
        $memberKomunitas = MemberKomunitas::where('id', $user->id)->first();

        if (!$memberKomunitas) {
            return back()->with('error', 'Anda harus menjadi member komunitas terlebih dahulu.');
        }

        // Get all member IDs from the same community
        $communityMembers = MemberKomunitas::where('kd_komunitas', $memberKomunitas->kd_komunitas)
            ->pluck('kd_member');

        if ($memberKomunitas && $memberKomunitas->jabatan->isLeadershipRole()) {
            // If user has leadership role, show all reports from community members
            $laporans = Laporan::whereIn('kd_member', $communityMembers)
                ->orderBy('tgl_dibuat', 'desc')
                ->get();
        } else {
            // If not, only show user's own reports
            $laporans = Laporan::where('kd_member', $memberKomunitas->kd_member)
                ->orderBy('tgl_dibuat', 'desc')
                ->get();
        }
    
        return view('riwayatLaporan', compact('laporans'));
    }
    
    public function download($kd_laporan)
    {
        $user = Auth::user();
        $memberKomunitas = MemberKomunitas::where('id', $user->id)->first();
    
        if (!$memberKomunitas) {
            return back()->with('error', 'Anda tidak memiliki akses untuk mengunduh file ini.');
        }

        // Get all member IDs from the same community
        $communityMembers = MemberKomunitas::where('kd_komunitas', $memberKomunitas->kd_komunitas)
            ->pluck('kd_member');
    
        $laporan = Laporan::whereIn('kd_member', $communityMembers)
            ->where('kd_laporan', $kd_laporan)
            ->firstOrFail();
    
        if (!$memberKomunitas->jabatan->isLeadershipRole()) {
            return back()->with('error', 'Hanya pengguna dengan jabatan kepemimpinan yang dapat mengunduh file ini.');
        }
    
        if ($laporan->file) {
            $filePath = public_path('storage/laporan_files/' . $laporan->file);
            if (file_exists($filePath)) {
                return response()->download($filePath);
            }
        }
    
        return back()->with('error', 'File tidak ditemukan.');
    }
}