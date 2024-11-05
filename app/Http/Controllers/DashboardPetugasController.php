<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\KategoriBuku;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardPetugasController extends Controller
{
    public function dashboard(){
        return view('dashboard-petugas.dashboard',[
            'title' => 'dashboard petugas'
        ]);
    }
    
    public function daftarBuku(){
        $buku = Buku::with('kategoriBuku')->get();
        return view('dashboard-petugas.buku.daftarBuku',[
            'title' => 'petugas daftar buku',
            'buku' => $buku
        ]);
    }

    public function tambahBuku(){
        $kategori = KategoriBuku::all();
        return view('dashboard-petugas.buku.tambahBuku',[
            'title' => 'petugas tambah buku',
            'kategori' => $kategori
        ]);
    }

    public function tambahBukuRequest(Request $request){
        Buku::insert([
            'kategori_id' => $request->input('kategori'), // Ini akan mengambil value dari <select> yang dipilih
            'judul' => $request->judul,
            'penulis' => $request->penulis,
            'penerbit' => $request->penerbit,
            'tahun_terbit' => $request->tahun_terbit
        ]);
        return redirect()->route('dashboard-daftarBuku');
    }

    public function formEditBuku($buku_id){
        $kategori= KategoriBuku::all();
        $reviewData = Buku::with('kategoriBuku')->where('buku_id',$buku_id)->first();
        return view('dashboard-petugas.buku.updateBuku',[
            'title' => 'petugas form edit buku',
            'reviewData' => $reviewData,
            'kategori' => $kategori
        ]);
    }
}
