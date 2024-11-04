<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(){
        return view('welcome',[
            'title' => 'login'
        ]);
    }
    public function adminLogin(){
        return view('login.admin',[
            'title' => 'login admin'
        ]);
    }
    public function siswaLogin(){
        return view('login.siswa',[
            'title' => 'login siswa'
        ]);
    }

}
