<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Mahasiswa;
use App\Models\PengajuanHKI;
use App\Models\PengajuanPublikasi;
use Illuminate\Support\Facades\Storage;
use App\Exports\ExportHki;
use App\Exports\ExportPublikasi;
use Maatwebsite\Excel\Facades\Excel;


class PengajuanAdminController extends Controller
{
    public function hki()
    {
        $mhs = Mahasiswa::join('pengajuan_hki', 'mahasiswa.nim_mhs', '=', 'pengajuan_hki.nim_mhs')
            ->select('mahasiswa.*', 'pengajuan_hki.status')
            ->orderBy('pengajuan_hki.created_at', 'desc')
            ->paginate(10);

            
        return view('admin.hki', ['mahasiswa' => $mhs]); 

    }

    public function exportHki()
    {
        return Excel::download(new ExportHki, 'export_hki.xlsx');
    }
    

    public function publikasi()
    {
        $mhs = Mahasiswa::join('pengajuan_publikasi', 'mahasiswa.nim_mhs', '=', 'pengajuan_publikasi.nim_mhs')
            ->select('mahasiswa.*', 'pengajuan_publikasi.tanggal_pengajuan', 'pengajuan_publikasi.status')
            ->orderBy('pengajuan_publikasi.created_at', 'desc')
            ->paginate(10);

        return view('admin.publikasi', ['mahasiswa' => $mhs]);
    }

    public function exportPublikasi()
    {
        return Excel::download(new ExportPublikasi, 'export_publikasi.xlsx');
    }

    public function detail($nim_mhs)
    {
        $mahasiswa = Mahasiswa::join('pengajuan_hki', 'mahasiswa.nim_mhs', '=', 'pengajuan_hki.nim_mhs')
            ->select('mahasiswa.*', 'pengajuan_hki.*')
            ->where('mahasiswa.nim_mhs', $nim_mhs)
            ->first();

        return view('admin.detailHKI', ['mahasiswa' => $mahasiswa]);
    }

    public function detailPublikasi($nim_mhs)
    {
        $mahasiswa = Mahasiswa::join('pengajuan_publikasi', 'mahasiswa.nim_mhs', '=', 'pengajuan_publikasi.nim_mhs')
            ->select('mahasiswa.*', 'pengajuan_publikasi.*')
            ->where('mahasiswa.nim_mhs', $nim_mhs)
            ->first();

        return view('admin.detailPublikasi', ['mahasiswa' => $mahasiswa]);
    }

    public function editForm(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'nim_mhs' => 'required|string',
                'status' => 'required|string',
                'komentar' => 'nullable|string|max:255',
            ]);

            $pengajuanHKI = PengajuanHKI::where('nim_mhs', $validatedData['nim_mhs'])->first();

            if (!$pengajuanHKI) {
                return response()->json(['success' => false, 'message' => 'Data tidak ditemukan.'], 404);
            }

            $pengajuanHKI->status = $validatedData['status'];
            $pengajuanHKI->komentar = $validatedData['komentar'];
            $pengajuanHKI->save();

            return response()->json(['success' => true, 'message' => 'Data berhasil disimpan!']);
        } catch (\Exception $e) {
            \Log::error($e->getMessage());
            return response()->json(['success' => false, 'message' => 'Terjadi kesalahan saat menyimpan data.'], 500);
        }
    }

    public function editFormPub(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'nim_mhs' => 'required|string',
                'status' => 'required|string',
                'komentar' => 'nullable|string|max:255',
            ]);

            $pengajuanPub = PengajuanPublikasi::where('nim_mhs', $validatedData['nim_mhs'])->first();

            if (!$pengajuanPub) {
                return response()->json(['success' => false, 'message' => 'Data tidak ditemukan.'], 404);
            }

            $pengajuanPub->status = $validatedData['status'];
            $pengajuanPub->komentar = $validatedData['komentar'];
            $pengajuanPub->save();

            return response()->json(['success' => true, 'message' => 'Data berhasil disimpan!']);
        } catch (\Exception $e) {
            \Log::error($e->getMessage());
            return response()->json(['success' => false, 'message' => 'Terjadi kesalahan saat menyimpan data.'], 500);
        }
    }
}
