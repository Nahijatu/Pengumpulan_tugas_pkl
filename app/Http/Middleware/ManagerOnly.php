<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ManagerOnly
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // Cek apakah pengguna yang login adalah manager
        if (Auth::check() && Auth::user()->status === 'manager') {
            return $next($request); // Izinkan akses jika pengguna adalah manager
        }

        // Redirect ke halaman utama dengan pesan error jika bukan manager
        return redirect()->route('home')->with('error', 'Anda tidak memiliki akses ke halaman ini.');
    }
}
