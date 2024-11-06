<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class EditBukuController extends Controller
{
    public function editBuku(Request $request,$id){

        // Cari data berdasarkan ID
        $data = Buku::findOrFail($id);

        // Update data
        $data->kategori_id = $request->input('kategori');
        $data->judul = $request->input('judul');
        $data->penulis = $request->input('penulis');
        $data->penerbit = $request->input('penerbit');
        $data->tahun_terbit = $request->input('tahun_terbit');
        $data->save();

        return redirect()->route('dashboard-daftarBuku');

    }
<<<<<<< HEAD
=======
    public function editBukuPetugas(Request $request,$id){

        // Cari data berdasarkan ID
        $data = Buku::findOrFail($id);

        // Update data
        $data->kategori_id = $request->input('kategori');
        $data->judul = $request->input('judul');
        $data->penulis = $request->input('penulis');
        $data->penerbit = $request->input('penerbit');
        $data->tahun_terbit = $request->input('tahun_terbit');
        $data->save();

        return redirect()->route('dashboard-petugas');

    }
>>>>>>> main
}
