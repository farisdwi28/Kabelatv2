<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\MemberKomunitas;
use Illuminate\Support\Facades\Auth;

class KomunitasMiddleware   
{
    public function handle(Request $request, Closure $next)
    {
        if (!Auth::check()) {
            return redirect()->route('login')
                ->with('error', 'Silakan login terlebih dahulu.');
        }
    
        $user = Auth::user();
        $memberInfo = MemberKomunitas::where('id', $user->id)->first();
        
        if (!$memberInfo) {
            return redirect()->route('komunitas.show')
                ->with('error', 'Anda harus menjadi anggota komunitas terlebih dahulu.');
        }
    
        // Tambahkan informasi member ke dalam request
        $request->attributes->add([
            'memberInfo' => $memberInfo,
            'isLeadership' => $memberInfo->kd_jabatan !== 'ANGGT', // Jabatan selain anggota
        ]);
    
        // Batasi akses halaman tertentu
        if (!$memberInfo->jabatan || !$memberInfo->jabatan->isLeadershipRole()) {
            return redirect()->route('dashboard')
                ->with('error', 'Anda tidak memiliki akses ke halaman ini.');
        }
        return $next($request);
    }
    
}