<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function berandaadmin()
    {
        return view('berandaadmin.beranda');
    }
}
