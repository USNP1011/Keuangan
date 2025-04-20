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
        Schema::create('jurnal_umum', function (Blueprint $table) {
            $table->unsignedBigInteger('id_jurnal')->autoIncrement()->primary();
            $table->decimal('nominal');
            $table->string('referensi');
            $table->text('keterangan');
            $table->foreignId('id_akun')->references('id_akun')->on('akun');
            $table->timestamps();
            $table->softDeletes('deleted_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jurnal_umum');
    }
};
