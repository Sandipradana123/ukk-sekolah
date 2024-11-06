<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\UlasanBuku;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UlasanController extends Controller
{
    public function ulasan(Request $request){
        UlasanBuku::insert([
            'user_id' => $request->userId,
            'buku_id' => $request->bukuId,
            'ulasan' => $request->ulasan,
            'rating' => $request->rating
        ]);

        return redirect()->back();
    }   

    public function ulasanAll(){
        $ulasan = UlasanBuku::with('buku','siswa')->get();
        return view('dashboard-admin.ulasan.daftarUlasan',[
            'title' => 'ulasan all',
            'ulasan' => $ulasan
        ]);

    }
}
