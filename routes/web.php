<?php

use App\Http\Controllers\BukuController;
use App\Http\Controllers\KameraController;
use App\Http\Controllers\MerekController;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\LensaController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\PinjamController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\SewaController;
use App\Models\Peminjaman;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserPeminjamanController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();


// Route::get('/', function () {
//     return view('layouts.index');
// });


Route::get('merek-kamera', [KameraController::class, 'merek_kamera']);
Route::get('merek-lensa ', [LensaController::class, 'merek_lensa']);

Route::get('/dashboard', function () {
    return view('layouts.index');
})->name('dashboard');

Route::get('/masuk', function () {
    return view('login');
})->name('masuk');

Route::get('/daftar', function () {
    return view('register');
})->name('daftar');
Route::resource('anggota', anggotaController::class);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::resource('kamera', KameraController::class);
// Route Admin
Route::middleware(['cekRole:1'])->group(function () {
    Route::resource('kamera', KameraController::class);
    Route::resource('lensa', LensaController::class);
    Route::get('/laporan/barang', [KameraController::class, 'cetak_pdf']);
    Route::get('/laporan/barangLensa', [KameraController::class, 'cetak_pdfLensa']);
    Route::resource('peminjaman', PeminjamanController::class);
    Route::resource('merek', MerekController::class);
    Route::get('/laporan/merek', [MerekController::class, 'cetak_pdf']);
    Route::resource('/user', UserController::class);
    Route::get('/laporan/user', [UserController::class, 'cetak_pdf']);
    Route::get('/laporan/sewaKamera', [SewaController::class, 'cetak_pdfSewaKamera']);
    Route::get('/laporan/sewaLensaAdmin', [SewaController::class, 'cetak_pdfSewaLensa']);
    Route::resource('pinjam', UserPeminjamanController::class);
    Route::get('/changeStatus', [UserController::class, 'changeStatus']);
    // Route::get('/sewaLensa', [UserPeminjamanController::class, 'indexLensa'])->name('riwayatLensa');
    Route::get('/riwayatLensaAdmin', [UserPeminjamanController::class, 'indexLensaAdmin'])->name('riwayatLensaAdmin');
    Route::get('/riwayatAdmin', [UserPeminjamanController::class, 'indexAdmin'])->name('riwayatAdmin');
    Route::get('/lensaAdmin', [PeminjamanController::class, 'indexAdminLensa']);
    Route::get('/kameraAdmin', [PeminjamanController::class, 'indexAdminKamera']);
    // Route::get('/pinjamLensa', [SewaController::class, 'indexLensaAdmin'])->name('pinjamLensa');
});


Route::middleware(['cekRole:0'])->group(function () {
    Route::get('/laporan/anggota', [anggotaController::class, 'cetak_pdf']);
    Route::resource('sewa', SewaController::class);
    Route::get('/laporan/sewa', [SewaController::class, 'cetak_pdf']);
    Route::get('/laporan/sewaLensa', [SewaController::class, 'cetak_pdfLensa']);
    Route::get('/riwayat-pinjam', [PeminjamanController::class, 'index_riwayat'])->name('riwayat');
    Route::resource('pinjam', UserPeminjamanController::class);
    Route::get('/sewaLensa', [UserPeminjamanController::class, 'indexLensa'])->name('riwayatLensa');
    Route::get('/pinjamLensa', [SewaController::class, 'indexLensa'])->name('pinjamLensa');
});

// Route::resource('pinjam', UserPeminjamanController::class);
// Route::get('/sewaLensa', [UserPeminjamanController::class, 'indexLensa'])->name('riwayatLensa');
