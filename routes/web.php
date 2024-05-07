<?php

use App\Http\Controllers\BerandaController;
use App\Http\Controllers\ObatController;
use App\Http\Controllers\RajalController;
use App\Http\Controllers\RegisterduaController;
use App\Http\Controllers\RegistersatuController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register1', [RegistersatuController::class, 'regis1']);
Route::get('/register2', [RegistersatuController::class, 'regis2']);
Route::get('/kembali', [RegistersatuController::class, 'kembali']);
Route::get('/beranda', [BerandaController::class, 'berandaadmin']);
Route::get('/resepobat', [ObatController::class, 'resepobat']);
Route::get('/create-resepobat', [ObatController::class, 'create']);
Route::post('/simpan-resepobat', [ObatController::class, 'store']);
Route::put('/resepobat/{id}', [ObatController::class, 'update'])->name('resepobat.update');
Route::get('/pasien_rajal', [RajalController::class, 'rajal'])->name('pasien_rajal.rajal');
Route::get('/create-rajal', [RajalController::class, 'create']);
Route::post('/simpan-pasien_rajal', [RajalController::class, 'store'])->name('pasien_rajal.simpan');
Route::put('/pasien_rajal/{NIK}', [RajalController::class, 'update'])->name('pasien_rajal.update');
Route::get('/pasien_rajal/{NIK}', [RajalController::class, 'destroy'])->name('pasien_rajal.hapus');


