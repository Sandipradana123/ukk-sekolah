<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogoutController extends Controller
{
    public function logoutSiswa(Request $request){
            // Hapus semua data dari session
    $request->session()->forget('member');

    // Opsional: bisa juga menggunakan flush untuk menghapus semua data session
    // $request->session()->flush();

    // Arahkan ke halaman login atau halaman lain setelah logout
    return redirect()->route('home.login'); // Ganti 'login' dengan nama route login Anda
    }
    public function logoutPetugas(Request $request){
            // Hapus semua data dari session
    $request->session()->forget('petugas');


    // Arahkan ke halaman login atau halaman lain setelah logout
    return redirect()->route('home.login'); // Ganti 'login' dengan nama route login Anda
    }
    public function logoutAdmin(Request $request){
            // Hapus semua data dari session
    $request->session()->forget('admin');


    // Arahkan ke halaman login atau halaman lain setelah logout
    return redirect()->route('home.login'); // Ganti 'login' dengan nama route login Anda
    }
}
