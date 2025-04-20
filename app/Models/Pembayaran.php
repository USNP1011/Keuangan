<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    protected $fillable = ['id_pembayaran', 'id_tagihan', 'id_mahasiswa', 'tanggal_pembayaran', 'nominal_pembayaran', 'metode_pembayaran', 'status_pembayaran', 'cicilan_ke', 'jenis_pembayaran', 'status_jurnal'];

    use HasFactory;
}
