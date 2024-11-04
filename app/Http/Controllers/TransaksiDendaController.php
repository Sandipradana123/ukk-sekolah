<?php

namespace App\Http\Controllers;

use App\Models\Peminjaman;
use Illuminate\Http\Request;

class TransaksiDendaController extends Controller
{
    public function denda(){
        $transaksiDenda = Peminjaman::where('denda');
        return view('dashboard-member.form-peminjaman.transaksiDenda',[
            'title' => 'transaksi denda',
            'dataDenda' => $transaksiDenda
        ]);
    }
}
