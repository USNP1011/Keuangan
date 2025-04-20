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
        Schema::create('aset', function (Blueprint $table) {
            $table->unsignedBigInteger('id_aset')->autoIncrement()->primary();
            $table->string('nama_aset');
            $table->enum('kategori_aset', ['Elektronik', 'Kendaraan', 'Bangunan', 'Lainnya']);
            $table->date('tanggal_perolehan');
            $table->enum('status_aset', ['Aktif', 'Non-Aktif']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aset');
    }
};
