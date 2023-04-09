<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('transaksi', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pelanggan_id');
            $table
                ->foreign('pelanggan_id')
                ->references('id')
                ->on('pelanggan')
                ->onDelete('cascade');
            $table->unsignedBigInteger('kendaraan_id');
            $table
                ->foreign('kendaraan_id')
                ->references('id')
                ->on('kendaraan')
                ->onDelete('cascade');
            $table->date('tanggal_transaksi');
            $table->decimal('total_harga', 10, 2);
            $table->enum('status', ['Belum Selesai', 'Sedang Dikerjakan', 'Selesai']);
            $table->timestamps();
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
