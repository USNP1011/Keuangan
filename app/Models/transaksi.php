<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    protected $fillable = ['id_transaksi', 'jenis_transaksi', 'id_referensi', 'id_jurnal'];

    use HasFactory;
}
