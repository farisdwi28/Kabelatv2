<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Komunitas;
use App\Models\MemberKomunitas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class KomunitasController extends Controller
{
    public function __construct()
    {
        // Membagikan data komunitas ke semua view
        $komunitasList = Komunitas::all();
        view()->share('komunitasList', $komunitasList);
    }
    
    public function show($kd_komunitas = null)
    {
        // Jika ada ID komunitas yang diberikan, ambil komunitas spesifik tersebut
        if ($kd_komunitas) {
            $komunitas = Komunitas::where('kd_komunitas', $kd_komunitas)->first();
    
            // Jika komunitas tidak ditemukan, arahkan ke beranda dengan pesan error
            if (!$komunitas) {
                return redirect()->route('home')->with('error', 'Komunitas tidak ditemukan.');
            }
    
            // Tampilkan detail komunitas
            return view('galerikomunitas', compact('komunitas'));
        }
    
        // Jika tidak ada ID komunitas yang diberikan, gunakan data yang dibagikan
        return view('galerikomunitas');
    }
    
    // Menampilkan daftar komunitas
    public function index()
{
    // Ambil data komunitas
    $komunitasList = Komunitas::all();
    return view('index', compact('komunitasList'));
}
   

    // Menampilkan detail komunitas
    public function detail($kd_komunitas)
    {
        $komunitas = Komunitas::where('kd_komunitas', $kd_komunitas)->first();
        if (!$komunitas) {
            return redirect()->route('home')->with('error', 'Komunitas tidak ditemukan.');
        }
        return view('joinkomunitas', compact('komunitas'));
        
    }

    // Bergabung dengan komunitas
    public function join($kd_komunitas)
    {
        if (!Auth::check()) {
            return redirect()->route('login')
                ->with('info', 'Silakan login untuk bergabung dengan komunitas.');
        }
    
        // Pastikan komunitas ada
        $komunitas = Komunitas::where('kd_komunitas', $kd_komunitas)->first();
        if (!$komunitas) {
            return redirect()->route('home')->with('error', 'Komunitas tidak ditemukan.');
        }
    
        try {
            $user = Auth::user();
    
            // Cek apakah sudah menjadi anggota
            $existingMember = MemberKomunitas::where('kd_member', $user->kd_pen)
                ->where('kd_komunitas', $kd_komunitas)
                ->first();
    
            if ($existingMember) {
                return redirect()->route('komunitas.detail', $kd_komunitas)
                    ->with('error', 'Anda sudah menjadi anggota komunitas ini.');
            }
    
            // Proses join
            DB::beginTransaction();
    
            $member = new MemberKomunitas();
            $member->kd_member = $user->kd_pen;
            $member->id = $user->id;  // Tambahkan id user
            $member->kd_komunitas = $kd_komunitas;
            $member->tgl_bergabung = Carbon::now();
            $member->kd_jabatan = 'ANGGT';
            $member->save();
    
            DB::commit();
    
            return redirect()->route('komunitas.detail', $kd_komunitas)
                ->with('success', 'Berhasil bergabung dengan komunitas!');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()
                ->with('error', 'Terjadi kesalahan saat bergabung dengan komunitas.');
        }
    }
    // Mengecek join komunitas yang tertunda setelah login
    public function checkPendingJoin()
    {
        if (session()->has('intended_komunitas')) {
            $kd_komunitas = session('intended_komunitas');
            session()->forget('intended_komunitas');
            return $this->join($kd_komunitas);
        }

        return null;
    }
    public function showStructure($kd_komunitas)
    {
        // Get the specific community data
        $komunitas = Komunitas::where('kd_komunitas', $kd_komunitas)->first();
        
        if (!$komunitas) {
            return redirect()->route('home')->with('error', 'Komunitas tidak ditemukan.');
        }

        return view('strukturKomunitas', compact('komunitas'));
    }
}
