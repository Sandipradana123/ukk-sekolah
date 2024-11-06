<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Member;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HapusController extends Controller
{
    public function hapusMember($nisn){
        $post = Member::findOrFail($nisn); // Cari data berdasarkan ID
    $post->delete(); // Hapus data

    return redirect()->route('dashboard-member');
    }
    public function hapusBuku($buku_id){
        $post = Buku::findOrFail($buku_id); // Cari data berdasarkan ID
    $post->delete(); // Hapus data

    return redirect()->route('dashboard-daftarBuku');
    }
}
