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
        Schema::create('pengeluaran', function (Blueprint $table) {
            $table->unsignedBigInteger('id_pengeluaran')->autoIncrement()->primary();
            $table->enum('jenis_pengeluaran', ['Operasional', 'Pembelian Aset', 'Lainnya']);
            $table->decimal('nominal');
            $table->date('tanggal_pengeluaran');
            $table->text('keterangan');
            $table->timestamps();
            $table->softDeletes('deleted_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengeluaran');
    }
};
