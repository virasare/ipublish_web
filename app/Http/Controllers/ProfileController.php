<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class ProfileController extends Controller
{
    public function edit($user)
    {
        $results = User::join('dosen', 'users.email', '=', 'dosen.email')
            ->select('users.*', 'dosen.*')
            ->where('users.email', $user)
            ->first();

        if (!$results) {
            return redirect()->back()->with('error', 'Data tidak ditemukan.');
        }

        return view('admin.profile', ['dosen' => $results]);
    }

    public function update(Request $request)
    {
        // Validasi data yang dikirimkan
        $validated = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);
    
        $email = $validated['email'];
        $newPassword = $validated['password'];
    
        // Temukan pengguna berdasarkan email
        $user = User::where('email', $email)->first();
    
        // Periksa apakah pengguna ditemukan
        if ($user) {
            // Hash password baru dan simpan
            $user->password = Hash::make($newPassword);
            $user->save();
    
            // Redirect dengan pesan sukses
            return redirect()->back()->with('success', 'Data berhasil disimpan!');
        } else {
            // Jika terjadi kesalahan, catat dan tampilkan pesan kesalahan
            \Log::error('User not found for email: ' . $email);
            return redirect()->back()->with('error', 'Terjadi kesalahan saat menyimpan data.');
        }
    }    
}
