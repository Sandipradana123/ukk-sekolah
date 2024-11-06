<?php

namespace App\Http\Controllers;

use App\Models\Pengembalian;
use Illuminate\Http\Request;

class DendaController extends Controller
{
    public function denda(){
        $dataDenda = Pengembalian::all();
        return view('dashboard-admin.denda.daftarDenda',[
            'dataDenda' => $dataDenda
        ]);
    }
}
