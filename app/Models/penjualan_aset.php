<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class penjualan_aset extends Model
{
    protected $fillable = ['id_penjualan', 'id_aset', 'tanggal_penjualan', 'nilai_penjualan', 'keterangan'];


}
