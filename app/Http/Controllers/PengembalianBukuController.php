<?php

namespace App\Http\Controllers;

use App\Models\Peminjaman;
use Illuminate\Http\Request;

class PengembalianBukuController extends Controller
{
    public function pengembalianBuku(){
        $dataPeminjam = Peminjaman::all();
        return view('dashboard-admin.pengembalian.pengembalianBuku',[
            'title' => 'pengembalian buku',
            'dataPeminjam' => $dataPeminjam
        ]);
    }
}
