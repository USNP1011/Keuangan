<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Tahun_Akademik extends Model
{
    protected $fillable = ['id_tahun_akademik', 'tahun_akademik', 'semester'];

    public function tagihan():HasMany{
        return $this->hasMany(Tagihan::class);
    }
    use HasFactory;
}
