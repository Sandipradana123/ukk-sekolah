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
    }   
}
