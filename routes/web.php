<?php

use App\Http\Controllers\RanapController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\RegistertigaController;

Route::get('/', function () {
    return view('register');    
});


Route::get('/register', [RegisterController::class, 'index']);
Route::get('/registertiga', [RegistertigaController::class, 'index']);
Route::get('/ranap',[RanapController::class, 'index']);