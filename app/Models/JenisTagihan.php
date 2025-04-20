<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisTagihan extends Model
{
    protected $fillable = ['id_jenis_tagihan', 'nama_tagihan', 'jenis'];

    use HasFactory;
}
