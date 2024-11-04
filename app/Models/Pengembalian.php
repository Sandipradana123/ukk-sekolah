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
}
