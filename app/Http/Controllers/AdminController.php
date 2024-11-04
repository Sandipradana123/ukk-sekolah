<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\KoleksiPribadi;
use App\Models\Peminjaman;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AdminController extends Controller
{
    
    // public function registasi(){
    //     $user = ::all();
    //     return view('admin.registasi',[
    //         'title' => 'registasi',
    //         'user' => $user
    //     ]);
    // }
    public function pendataanBarang(){
        $dataBarang = Buku::all();
        return view('admin.pendataan-barang',[
            'title' => 'pendataan barang',
            'dataBarang' => $dataBarang
        ]);
    }

    public function peminjaman(){
        $peminjaman = Peminjaman::with('user','buku')->get();
        return view('admin.peminjaman',[
            'title' => 'peminjaman',
            'peminjaman' => $peminjaman
        ]);
    }

    // public function koleksiPribadi(){
    //     $koleksi = KoleksiPribadi::all()->pluck('nama_field_yang_ingin_ditampilkan');
    //     dd($koleksi);
    //     return view('admin.koleksi-pribadi',[
    //         'title' => 'koleksi pribadi',
    //         'koleksi' => $koleksi
    //     ]);
    // }
}
