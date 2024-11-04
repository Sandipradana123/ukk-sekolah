<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;
    protected $guarded = ['buku_id'];
    protected $table = 'buku';

      // Tentukan primary key jika bukan 'id'
      protected $primaryKey = 'buku_id';

    public function kategoriBuku(){
        return $this->belongsTo(KategoriBuku::class,'kategori_id','kategori_id');
    }

 
}
