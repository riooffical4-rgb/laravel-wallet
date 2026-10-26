<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id();
            $table->string('keterangan');           // Contoh: "Top Up Saldo", "Beli Makan"
    $table->decimal('nominal', 15, 2);      // Nominal uang
    $table->enum('tipe', ['pemasukan', 'pengeluaran']); // Jenis transaksi
    $table->date('tanggal_transaksi'); 
        
            
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('projeks');
    }
};