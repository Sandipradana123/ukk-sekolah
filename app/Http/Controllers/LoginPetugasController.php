<?php

namespace App\Http\Controllers;

use App\Models\Petugas;
use Illuminate\Http\Request;

class LoginPetugasController extends Controller
{
    public function login(Request $request){
            $petugas = Petugas::where('nama',$request->nama_petugas)->first();
            
        if ($petugas && $request->password === $petugas->password) {
            $nama = $request->nama_petugas;

             // Simpan data user ke session
             session(['member' => $petugas,'member.nama' => $nama]);
             return redirect()->route('dashboard-petugas'); // Arahkan ke dashboard
        }
        else {
            return redirect()->back();
        }
    }
}
