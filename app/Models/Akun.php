<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Akun extends Model
{
    protected $fillable = ['id_akun', 'kode_akun', 'nama_akun', 'kategori_akun', 'saldo_awal'];

    public function JurnalUmum() : HasMany {
        return $this->hasMany(JurnalUmum::class, 'id_akun', 'id_akun');
    }

    use HasFactory;
}
