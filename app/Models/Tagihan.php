<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Tagihan extends Model
{
    protected $fillable = ['id_tagihan', 'id_mahasiswa', 'nominal', 'tanggal_jatuh_tempo', 'status_tagihan', 'keterangan', 'id_tahun_akademik', 'id_jenis_tagihan', 'status_jurnal'];

    public function mahasiswa(): HasOne{
        return $this->hasOne(Mahasiswa::class, 'id_mahasiswa', 'id_mahasiswa');
    }

    function jenisTagihan() : HasOne {
        return $this->hasOne(JenisTagihan::class, 'id_jenis_tagihan','id_jenis_tagihan');
    }

    use HasFactory;
}
