<?php

namespace App\Http\Controllers;

use App\Models\Petugas;
use Illuminate\Http\Request;

class LoginPetugasController extends Controller
{
    public function login(Request $request){
            $petugas = Petugas::all();
        if ($petugas && $request->password === $petugas->password) {
            $nama = $request->nama;
            $nisn = $request->nisn;
             // Simpan data user ke session
             session(['member' => $petugas,'member.nisn' => $nisn,'member.nama' => $nama]);
             return redirect()->route('dashboard-petugas'); // Arahkan ke dashboard
        }
    }
}
