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
        Schema::create('jenis_tagihan', function (Blueprint $table) {
            $table->unsignedBigInteger('id_jenis_tagihan')->autoIncrement()->primary(true);
            $table->string('nama_tagihan');
            $table->enum('jenis', ['Auto', 'Manual']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jenis_tagihan');
    }
};
