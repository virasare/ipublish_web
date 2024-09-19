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

        $userRoles = Auth::user()->roles;

        if ($userRoles == 1) {
            return $next($request);
        }
        // if ($userRoles == 2) {
        //     return redirect()->route('users.beranda');
        // }
        if ($userRoles == 2) {
            return redirect('/');
        }
        

        // Fallback jika role tidak dikenali
        // return redirect()->route('login')->with('error', 'You do not have permission to access this page.');
    }
}
