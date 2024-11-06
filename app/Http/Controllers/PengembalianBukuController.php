<?php

namespace App\Http\Controllers;

use App\Models\Peminjaman;
use App\Models\Pengembalian;
use Illuminate\Http\Request;

class PengembalianBukuController extends Controller
{
    public function pengembalianBuku(){
        $dataPeminjam = Pengembalian::with('buku')->get();
        return view('dashboard-admin.pengembalian.pengembalianBuku',[
            'title' => 'pengembalian buku',
            'dataPeminjam' => $dataPeminjam
        ]);
    }

    public function pengembalianBukuForm($id_pengembalian){
        $query = Peminjaman::with('buku','nisnSiswa')->where('id',$id_pengembalian)->get();
        return view('dashboard-member.form-peminjaman.pengembalianBuku',[
            'title' => 'pengembalian buku',
            'query' => $query
        ]);
    }

    public function pengembalianBukuRequest($id_pengembalian){
        $post = Peminjaman::findOrFail($id_pengembalian); // Cari data berdasarkan ID
        
        // Simpan data yang akan ditambahkan ke tabel lain menggunakan objek $post
        $idPeminjaman = $post->id;
        $idBuku = $post->buku_id;
        $nisn = $post->nisn;
        $tenggatPengembalian = $post->tgl_pengembalian;
        $bukuKembali = $post->buku_kembali ?? date('Y-m-d'); // Default ke tanggal s
    
        $dataPinjam = [
            'id_peminjam' => $idPeminjaman,
            'buku_id' => $idBuku,
            'nisn' => $nisn,
            'buku_kembali' => $bukuKembali,
            'tanggal_pengembalian' => $tenggatPengembalian
            // tambahkan data lain sesuai kebutuhan
        ];
        
        $post->delete(); // Hapus data dari tabel Peminjaman
    
        Pengembalian::create($dataPinjam); // Tambahkan data ke tabel Pengembalian

        return redirect()->route('dashboard-siswa');
    }
    
}
