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
        Schema::create('pinjamtayo', function (Blueprint $table) {
            $table->id();
            $table->string('ID_Peminjam');
            $table->string('Nama');
            $table->integer('NIP_NIM');
            $table->string('No_Hp');
            $table->string('Email');
            $table->string('Tujuan');
            $table->string('Lokasi_Penjemputan');
            $table->date('Tanggal_Peminjaman');
            $table->time('Waktu_Peminjaman');
            $table->date('Tanggal_Pengembalian');
            $table->time('Waktu_Pengembalian');
            $table->string('Bukti_Peminjaman');
            $table->timestamps();
            $table->integer('Status');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pinjamtayo');
    }
};
