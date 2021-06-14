<?php

use App\Http\Controllers\BukuController;
use App\Http\Controllers\KameraController;
use App\Http\Controllers\MerekController;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\PinjamController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\SewaController;
use App\Models\Peminjaman;
use App\Http\Controllers\UserController;
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

Route::get('/dashboard', function () {
    return view('layouts.index');
})->name('dashboard');

Route::get('/masuk', function () {
    return view('login');
})->name('masuk');

Route::resource('anggota', anggotaController::class);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Route Admin
Route::middleware(['cekRole:1'])->group(function () {
    Route::resource('kamera', KameraController::class);
    Route::get('/laporan/barang', [KameraController::class, 'cetak_pdf']);
    Route::resource('peminjaman', PeminjamanController::class);
    Route::resource('merek', MerekController::class);
    Route::resource('/user', UserController::class);
});

Route::middleware(['cekRole:0'])->group(function () {
    Route::get('/laporan/anggota', [anggotaController::class, 'cetak_pdf']);
    Route::get('/laporan/user', [UserController::class, 'cetak_pdf']);
    Route::resource('sewa', SewaController::class);
    Route::get('/laporan/sewa', [SewaController::class, 'cetak_pdf']);
    Route::get('/riwayat-pinjam', [PeminjamanController::class, 'index_riwayat'])->name('riwayat');
    Route::resource('pinjam', PinjamController::class);
});
