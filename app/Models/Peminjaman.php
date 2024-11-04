<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PHPUnit\Framework\MockObject\Stub\ReturnReference;

class Peminjaman extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $table = 'peminjaman';

    // public function user(){
    //     return $this->belongsTo(User::class,'user_id','user_id');
    // }

    public function buku(){
        return $this->belongsTo(Buku::class,'buku_id','buku_id');
    }

    public function nisn(){
        return $this->belongsTo(Member::class,'nisn','nisn');
    }
}
