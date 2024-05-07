<?php

<<<<<<< HEAD
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\ObatController;
use App\Http\Controllers\RajalController;
use App\Http\Controllers\RegisterduaController;
use App\Http\Controllers\RegistersatuController;
use Illuminate\Support\Facades\Route;
=======
use App\Http\Controllers\Form_Add_DataController;
use App\Http\Controllers\RanapController;
use App\Http\Controllers\RegistersatuController;
use Illuminate\Support\Facades\Route;

>>>>>>> de8d44450c44b3d6f3443efff3302175614ac9de

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


<<<<<<< HEAD
=======
<<<<<<< HEAD
Route::get('/register1', [RegistersatuController::class, 'regis1']);
Route::get('/register2', [RegistersatuController::class, 'regis2']);
Route::get('/register3', [RegistersatuController::class, 'regis3']);
=======
Route::get('/register1', [RegisterController::class, 'regis1']);
Route::get('/register', [RegisterController::class, 'index']);
Route::get('/registertiga', [RegistertigaController::class, 'index']);
>>>>>>> c197f62a6c2b85bacf371c0fa5f8a9a4e04ece55
Route::get('/ranap',[RanapController::class, 'index']);
Route::get('/form_add', [Form_Add_DataController::class, 'index']);
>>>>>>> de8d44450c44b3d6f3443efff3302175614ac9de
