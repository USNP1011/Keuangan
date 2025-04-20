<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class SettingTagihan extends Model
{
    protected $fillable = ['id_setting_tagihan', 'nominal', 'angkatan', 'id_jenis_tagihan'];

    public function JenisTagihan() : HasOne {
        return $this->hasOne(JenisTagihan::class, 'id_jenis_tagihan','id_jenis_tagihan');
    }

    use HasFactory;
}
