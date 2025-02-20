<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\MemberKomunitas;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class KomunitasMiddleware   
{
    public function handle(Request $request, Closure $next)
    {
        if (!Auth::check()) {
            return redirect()->route('login')
                ->with('error', 'Silakan login terlebih dahulu.');
        }
    
        $user = Auth::user();
        
        // Updated join with struktur_jabatan table
        $memberInfo = DB::table('member_komunitas')
            ->join('struktur_jabatan', 'member_komunitas.kd_jabatan', '=', 'struktur_jabatan.kd_jabatan')
            ->where('member_komunitas.kd_member', $user->kd_pen)
            ->select('member_komunitas.*', 'struktur_jabatan.nama_jabatan')
            ->first();
    
        if (!$memberInfo) {
            return redirect()->route('komunitas.show')
                ->with('error', 'Anda harus menjadi anggota komunitas terlebih dahulu.');
        }
    
        // Add member info to request
        $request->attributes->add([
            'memberInfo' => $memberInfo,
            'isLeadership' => $memberInfo->kd_jabatan !== 'ANGGT',
        ]);
    
        // Check role based on kd_jabatan
        if ($memberInfo->kd_jabatan === 'ANGGT') {
            return redirect()->route('dashboard')
                ->with('error', 'Anda tidak memiliki akses ke halaman ini.');
        }

        return $next($request);
    }
}