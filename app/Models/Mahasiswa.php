<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Mahasiswa extends Model
{
    protected $fillable  = ['id_mahasiswa', 'nim', 'nama_mahasiswa', 'angaktan', 'status_aktif'];

    public function tagihan():HasMany{
        return $this->hasMany(Tagihan::class);

    }

    public function diskon() : HasOne {
        return $this->hasOne(Diskon::class);
    }

    public function pembayaran():HasMany{
        return $this->hasMany(Pembayaran::class);
    }


    use HasFactory;

}
