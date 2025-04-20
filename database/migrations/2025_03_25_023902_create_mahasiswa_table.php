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
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->uuid('id_mahasiswa')->primary();
            $table->char('npm');
            $table->string('nama_mahasiswa');
            $table->char('angkatan', 4);
            $table->enum('kelas', ['A', 'B', 'C', 'D']);
            $table->enum('status_aktif', ['Aktif', 'Non-Aktif']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mahasiswa');
    }
};
