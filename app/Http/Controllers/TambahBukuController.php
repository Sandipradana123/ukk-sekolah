<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\KategoriBuku;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Providers\FoundationServiceProvider;

class TambahBukuController extends Controller
{
    public function tambahBuku(){
        $kategori = KategoriBuku::all();
        return view('dashboard-admin.buku.tambahBuku',[
            'title' => 'form tambah buku',
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
}
