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
        $memberInfo = MemberKomunitas::where('kd_member', $user->kd_pen)->first();

        if (!$memberInfo) {
            return redirect()->route('komunitas.show')
                ->with('error', 'Anda harus menjadi anggota komunitas terlebih dahulu.');
        }

        // Add member info to the request for use in views
        $request->attributes->add([
            'memberInfo' => $memberInfo,
            'isLeadership' => in_array($memberInfo->kd_jabatan, ['KETUA', 'WAKIL', 'SEKRE', 'BENDA']),
        ]);

        return $next($request);
    }
}