<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class Admin
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
        
        // $userRoles = Auth::user()->roles;
        $user = Auth::user();
        
        // Cek apakah pengguna adalah admin
        if ($user->roles == 1) {
            return $next($request);
        }
        
        // Cek apakah user ditambahkan oleh dosen
        if ($user->roles == 2 && $user->added_by_dosen) {
            return redirect('/');
        }

        return redirect()->route('users/beranda');
    }
}
