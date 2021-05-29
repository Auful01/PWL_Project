<?php

use App\Http\Controllers\BukuController;
use App\Http\Controllers\KameraController;
use App\Http\Controllers\MerekController;
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
