<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JurnalUmum extends Model
{
    protected $fillable = ['id_jurnal', 'tanggal_transaksi', 'keterangan', 'id_akun', 'nominal', 'referensi'];

    use HasFactory;
}
