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
<<<<<<< HEAD
             session(['member' => $user,'member.nisn' => $nisn,'member.nama' => $nama]);

    

             return redirect()->route('dashboard-siswa'); // Arahkan ke dashboard
        }
=======
             session([
                'member' => [
                    'nisn' => $nisn,
                    'nama' => $nama
                ]
            ]);
             return redirect()->route('dashboard-siswa'); // Arahkan ke dashboard
        }
        else {
            return redirect()->route('siswa.login')->with('errors', 'Login gagal ');

        }
>>>>>>> main
    }
}
