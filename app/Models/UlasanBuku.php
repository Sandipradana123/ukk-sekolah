<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UlasanBuku extends Model
{
    use HasFactory;

    protected $guarded = ['ulasan_id'];
    protected $table = 'ulasan_buku';
    public function buku(){
        return $this->belongsTo(Buku::class,'buku_id','buku_id');
    }

    public function siswa(){
        return $this->belongsTo(Member::class,'user_id','nisn');
    }
}
