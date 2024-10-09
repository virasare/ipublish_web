<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class User
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }
        
        $user = Auth::user();
        $userRoles = $user->roles;
        
        // Jika pengguna adalah admin, arahkan ke halaman admin
        if ($userRoles == 1) {
            return redirect()->route('admin/beranda');
        }
        
        // Jika pengguna adalah "added by dosen", cegah mereka untuk masuk ke halaman admin
        if ($user->roles == 2 && $user->added_by_dosen)  {
            return redirect()->route('/');
        }
        
        return $next($request); // Biarkan pengguna non-admin mengakses halaman yang diinginkan
    }
}
