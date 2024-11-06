<?php

namespace App\Http\Controllers;

use App\Models\Peminjaman;
use Illuminate\Http\Request;

class PeminjamanBukuController extends Controller
{
    public function peminjamanBuku(){
        $dataPinjam = Peminjaman::all();
        return view('dashboard-admin.peminjaman.peminjamanBuku',[
            'title' => 'peminjaman buku',
            'dataPeminjam' => $dataPinjam
        ]);
    }
}
