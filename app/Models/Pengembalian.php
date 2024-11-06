<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengembalian extends Model
{
    use HasFactory;

    protected $primayKey = 'id_pengembalian';
    protected $guarded = ['id_pengembalian'];
    protected $table = 'pengembalian';

    
    public function buku(){
        return $this->belongsTo(Buku::class,'buku_id','buku_id');
    }
    public function nisnSiswa(){
        return $this->belongsTo(Member::class,'nisn','nisn');
    }
}
