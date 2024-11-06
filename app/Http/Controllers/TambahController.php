<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class TambahController extends Controller
{
    public function tambahDataBarang(Request $request){
       Buku::insert([
            'judul' => $request->judul,
            'penulis' => $request->penulis,
            'penerbit' => $request->penerbit,
            'tahun_terbit' => $request->tahunTerbit
       ]);
       return redirect()->back();
    }
}
