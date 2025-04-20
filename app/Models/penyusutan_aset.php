<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class penyusutan_aset extends Model
{
    protected $fillable = ['id_penyusutan', 'id_aset', 'tanggal_penyusutan', 'nilai_penyusutan', 'keterangan'];

    use HasFactory;
}
