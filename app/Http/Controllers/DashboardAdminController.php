<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\KategoriBuku;
use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class DashboardAdminController extends Controller
{
    public function dashboard(){
        return view('dashboard-admin.dashboard',[
            'title' => 'dashboard admin'
        ]);
    }
    public function member(){
        $member = Member::all();
        return view('dashboard-admin.member.member',[
            'title' => 'dashboard member',
            'member' => $member
        ]);
    }
    public function daftarBuku(){
        $buku = Buku::with('kategoriBuku')->get();
        return view('dashboard-admin.buku.daftarBuku',[
            'title' => 'dashboard member',
            'buku' => $buku
        ]);
    }

    public function formEditBuku($buku_id){
        $kategori= KategoriBuku::all();
        $reviewData = Buku::with('kategoriBuku')->where('buku_id',$buku_id)->first();
        return view('dashboard-admin.buku.updateBuku',[
            'title' => 'form edit buku',
            'reviewData' => $reviewData,
            'kategori' => $kategori
        ]);
    }

    public function adminTambahMember(Request $request){
        Member::insert([
            'nisn' => $request->nisn,
            'kode_member' => $request->kode,
            'nama' => $request->nama,
            'password' => $request->password,
            'jenis kelamin' => $request->jenisKelamin,
            'kelas' => $request->kelas,
            'jurusan' => $request->jurusan,
            'tgl_pendaftaran' => $request->tanggalDaftar,
        ]);

        return redirect()->back();
    }
}
