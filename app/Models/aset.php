<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class aset extends Model
{
    protected $fillable = ['id_aset', 'nama_aset', 'kategori_aset', 'tanggal_perolehan', 'nilai_perolehan', 'status_aset'];

    use HasFactory;
}
