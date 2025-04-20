<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diskon extends Model
{
    protected $fillable = ['id_diskon', 'id_mahasiswa', 'jenis_diskon', 'nominal_diskon', 'keterangan', 'status'];

    use HasFactory;
}
