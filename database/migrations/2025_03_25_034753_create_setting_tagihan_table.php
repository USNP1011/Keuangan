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
        Schema::create('setting_tagihan', function (Blueprint $table) {
            $table->unsignedBigInteger('id_setting_tagihan')->autoIncrement();
            $table->decimal('nominal', 2);
            $table->char('angkatan', 4);
            $table->foreignId('id_jenis_tagihan')->references('id_jenis_tagihan')->on('jenis_tagihan');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('setting_tagihan');
    }
};
