<?php

namespace App\Http\Controllers;

use App\Models\Buku;
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
}
