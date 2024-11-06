<?php

namespace App\Http\Controllers;

use App\Models\Pengembalian;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TransaksiPengembalianController extends Controller
{
    public function pengembalian(){
        $pengembalian = Pengembalian::with('buku','nisnSiswa')->get();
        return view('dashboard-member.form-peminjaman.transaksiPengembalian',[
            'title' => 'transaksi pengembalian',
            'dataPengembalian' => $pengembalian
        ]);
    }
}
