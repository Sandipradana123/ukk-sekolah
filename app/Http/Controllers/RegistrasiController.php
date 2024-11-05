<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrasiController extends Controller
{
    public function registasi(){
        return view('dashboard-member.registrasi.registrasi');
    }
}
