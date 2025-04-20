<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('akun', function (Blueprint $table) {
            $table->unsignedBigInteger('id_akun')->autoIncrement()->primary();
            $table->string('kode_akun');
            $table->string('nama_akun');
            $table->enum('kategori_akun', ['Aset', 'Kewajiban', 'Ekuitas', 'Pendapatan', 'Beban']);
            $table->decimal('saldo_awal');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('akun');
    }
};
