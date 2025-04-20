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
        Schema::create('tagihan', function (Blueprint $table) {
            $table->unsignedBigInteger('id_tagihan')->autoIncrement()->primary();
            $table->decimal('nominal');
            $table->date('tanggal_jatuh_tempo');
            $table->enum('status_tagihan', ['Lunas', 'Belum Lunas']);
            $table->text('keterangan');
            $table->enum('status_jurnal', ['0', '1']);
            $table->foreignUuid('id_mahasiswa')->references('id_mahasiswa')->on('mahasiswa');
            $table->foreignId('id_tahun_akademik')->references('id_tahun_akademik')->on('tahun_akademik');
            $table->foreignId('id_jenis_tagihan')->references('id_jenis_tagihan')->on('jenis_tagihan');
            $table->timestamps();
            $table->softDeletes('deleted_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tagihan');
    }
};
