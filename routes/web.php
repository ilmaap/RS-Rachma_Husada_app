<?php

use App\Http\Controllers\BerandaController;
use App\Http\Controllers\ObatController;
use App\Http\Controllers\RajalController;
use App\Http\Controllers\RegisterduaController;
use App\Http\Controllers\RegistersatuController;
use App\Http\Controllers\Form_Add_DataController;
use App\Http\Controllers\RanapController;
use App\Http\Controllers\RekamMedisController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/register1', [RegistersatuController::class, 'regis1']);
Route::get('/register2', [RegistersatuController::class, 'regis2']);
Route::get('/kembali', [RegistersatuController::class, 'kembali']);
Route::get('/beranda', [BerandaController::class, 'berandaadmin']);

Route::get('/pasien_rajal', [RajalController::class, 'rajal'])->name('pasien_rajal.rajal');
Route::get('/create-rajal', [RajalController::class, 'create']);
Route::post('/simpan-pasien_rajal', [RajalController::class, 'store'])->name('pasien_rajal.simpan');
Route::put('/pasien_rajal/{NIK}', [RajalController::class, 'update'])->name('pasien_rajal.update');
Route::delete('/pasien_rajal/{NIK}', [RajalController::class, 'destroy'])->name('pasien_rajal.hapus');
Route::get('/cetak-rajal', [RajalController::class, 'cetakRajal']);


Route::get('/register1', [RegistersatuController::class, 'regis1']);
Route::get('/register2', [RegistersatuController::class, 'regis2']);
Route::get('/register3', [RegistersatuController::class, 'regis3']);

Route::get('/ranap',[RanapController::class, 'index']);
Route::get('/form_add', [Form_Add_DataController::class, 'index']);

Route::get('/rekam_medis', [RekamMedisController::class, 'medis'])->name('rekam_medis.medis');
Route::get('/create-medis', [RekamMedisController::class, 'create']);
Route::post('/simpan-rekam_medis', [RekamMedisController::class, 'store'])->name('rekam_medis.simpan');
Route::put('/rekam_medis/{NIK}', [RekamMedisController::class, 'update'])->name('rekam_medis.update');
Route::delete('/rekam_medis/{NIK}', [RekamMedisController::class, 'destroy'])->name('rekam_medis.hapus');
Route::get('/cetak-medis', [RekamMedisController::class, 'cetakMedis']);
