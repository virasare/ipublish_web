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
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Http;

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
                ]
            );

            
            $userName = $request->input('nama_mhs');
            // Tentukan base path yang diinginkan
            $folderBasePath = 'HKI/' . $userName; // Path dasar menjadi 'HKI/Vira-Sare'

            // Tentukan path untuk setiap file
            $filePaths = [
                'manualBook' => $request->file('manual_book') ? 
                Storage::disk('google')->putFileAs($folderBasePath . '/manual-book', $request->file('manual_book'), $request->file('manual_book')->getClientOriginalName()) : null,
                
                'fomulirDokumen' => $request->file('fomulir_dokumen') ? 
                Storage::disk('google')->putFileAs($folderBasePath . '/fomulir-dokumen', $request->file('fomulir_dokumen'), $request->file('fomulir_dokumen')->getClientOriginalName()) : null,
                
                'sertifikatHki' => $request->file('sertifikat_hki') ? 
                Storage::disk('google')->putFileAs($folderBasePath . '/sertifikat-hki', $request->file('sertifikat_hki'), $request->file('sertifikat_hki')->getClientOriginalName()) : null,
            ];
            
            // Pengajuan HKI pertama
            $pengajuanHki = PengajuanHki::updateOrCreate(
                ['nim_mhs' => $validatedData['nim_mhs']],
                [
                    'submission_date' => now(),
                    'status' => 'diajukan',
                    'manual_book' => $filePaths['manualBook'],  // Menyimpan nama file yang diunggah ke Google Drive
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
                    'dosen_pa' => $validatedData['dosen_pa'],
                    'dosen_p1' => $validatedData['dosen_p1'],
                    'dosen_p2' => $validatedData['dosen_p2']
                ]
            );

            $userName = $request->input('nama_mhs');
            $folderBasePath = 'Publikasi/'.$userName;

            $filePaths = [
                'sertifikatSnatia' => $request->file('sertifikat_snatia') ?
                Storage::disk('google')->putFileAs($folderBasePath .'/berkas-snatia/sertifikat-snatia', $request->file('sertifikat_snatia'), $request->file('sertifikat_snatia')->getClientOriginalName()):null,
                'turnitinSnatia' => $request->file('turnitin_snatia') ?
                Storage::disk('google')->putFileAs($folderBasePath .'/berkas-snatia/turnitin-snatia', $request->file('turnitin_snatia'), $request->file('turnitin_snatia')->getClientOriginalName()):null,
                'loaSnatia' => $request->file('loa_snatia') ?
                Storage::disk('google')->putFileAs($folderBasePath .'/berkas-snatia/loa-snatia', $request->file('loa_snatia'), $request->file('loa_snatia')->getClientOriginalName()):null,

                'turnitinPkl' => $request->file('turnitin_pkl') ?
                Storage::disk('google')->putFileAs($folderBasePath.'/berkas-pkl/turnitin-pkl', $request->file('turnitin_pkl'), $request->file('turnitin_pkl')->getClientOriginalName()):null,
                'loaPkl' => $request->file('loa_pkl') ?
                Storage::disk('google')->putFileAs($folderBasePath.'/berkas-pkl/loa-pkl', $request->file('loa_pkl'), $request->file('loa_pkl')->getClientOriginalName()):null,
                'manualBookHkiPkl' => $request->file('manual_book_hki_pkl') ?
                Storage::disk('google')->putFileAs($folderBasePath.'/berkas-pkl/manual-book-hki-pkl', $request->file('manual_book_hki_pkl'), $request->file('manual_book_hki_pkl')->getClientOriginalName()):null,
                'sertifikatHkiPkl' => $request->file('sertifikat_hki_pkl') ?
                Storage::disk('google')->putFileAs($folderBasePath.'/berkas-pkl/sertifikat-hki-pkl', $request->file('sertifikat_hki_pkl'), $request->file('sertifikat_hki_pkl')->getClientOriginalName()):null,
                'formPendaftaranHKIPkl' => $request->file('form_pendaftaran_hki_pkl') ?
                Storage::disk('google')->putFileAs($folderBasePath.'/berkas-pkl/form-pendaftaran-hki-pkl', $request->file('form_pendaftaran_hki_pkl'), $request->file('form_pendaftaran_hki_pkl')->getClientOriginalName()):null,

                'laporanTugasAkhir' => $request->file('laporan_tugas_akhir') ?
                Storage::disk('google')->putFileAs($folderBasePath.'/berkas-ta/laporan-tugas-akhir', $request->file('laporan_tugas_akhir'), $request->file('laporan_tugas_akhir')->getClientOriginalName()):null,
                'beritaAcaraUjianTA' => $request->file('berita_acara_ujian_ta') ?
                Storage::disk('google')->putFileAs($folderBasePath.'/berkas-ta/berita-acara-ujian-ta', $request->file('berita_acara_ujian_ta'), $request->file('berita_acara_ujian_ta')->getClientOriginalName()):null,
                'lembarPengesahanTA' => $request->file('lembar_pengesahan_ta') ?
                Storage::disk('google')->putFileAs($folderBasePath.'/berkas-ta/lembar-pengesahan-ta', $request->file('lembar_pengesahan_ta'), $request->file('lembar_pengesahan_ta')->getClientOriginalName()):null,
                'fileProgramTA' => $request->file('file_program_ta') ?
                Storage::disk('google')->putFileAs($folderBasePath.'/berkas-ta/file-program-ta', $request->file('file_program_ta'), $request->file('file_program_ta')->getClientOriginalName()):null,
                'uploadDraftJurnalTA' => $request->file('upload_draft_jurnal_ta') ?
                Storage::disk('google')->putFileAs($folderBasePath.'/berkas-ta/upload-draft-jurnal-ta', $request->file('upload_draft_jurnal_ta'), $request->file('upload_draft_jurnal_ta')->getClientOriginalName()):null,
                'fileTurnitinDraftJurnalTA' => $request->file('file_turnitin_draft_jurnal_ta') ?
                Storage::disk('google')->putFileAs($folderBasePath.'/berkas-ta/file-turnitin-draft-jurnal-ta', $request->file('file_turnitin_draft_jurnal_ta'), $request->file('file_turnitin_draft_jurnal_ta')->getClientOriginalName()):null,
                'loaPublikasiMakalahTA' => $request->file('loa_publikasi_makalah_ta') ?
                Storage::disk('google')->putFileAs($folderBasePath.'/berkas-ta/loa-publikasi-makalah-ta', $request->file('loa_publikasi_makalah_ta'), $request->file('loa_publikasi_makalah_ta')->getClientOriginalName()):null,
                'uploadFileManualBookTA' => $request->file('upload_file_manual_book_ta') ?
                Storage::disk('google')->putFileAs($folderBasePath.'/berkas-ta/manual-book-ta', $request->file('upload_file_manual_book_ta'), $request->file('upload_file_manual_book_ta')->getClientOriginalName()):null,
                'uploadFilePendaftaranHKITA' => $request->file('upload_file_pendaftaran_hki_ta') ?
                Storage::disk('google')->putFileAs($folderBasePath.'/berkas-ta/upload-file-pendaftaran-hki-ta', $request->file('upload_file_pendaftaran_hki_ta'), $request->file('upload_file_pendaftaran_hki_ta')->getClientOriginalName()):null,
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