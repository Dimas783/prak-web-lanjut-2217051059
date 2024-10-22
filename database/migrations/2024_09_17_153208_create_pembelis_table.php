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
        Schema::create('pembeli', function (Blueprint $table) {
            $table->unsignedBigInteger('id_pembeli')->primary(); // Menggunakan unsignedBigInteger
            $table->string('nama_pembeli');
            $table->string('email_pembeli')->unique();
            $table->integer('saldo_pembeli')->nullable(); // Saldo sebagai integer, nullable
            $table->timestamps(); // Created at & Updated at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembeli');
    }
};
