<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Peminjaman;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardMemberController extends Controller
{

    public function dashboard(){
        return view('dashboard-member.dashboard');
    }
    public function buku(Request $request){
        $buku = Buku::with('kategoriBuku');

        // Filter berdasarkan kategori
        if ($request->has('webDeveloper')) {
            $buku->where('kategori_id', 1);
        } elseif ($request->has('machineLearning')) {
            $buku->where('kategori_id', 2);
        } elseif ($request->has('pemrogamanOop')) {
            $buku->where('kategori_id', 3);
        } 

        // Ambil hasil query
        $buku = $buku->get();

    return view('dashboard-member.buku.daftarBuku',[
        'title' => 'daftar buku',
        'buku' => $buku
    ]);
    }

    public function detailBuku($id){
        $detailBuku = Buku::with('kategoriBuku')->where('buku_id', $id)->firstOrFail();

        return view('dashboard-member.buku.detailBuku',[
            'title' => 'detail buku',
            'detail' => $detailBuku
        ]);
    }
    public function pinjamBuku($id){
        $detailBuku = Buku::with('kategoriBuku')->where('buku_id', $id)->firstOrFail();

        return view('dashboard-member.form-peminjaman.pinjamBuku',[
            'title' => 'detail buku',
            'detail' => $detailBuku
        ]);
    }

    public function peminjamanBuku(){
        // $userId = auth()->user()->id; // Asumsikan menggunakan Auth untuk mengambil ID user yang login
        // $dataPinjam = Peminjaman::with(['buku','nisnSiswa'])->where('id',$userId)->get();
        $dataPinjam = Peminjaman::with(['buku','nisnSiswa'])->get();
        return view('dashboard-member.form-peminjaman.transaksiPeminjaman',[
            'title' => 'transaksi pinjam',
            'dataPinjam' => $dataPinjam
        ]);
    }
}
