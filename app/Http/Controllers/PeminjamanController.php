<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Member;
use App\Models\Peminjaman;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PeminjamanController extends Controller
{
    public function pinjamBuku($id){
        $pinjamBuku = Buku::with('kategoriBuku')->where('buku_id',$id)->get();
        $nisn = session(['member.nisn']);
        $dataSiswa = Member::where('nisn',$id)->get();
        
        return view('dashboard-member.form-peminjaman.pinjamBuku',[
            'title' => 'form peminjaman',
            'query' => $pinjamBuku,
            'dataSiswa' => $dataSiswa,
            'nisn' => $nisn
        ]);
    }

    public function tambahPinjamBuku(Request $request){
        Peminjaman::insert([
            'buku_id' => $request->buku_id,
            'nisn' => $request->nisn,
            'tanggal_peminjaman' => $request->tgl_peminjaman,
<<<<<<< HEAD
            'tanggal_pengembalian' => $request->tgl_pengembalian
        ]);
=======
            'tanggal_pengembalian' => $request->tgl_pengembalian,
            'status_peminjaman' => 'dipinjam'
        ]);

        return redirect()->route('dashboard-siswa');
>>>>>>> main
    }
}
