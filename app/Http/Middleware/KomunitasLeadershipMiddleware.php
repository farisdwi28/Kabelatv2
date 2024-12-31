<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class KomunitasLeadershipMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (!$request->attributes->get('isLeadership', false)) {
            return redirect()->route('komunitas.show')
                ->with('error', 'Anda tidak memiliki akses untuk fitur ini.');
        }

        return $next($request);
    }
}