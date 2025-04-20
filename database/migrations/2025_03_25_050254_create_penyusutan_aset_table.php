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
        Schema::create('penyusutan_aset', function (Blueprint $table) {
            $table->unsignedBigInteger('id_penyusutan')->autoIncrement()->primary();
            $table->date('tanggal_penyusutan');
            $table->decimal('nilai_penyusutan');
            $table->text('keterangan');
            $table->foreignId('id_aset')->references('id_aset')->on('aset');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penyusutan_aset');
    }
};
