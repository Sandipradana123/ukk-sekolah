<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;
    protected $primaryKey = 'nisn';
    protected $guarded = ['nisn'];
    protected $table = 'member';

    public function kategoriBuku(){
        return $this->belongsTo(KategoriBuku::class,'kategori_id','kategori_id');
    }
}
