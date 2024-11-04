<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class LoginSiswaController extends Controller
{
    public function login(Request $request){
        $user = Member::where('nisn',$request->nisn)->first();

        if ($user && $request->password === $user->password) {
            $nama = $request->nama;
            $nisn = $request->nisn;
             // Simpan data user ke session
             session(['member' => $user,'member.nisn' => $nisn,'member.nama' => $nama]);

    

             return redirect()->route('dashboard-siswa'); // Arahkan ke dashboard
        }
    }
}
