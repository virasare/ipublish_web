<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;



class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        \Log::info('User not authenticated, redirecting to login.');
        $request->authenticate();
    
        $request->session()->regenerate();

        $user = $request->user();
        
        // Logika pengalihan berdasarkan role
        if ($request->user()->roles == 1) {
            return redirect('admin/beranda');
        }
        if ($user->roles == 2 && $user->added_by_dosen)  {
            return redirect('/');
        }
        
        return redirect('users/beranda');

    }
    

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    
    }

}
