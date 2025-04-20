<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengeluaran extends Model
{
    protected $fillable = ['id_pengeluaran', 'id_aset', 'tanggal_penjualan', 'nilai_penjualan', 'keterangan'];

    use HasFactory;
}
