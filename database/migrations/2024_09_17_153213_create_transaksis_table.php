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
            $table->id('id_transaksi'); // Primary key
            $table->unsignedBigInteger('pembeli_id'); // Foreign key ke tabel pembeli
            $table->unsignedBigInteger('penjual_id'); // Foreign key ke tabel penjual
            $table->integer('jumlah_transaksi'); // Jumlah transaksi sebagai integer
            $table->string('status_transaksi'); // Status transaksi (misal: berhasil, pending, gagal)
            $table->string('metode_pembayaran'); // Metode pembayaran (misal: kartu kredit, e-wallet)
            $table->timestamps(); // Created at & Updated at

            // Set up foreign keys
            $table->foreign('pembeli_id')->references('id_pembeli')->on('pembeli')->onDelete('cascade');
            $table->foreign('penjual_id')->references('id_penjual')->on('penjual')->onDelete('cascade');
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
