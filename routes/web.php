<?php    

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PengajuanUserController;
use App\Http\Controllers\PengajuanAdminController;
use App\Http\Controllers\InformasiController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\SubmissionController;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Models\Beranda;
use App\Models\Dosen;



// Route untuk halaman utama
Route::get('/', function () {
    return view('home');
});


// Rute untuk Admin
Route::get('/admin/beranda', function () {
    return view('admin.beranda');
})->middleware(['auth', 'verified', 'admin'])->name('admin.beranda');

Route::middleware('auth', 'admin')->group(function (){
    Route::prefix('admin')->group(function () {
        Route::get('/profile/{id}', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::get('/hki', [PengajuanAdminController::class, 'hki'])->name('admin.hki');
        Route::get('users/export-hki', [PengajuanAdminController::class, 'exportHki'])->name('export.hki');
        Route::get('/publikasi', [PengajuanAdminController::class, 'publikasi'])->name('admin.publikasi');
        Route::get('users/export-publikasi', [PengajuanAdminController::class, 'exportPublikasi'])->name('export.publikasi');
        Route::get('/mahasiswa', [InformasiController::class, 'mahasiswa'])->name('admin.mahasiswa');
        Route::get('/dosen', [InformasiController::class, 'dosen'])->name('admin.dosen');
        Route::post('/dosen/store', [InformasiController::class, 'tambahDosen'])->name('dosen.store');
        Route::get('admin/role', [PengajuanUserController::class, 'role'])->name('admin.role');
        Route::post('admin/role', [PengajuanUserController::class, 'editRole']);
        Route::get('/beranda', [BerandaController::class, 'index'])->name('admin.beranda');
        Route::post('/beranda', [BerandaController::class, 'store'])->name('admin.beranda.store');
        Route::get('beranda/{slug}/edit', [BerandaController::class, 'edit'])->name('beranda.edit');
        Route::post('/beranda/update', [BerandaController::class, 'update'])->name('admin.beranda.update');
        Route::delete('/edit-beranda/{slug}', [BerandaController::class, 'destroy'])->name('admin.beranda.delete');
    });
    
        Route::get('/hki/{nim_mhs}', [PengajuanAdminController::class, 'detail'])->name('admin.hki.detail');
        Route::get('/publikasi/{nim_mhs}', [PengajuanAdminController::class, 'detailPublikasi'])->name('admin.publikasi.detail');
        
        Route::post('/edit-form', [PengajuanAdminController::class, 'editForm'])->name('edit.form');
        Route::post('/edit-form-pub', [PengajuanAdminController::class, 'editFormPub'])->name('edit.form.pub');

        Route::get('/mahasiswa/{nim_mhs}', [InformasiController::class, 'editMhs'])->name('admin.mahasiswa.detail');
        Route::delete('/mahasiswa/{nim}', [InformasiController::class, 'destroy'])->name('admin.mahasiswa.delete');
        Route::post('/edit-mhs', [InformasiController::class, 'editMahasiswa'])->name('edit.mhs');
        Route::post('/tambah-mhs', [InformasiController::class, 'tambahMhs'])->name('tambah.mhs');

        Route::post('/tambah-dosen', [InformasiController::class, 'tambahDosen'])->name('tambah.dosen');
        Route::get('/dosen/{id}', [InformasiController::class, 'detailDosen'])->name('admin.dosen.detail');
        Route::delete('/dosen/{nip}', [InformasiController::class, 'destroyDosen'])->name('admin.dosen.delete');
        Route::post('/edit-dosen', [InformasiController::class, 'editDosen'])->name('edit.dosen');
});

//Route searching admin
Route::get('/admin/dosen', function() {
    return view('/admin/dosen', ['nama_dosen' => 'add-dosen-form', 'dosen' => Dosen::filter(request(['search']))->latest()->get()]);
})->name('admin.dosen');


// Route user
Route::get('/users/beranda', function () {
    return view('users/beranda');
})->middleware(['auth', 'verified', 'users'])->name('users.beranda');

// Rute untuk User
Route::prefix('users')->group(function () {
    Route::get('/hki', [SubmissionController::class, 'hki'])->name('users.hki');
    Route::get('/publikasi', [SubmissionController::class, 'publikasi'])->name('users.publikasi');
    Route::get('/beranda', [SubmissionController::class, 'beranda'])->middleware(['auth', 'verified'])->name('users.beranda');
    // Route::get('/beranda/{slug}', [SubmissionController::class, 'berandaDetail'])->middleware(['auth', 'verified'])->name('users.beranda.detail');
    
});

Route::get('/beranda/{brd:slug}', function (Beranda $brd) {
    return view('users.berandadetail', ['post' => $brd]);
})->middleware(['auth', 'verified'])->name('users.beranda.detail');


    Route::post('/submit-form', [SubmissionController::class, 'submitForm'])->name('submit.form');
    Route::post('/submit-form-pub', [SubmissionController::class, 'submitFormPub'])->name('submit.form.pub');

   
// Mengimpor route otentikasi
require __DIR__.'/auth.php';

Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');
Route::post('/login', [AuthenticatedSessionController::class, 'store']);
