<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests;

class PengajuanUserController extends Controller
{
    public function role()
    {
        $user = User::where(function ($query) {
            $query->where('roles', 1) // Include admin
                ->orWhere(function ($subQuery) {
                    $subQuery->where('roles', 2)
                               ->where('added_by_dosen', true); // Include added_by_dosen users with roles 2
                });
        })
        ->orderBy('created_at', 'desc') // Mengurutkan berdasarkan created_at secara descending
        ->paginate(10);
    
        // Tambahkan log untuk debug
        \Log::info('Users for role page:', ['users' => $user]);
    
        return view('admin.ubahRole', ['user' => $user]);
    }
    

    
    
    public function editRole(Request $request)
    {
        $request->validate([
            'roles.*' => 'required|in:1,2',
        ]);
    
        foreach ($request->roles as $userId => $role) {
            $user = User::find($userId);
            if ($user) {
                $user->roles = $role;
                $user->save();
            }
        }
    
        return redirect()->route('admin.role')->with('success', 'Role berhasil diubah');
    }
}


