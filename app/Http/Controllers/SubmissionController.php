<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Dosen;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Models\Mahasiswa;
use App\Models\PengajuanHKI;
use App\Models\PengajuanPublikasi;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Models\Beranda;

class SubmissionController extends Controller
{
    public function beranda()
    {
        // Mengurutkan data berdasarkan kolom created_at dari yang terbaru
        $posts = Beranda::where('status', 'active')
                        ->orderBy('created_at', 'desc') // Mengurutkan berdasarkan created_at dari yang terbaru
                        ->get();
        
        // Menghitung jumlah data dengan status 'active'
        $jumlahActive = Beranda::where('status', 'active')->count();
        
        return view('users.beranda', ['posts' => $posts, 'countPosts' => $jumlahActive]); 
    }
    
    public function berandaDetail($slug)
    {
        $post = Beranda::where('slug', $slug)->firstOrFail();
        
        return view('users.berandadetail', ['post' => $post]);
    }
    
    
    public function hki(User $user)
    {
        $dosen = Dosen::all();
        $email = Auth::user()->email;
    
        $pengajuanHkiData = PengajuanHKI::whereHas('mahasiswa', function ($query) use ($email) {
            $query->where('email', $email);
        })->get();
    
        if (request()->ajax()) {
            return response()->json(['userData' => $pengajuanHkiData]);
        }    
    
        return view('users.hki', [
            'id' => $user->name,
            'dosen' => $dosen,
            'email' => $email,
            'userData' => $pengajuanHkiData
        ]); 
    }
    
    public function submitForm(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'nim_mhs' => 'required|integer',
                'nama_mhs' => 'required|string|max:255',
                'email' => 'required|email',
                'kelompok' => 'required|string|max:30',
                'dosen_pa' => 'nullable|string|max:255',
                'dosen_p1' => 'nullable|string|max:255',
                'dosen_p2' => 'nullable|string|max:255',
                'manual_book' => 'nullable|file|mimes:pdf',
                'fomulir_dokumen' => 'nullable|file|mimes:pdf',
                'sertifikat_hki' => 'nullable|file|mimes:pdf',
            ]);
    
            // Update or create mahasiswa data
            $mahasiswa = Mahasiswa::updateOrCreate(
                ['nim_mhs' => $validatedData['nim_mhs']],
                [
                    'nama_mhs' => $validatedData['nama_mhs'],
                    'email' => $validatedData['email'],
                    'kelompok' => $validatedData['kelompok'],
                    'dosen_pa' => $validatedData['dosen_pa'],
                    'dosen_p1' => $validatedData['dosen_p1'],
                    'dosen_p2' => $validatedData['dosen_p2']
                ]
            );
    
            // Store files and update the PengajuanHki model
            $filePaths = [
                'manualBook' => $request->file('manual_book') ? 
                    $request->file('manual_book')->storeAs('', $request->file('manual_book')->getClientOriginalName(), 'public') : null,
                'fomulirDokumen' => $request->file('fomulir_dokumen') ? 
                    $request->file('fomulir_dokumen')->storeAs('', $request->file('fomulir_dokumen')->getClientOriginalName(), 'public') : null,
                'sertifikatHki' => $request->file('sertifikat_hki') ? 
                    $request->file('sertifikat_hki')->storeAs('', $request->file('sertifikat_hki')->getClientOriginalName(), 'public') : null,
            ];
    
            // Update or create pengajuanHki data
            $pengajuanHki = PengajuanHki::updateOrCreate(
                ['nim_mhs' => $validatedData['nim_mhs']],
                [
                    'submission_date' => now(),
                    'status' => 'diajukan',
                    'manual_book' => $filePaths['manualBook'],
                    'fomulir_dokumen' => $filePaths['fomulirDokumen'],
                    'sertifikat_hki' => $filePaths['sertifikatHki'],
                    'komentar' => null
                ]
            );
    
            return response()->json(['success' => true, 'message' => 'Data berhasil disimpan!']);
        } catch (\Exception $e) {
            \Log::error($e->getMessage());
            return response()->json(['success' => false, 'message' => 'Terjadi kesalahan saat menyimpan data.'], 500);
        }
    }
    

    public function publikasi(User $user)
    {
        $dosen = Dosen::all();
        $email = Auth::user()->email;
        
        $pengajuanPublikasiData = PengajuanPublikasi::whereHas('mahasiswa', function ($query) use ($email) {
            $query->where('email', $email);
        })->get();

        if (request()->ajax()) {
            return response()->json(['userDataPub' => $pengajuanPublikasiData]);
        }    

        return view('users.publikasi',[
            'dosen' => $dosen,
            'email' => $email,
            'userDataPub' => $pengajuanPublikasiData,
        ]); 
    }

    public function submitFormPub(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'nim_mhs' => 'required|integer',
                'nama_mhs' => 'required|string|max:255',
                'email' => 'required|email',
                'kelompok' => 'required|string|max:30',
                'dosen_pa' => 'nullable|string|max:255',
                'dosen_p1' => 'nullable|string|max:255',
                'dosen_p2' => 'nullable|string|max:255',
                'tanggal_pengajuan' => 'required|date',
                'judul_makalah_snatia' => 'required|string|max:255',
                'sertifikat_snatia' => 'nullable|file|mimes:pdf',
                'turnitin_snatia' => 'nullable|file|mimes:pdf',
                'loa_snatia' => 'nullable|file|mimes:pdf',
                'judul_makalah_pkl' => 'required|string|max:255',
                'turnitin_pkl' => 'nullable|file|mimes:pdf',
                'loa_pkl' => 'nullable|file|mimes:pdf',
                'judul_hki_pkl' => 'required|string|max:255',
                'tanggal_terbit_hki_pkl' => 'required|date',
                'manual_book_hki_pkl' => 'nullable|file|mimes:pdf',
                'sertifikat_hki_pkl' => 'nullable|file|mimes:pdf',
                'form_pendaftaran_hki_pkl' => 'nullable|file|mimes:pdf',
                'judul_tugas_akhir' => 'required|string|max:255',
                'laporan_tugas_akhir' => 'nullable|file|mimes:docx',
                'berita_acara_ujian_ta' => 'nullable|file|mimes:pdf',
                'lembar_pengesahan_ta' => 'nullable|file|mimes:pdf',
                'file_program_ta' => 'nullable|file|mimes:zip',
                'judul_jurnal_ta' => 'required|string|max:255',
                'upload_draft_jurnal_ta' => 'nullable|file|mimes:docx',
                'file_turnitin_draft_jurnal_ta' => 'nullable|file|mimes:pdf',
                'loa_publikasi_makalah_ta' => 'nullable|file|mimes:pdf',
                'judul_manual_book_ta' => 'required|string|max:255',
                'upload_file_manual_book_ta' => 'nullable|file|mimes:docx',
                'upload_file_pendaftaran_hki_ta' => 'nullable|file|mimes:docx',
            ]);
    
            $mahasiswa = Mahasiswa::updateOrCreate(
                ['nim_mhs' => $validatedData['nim_mhs']],
                [
                    'nama_mhs' => $validatedData['nama_mhs'],
                    'email' => $validatedData['email'],
                    'kelompok' => $validatedData['kelompok'],
                    'dosen_pa' => $validatedData['dosen_pa'],
                    'dosen_p1' => $validatedData['dosen_p1'],
                    'dosen_p2' => $validatedData['dosen_p2']
                ]
            );
    
            $filePaths = [
                'sertifikatSnatia' => $request->file('sertifikat_snatia') ? $request->file('sertifikat_snatia')->storeAs('', $request->file('sertifikat_snatia')->getClientOriginalName(), 'public') : null,
                'turnitinSnatia' => $request->file('turnitin_snatia') ? $request->file('turnitin_snatia')->storeAs('', $request->file('turnitin_snatia')->getClientOriginalName(), 'public') : null,
                'loaSnatia' => $request->file('loa_snatia') ? $request->file('loa_snatia')->storeAs('', $request->file('loa_snatia')->getClientOriginalName(), 'public') : null,
                'turnitinPkl' => $request->file('turnitin_pkl') ? $request->file('turnitin_pkl')->storeAs('', $request->file('turnitin_pkl')->getClientOriginalName(), 'public') : null,
                'loaPkl' => $request->file('loa_pkl') ? $request->file('loa_pkl')->storeAs('', $request->file('loa_pkl')->getClientOriginalName(), 'public') : null,
                'manualBookHkiPkl' => $request->file('manual_book_hki_pkl') ? $request->file('manual_book_hki_pkl')->storeAs('', $request->file('manual_book_hki_pkl')->getClientOriginalName(), 'public') : null,
                'sertifikatHkiPkl' => $request->file('sertifikat_hki_pkl') ? $request->file('sertifikat_hki_pkl')->storeAs('', $request->file('sertifikat_hki_pkl')->getClientOriginalName(), 'public') : null,
                'formPendaftaranHKIPkl' => $request->file('form_pendaftaran_hki_pkl') ? $request->file('form_pendaftaran_hki_pkl')->storeAs('', $request->file('form_pendaftaran_hki_pkl')->getClientOriginalName(), 'public') : null,
                'laporanTugasAkhir' => $request->file('laporan_tugas_akhir') ? $request->file('laporan_tugas_akhir')->storeAs('', $request->file('laporan_tugas_akhir')->getClientOriginalName(), 'public') : null,
                'beritaAcaraUjianTA' => $request->file('berita_acara_ujian_ta') ? $request->file('berita_acara_ujian_ta')->storeAs('', $request->file('berita_acara_ujian_ta')->getClientOriginalName(), 'public') : null,
                'lembarPengesahanTA' => $request->file('lembar_pengesahan_ta') ? $request->file('lembar_pengesahan_ta')->storeAs('', $request->file('lembar_pengesahan_ta')->getClientOriginalName(), 'public') : null,
                'fileProgramTA' => $request->file('file_program_ta') ? $request->file('file_program_ta')->storeAs('', $request->file('file_program_ta')->getClientOriginalName(), 'public') : null,
                'uploadDraftJurnalTA' => $request->file('upload_draft_jurnal_ta') ? $request->file('upload_draft_jurnal_ta')->storeAs('', $request->file('upload_draft_jurnal_ta')->getClientOriginalName(), 'public') : null,
                'fileTurnitinDraftJurnalTA' => $request->file('file_turnitin_draft_jurnal_ta') ? $request->file('file_turnitin_draft_jurnal_ta')->storeAs('', $request->file('file_turnitin_draft_jurnal_ta')->getClientOriginalName(), 'public') : null,
                'loaPublikasiMakalahTA' => $request->file('loa_publikasi_makalah_ta') ? $request->file('loa_publikasi_makalah_ta')->storeAs('', $request->file('loa_publikasi_makalah_ta')->getClientOriginalName(), 'public') : null,
                'uploadFileManualBookTA' => $request->file('upload_file_manual_book_ta') ? $request->file('upload_file_manual_book_ta')->storeAs('', $request->file('upload_file_manual_book_ta')->getClientOriginalName(), 'public') : null,
                'uploadFilePendaftaranHKITA' => $request->file('upload_file_pendaftaran_hki_ta') ? $request->file('upload_file_pendaftaran_hki_ta')->storeAs('', $request->file('upload_file_pendaftaran_hki_ta')->getClientOriginalName(), 'public') : null,
            ];            
    
            $pengajuanPublikasi = PengajuanPublikasi::updateOrCreate(
                ['nim_mhs' => $validatedData['nim_mhs']],
                [   
                    'submission_date' => now(),
                    'status' => 'diajukan',
                    'tanggal_pengajuan' => $validatedData['tanggal_pengajuan'],
                    'judul_makalah_snatia' => $validatedData['judul_makalah_snatia'],
                    'sertifikat_snatia' => $filePaths['sertifikatSnatia'],
                    'turnitin_snatia' => $filePaths['turnitinSnatia'],
                    'loa_snatia' => $filePaths['loaSnatia'],
                    'judul_makalah_pkl' => $validatedData['judul_makalah_pkl'],
                    'turnitin_pkl' => $filePaths['turnitinPkl'],
                    'loa_pkl' => $filePaths['loaPkl'],
                    'judul_hki_pkl' => $validatedData['judul_hki_pkl'],
                    'tanggal_terbit_hki_pkl' => $validatedData['tanggal_terbit_hki_pkl'],
                    'manual_book_hki_pkl' => $filePaths['manualBookHkiPkl'],
                    'sertifikat_hki_pkl' => $filePaths['sertifikatHkiPkl'],
                    'form_pendaftaran_hki_pkl' => $filePaths['formPendaftaranHKIPkl'],
                    'judul_tugas_akhir' => $validatedData['judul_tugas_akhir'],
                    'laporan_tugas_akhir' => $filePaths['laporanTugasAkhir'],
                    'berita_acara_ujian_ta' => $filePaths['beritaAcaraUjianTA'],
                    'lembar_pengesahan_ta' => $filePaths['lembarPengesahanTA'],
                    'file_program_ta' => $filePaths['fileProgramTA'],
                    'judul_jurnal_ta' => $validatedData['judul_jurnal_ta'],
                    'upload_draft_jurnal_ta' => $filePaths['uploadDraftJurnalTA'],
                    'file_turnitin_draft_jurnal_ta' => $filePaths['fileTurnitinDraftJurnalTA'],
                    'loa_publikasi_makalah_ta' => $filePaths['loaPublikasiMakalahTA'],
                    'judul_manual_book_ta' => $validatedData['judul_manual_book_ta'],
                    'upload_file_manual_book_ta' => $filePaths['uploadFileManualBookTA'],
                    'upload_file_pendaftaran_hki_ta' => $filePaths['uploadFilePendaftaranHKITA'],
                    'komentar' => null
                ]
            );
    
            return response()->json(['success' => true, 'message' => 'Data berhasil disimpan!']);
        } catch (\Exception $e) {
            \Log::error($e->getMessage());
            return response()->json(['success' => false, 'message' => 'Terjadi kesalahan saat menyimpan data.'], 500);
        }
    }
}