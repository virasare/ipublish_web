<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\User; // Pastikan model User diimport jika diperlukan
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class InformasiController extends Controller
{
    public function mahasiswa()
    {
        $dosen = Dosen::all();
        $mhs = Mahasiswa::orderBy('created_at', 'desc')->get();
        return view('admin.mahasiswa', ['mahasiswa' => $mhs, 'dosen' => $dosen]);
    }

    public function dosen()
    {
        $dosen = Dosen::orderBy('created_at', 'desc')->get();
        return view('admin.dosen', ['dosen' => $dosen]);
    }

    public function detailDosen($nip)
    {
        $dosen = Dosen::where('NIP', $nip)->first();
        return view('admin.detailDosen', ['dosen' => $dosen]);
    }
    public function tambahDosen(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'NIP' => 'required|string|max:255',
                'NIDN' => 'required|string|max:255',
                'nama_dosen' => 'required|string|max:30',
                'no_telp' => 'required|string|max:30',
                'email' => 'required|email|unique:users,email',
                'password' => 'required|string|min:8',
            ]);

            // Cek apakah user dengan email yang sama sudah ada
            $user = User::where('email', $validatedData['email'])->first();

            if (!$user) {
                $user = User::create([
                    'name' => $validatedData['nama_dosen'],
                    'email' => $validatedData['email'],
                    'password' => Hash::make($validatedData['password']),
                    'roles' => 2, // Set default role
                    'added_by_dosen' => 1, // Tandai sebagai ditambahkan oleh dosen
                ]);
            }

            // Update atau buat data dosen
            Dosen::updateOrCreate(
                ['NIP' => $validatedData['NIP']],
                [
                    'NIDN' => $validatedData['NIDN'],
                    'nama_dosen' => $validatedData['nama_dosen'],
                    'no_telp' => $validatedData['no_telp'],
                    'email' => $validatedData['email'],
                ]
            );

            return response()->json(['success' => true, 'message' => 'Data berhasil disimpan!']);
        } catch (\Exception $e) {
            \Log::error('Error adding dosen: ' . $e->getMessage());
            return response()->json(['success' => false, 'message' => 'Terjadi kesalahan saat menyimpan data.'], 500);
        }
    }


    public function editDosen(Request $request)
    {
        try {
            \Log::info('Data yang diterima: ', $request->all());

            // Ambil dosen berdasarkan NIP yang ingin diubah
            $dosen = Dosen::where('NIP', $request->input('NIP_asli'))->firstOrFail();


            // Validate incoming data dengan aturan unique yang menggunakan NIP
            $validatedData = $request->validate([
                'NIP' => 'nullable|string|max:255|unique:dosen,NIP,' . $dosen->NIP . ',NIP', // Gunakan NIP untuk pengecekan unique
                'NIDN' => 'nullable|string|max:255',
                'nama_dosen' => 'nullable|string|max:30',
                'no_telp' => 'nullable|string|max:30',
                'email' => 'nullable|string|email|unique:dosen,email,' . $dosen->email . ',email', // Pastikan tabel yang benar
            ]);

            $dosen->update(array_filter([
                'NIP' => $validatedData['NIP'] ?? $dosen->NIP,
                'NIDN' => $validatedData['NIDN'] ?? $dosen->NIDN,
                'nama_dosen' => $validatedData['nama_dosen'] ?? $dosen->nama_dosen,
                'no_telp' => $validatedData['no_telp'] ?? $dosen->no_telp,
                'email' => $validatedData['email'] ?? $dosen->email,
            ]));

            return response()->json(['success' => true, 'message' => 'Data berhasil diperbarui!']);
        } catch (\Exception $e) {
            \Log::error($e->getMessage());
            return response()->json(['success' => false, 'message' => 'Terjadi kesalahan saat memperbarui data.'], 500);
        }
    }

    public function destroyDosen($nip)
{
    try {
        $dosen = Dosen::where('NIP', $nip)->first();

        if ($dosen) {
            User::where('email', $dosen->email)->where('added_by_dosen', 1)->delete();
            $dosen->delete();
            return redirect()->route('admin.dosen')->with('success', 'Data dosen berhasil dihapus.');
        } else {
            return redirect()->route('admin.dosen')->with('error', 'Data dosen tidak ditemukan.');
        }
    } catch (\Exception $e) {
        \Log::error($e->getMessage());
        return redirect()->route('admin.dosen')->with('error', 'Terjadi kesalahan saat menghapus data.');
    }
}

}
