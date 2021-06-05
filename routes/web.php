<?php

use App\Http\Controllers\BukuController;
use App\Http\Controllers\KameraController;
use App\Http\Controllers\MerekController;
use App\Http\Controllers\AnggotaController;
<<<<<<< HEAD
use App\Http\Controllers\PeminjamanController;
use App\Models\Peminjaman;
=======
use App\Http\Controllers\UserController;
>>>>>>> 26e6698902f613dbb6074579f118f811bc3a8268
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
Route::get('/laporan/barang', [KameraController::class, 'cetak_pdf']);
Route::get('/dashboard', function () {
    return view('layouts.index');
});
Route::resource('merek', MerekController::class);

Route::resource('anggota', anggotaController::class);

Route::get('/laporan/anggota', [anggotaController::class, 'cetak_pdf']);
Route::resource('peminjaman', PeminjamanController::class);

Route::resource('user', UserController::class);
Route::get('/laporan/user', [UserController::class, 'cetak_pdf']);
