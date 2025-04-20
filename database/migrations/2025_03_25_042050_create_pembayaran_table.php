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
        Schema::create('pembayaran', function (Blueprint $table) {
            $table->unsignedBigInteger('id_pembayaran')->autoIncrement()->primary();
            $table->date('tanggal_pembayaran');
            $table->decimal('nominal_pembayaran');
            $table->enum('metode_pembayaran', ['Tunai', 'Transfer']);
            $table->enum('status_pembayaran', ['Pelunasan', 'Cicilan']);
            $table->integer('cicilan_ke');
            $table->enum('status_jurnal', ['0', '1']);
            $table->foreignUuid('id_mahasiswa')->references('id_mahasiswa')->on('mahasiswa');
            $table->foreignId('id_tagihan')->references('id_tagihan')->on('tagihan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembayaran');
    }
};
