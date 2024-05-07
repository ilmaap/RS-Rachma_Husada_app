<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistersatuController extends Controller
{
    public function regis1()
    {
        return view('registersatu');
    }

    public function regis2()
    {
        return view('registerdua');
    }

    public function regis3()
    {
        return view('registertiga');
    }

    public function kembali()
    {
        return view('kembali');
    }
}
