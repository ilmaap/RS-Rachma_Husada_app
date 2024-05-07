<?php

use App\Http\Controllers\Form_Add_DataController;
use App\Http\Controllers\RanapController;
use App\Http\Controllers\RegistersatuController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');    
});



Route::get('/register1', [RegistersatuController::class, 'regis1']);
Route::get('/register2', [RegistersatuController::class, 'regis2']);
Route::get('/register3', [RegistersatuController::class, 'regis3']);

Route::get('/ranap',[RanapController::class, 'index']);
Route::get('/form_add', [Form_Add_DataController::class, 'index']);