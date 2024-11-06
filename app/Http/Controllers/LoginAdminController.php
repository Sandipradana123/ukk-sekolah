<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginAdminController extends Controller
{
    public function login(Request $request){
        $user = Admin::where('nama_admin',$request->nama_admin)->first();

        if ($user && $request->password === $user->password) {
            $nama = $request->nama_admin;
             // Simpan data user ke session
             session(['member.nama' => $nama]);

<<<<<<< HEAD
    

             return redirect()->route('dashboard-admin'); // Arahkan ke dashboard
        }
=======
             return redirect()->route('dashboard-admin'); // Arahkan ke dashboard
        }
        else {
            return redirect()->back(); // Arahkan ke halaman login
        }
>>>>>>> main
    }
}
