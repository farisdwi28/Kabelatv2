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
        $komunitasList = Komunitas::paginate(6); // Add pagination
        view()->share('komunitasList', $komunitasList);
    }

    public function show($kd_komunitas = null)
    {
        if ($kd_komunitas) {
            $komunitas = Komunitas::where('kd_komunitas', $kd_komunitas)->first();
            if (!$komunitas) {
                return redirect()->route('home')->with('error', 'Komunitas tidak ditemukan.');
            }
            return view('galeriKomunitas', compact('komunitas'));
        }

        $query = Komunitas::query();

        if (request('search')) {
            $search = request('search');
            $query->where('nm_komunitas', 'like', "%{$search}%");
        }

        $komunitasList = $query->paginate(6);
        return view('galeriKomunitas', compact('komunitasList'));
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

        $isMember = false;
        $userKomunitas = null;
        $memberData = null;

        if (Auth::check()) {
            $user = Auth::user();
            // Menggunakan kd_member sesuai dengan middleware
            $memberData = MemberKomunitas::select('member_komunitas.*', 'komunitas.nm_komunitas')
                ->join('komunitas', 'komunitas.kd_komunitas', '=', 'member_komunitas.kd_komunitas')
                ->where([
                    ['member_komunitas.kd_member', $user->kd_pen], // Ganti dari id ke kd_member
                    ['member_komunitas.kd_komunitas', $kd_komunitas]
                ])
                ->first();

            // Cek juga apakah user terdaftar di komunitas lain
            $otherKomunitas = MemberKomunitas::select('member_komunitas.*', 'komunitas.nm_komunitas')
                ->join('komunitas', 'komunitas.kd_komunitas', '=', 'member_komunitas.kd_komunitas')
                ->where('member_komunitas.kd_member', $user->kd_pen) // Ganti dari id ke kd_member
                ->where('member_komunitas.kd_komunitas', '!=', $kd_komunitas)
                ->first();

            if ($memberData) {
                $isMember = true;
                $userKomunitas = $komunitas;
            } elseif ($otherKomunitas) {
                $isMember = true;
                $userKomunitas = Komunitas::where('kd_komunitas', $otherKomunitas->kd_komunitas)->first();
                $memberData = $otherKomunitas;
            }
        }

        return view('joinKomunitas', compact('komunitas', 'isMember', 'userKomunitas', 'memberData'));
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
    
            // Cek keanggotaan menggunakan kd_member
            $existingMembership = MemberKomunitas::where('kd_member', $user->kd_pen)->first();
    
            if ($existingMembership) {
                return redirect()->route('komunitas.detail', $kd_komunitas)
                    ->with('error', 'Anda sudah menjadi anggota komunitas. Tidak dapat bergabung lebih dari satu komunitas.');
            }
    
            // Cek apakah sudah menjadi anggota di komunitas ini
            $existingMember = MemberKomunitas::where('kd_member', $user->kd_pen)
                ->where('kd_komunitas', $kd_komunitas)
                ->first();
    
            if ($existingMember) {
                return redirect()->route('komunitas.detail', $kd_komunitas)
                    ->with('error', 'Anda sudah menjadi anggota komunitas ini.');
            }
    
            // Generate member code using the same method as admin
            $latestMember = MemberKomunitas::orderBy('kd_member', 'desc')->first();
            $memberCode = !$latestMember ? 'M0001' : 'M' . str_pad((intval(substr($latestMember->kd_member, 1)) + 1), 4, '0', STR_PAD_LEFT);
    
            // Proses join
            DB::beginTransaction();
    
            $member = new MemberKomunitas();
            $member->kd_member = $memberCode; // Using the generated code
            $member->id = $user->id;
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
