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
        Schema::create('diskon', function (Blueprint $table) {
            $table->unsignedBigInteger('id_diskon')->autoIncrement();
            $table->enum('jenis_diskon', ['Beasiswa', 'Diskon Khusus', 'Lainnya']);
            $table->decimal('nominal_diskon');
            $table->text('keterangan');
            $table->enum('status', ['0', '1']);
            $table->foreignUuid('id_mahasiswa')->references('id_mahasiswa')->on('mahasiswa');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('diskon');
    }
};
