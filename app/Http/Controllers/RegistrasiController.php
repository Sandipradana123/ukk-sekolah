<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class RegistrasiController extends Controller
{
    public function registasi(){
        return view('dashboard-member.registrasi.registrasi');
    }

    public function registasiRequest(Request $request){
        $cekNisn = Member::where('nisn',$request->nisn)->exists();
        if ($cekNisn) {
            return redirect()->route('siswa.login');
        }

        else {
            Member::insert([
                'nisn' => $request->nisn,
                'kode_member' => $request->kodeMember,
                'nama' => $request->nama,
                'password' => $request->password,
                'jenis kelamin' => $request->jenisKelamin,
                'kelas' => $request->kelas,
                'jurusan' => $request->jurusan,
                'tgl_pendaftaran' => $request->tanggalPendaftaran
            ]);
    
            return redirect()->route('siswa.login');
        }
       
    }
}
