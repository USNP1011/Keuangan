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
        Schema::create('transaksi', function (Blueprint $table) {
            $table->unsignedBigInteger('id_transaksi')->autoIncrement()->primary();
            $table->enum('jenis_transaksi', ['Pembayaran', 'Pengeluaran', 'Penjualan Aset', 'Penyusutan', 'Piutang']);
            $table->integer('id_referensi');
            $table->foreignId('id_jurnal')->references('id_jurnal')->on('jurnal_umum');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksi');
    }
};
