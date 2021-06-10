<?php

use App\Http\Controllers\BukuController;
use App\Http\Controllers\KameraController;
use App\Http\Controllers\MerekController;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\PeminjamanController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('kamera', KameraController::class);
Route::get('merek-kamera', [KameraController::class, 'merek_kamera']);
Route::get('/laporan/barang', [KameraController::class, 'cetak_pdf']);
Route::get('/dashboard', function () {
    return view('layouts.index');
});
Route::resource('merek', MerekController::class);

Route::resource('anggota', anggotaController::class);

Route::get('/laporan/anggota', [anggotaController::class, 'cetak_pdf']);
Route::resource('peminjaman', PeminjamanController::class);

Route::resource('/user', UserController::class);
Route::get('/laporan/user', [UserController::class, 'cetak_pdf']);
Route::prefix('users')->group(function () {
    Route::get('/sewa', [UserController::class, 'sewa'])->name('sewa');
});
Route::get('jajal', function () {
    return view('jajal');
});
Route::resource('sewa', SewaController::class);
Route::get('/laporan/sewa', [SewaController::class, 'cetak_pdf']);
