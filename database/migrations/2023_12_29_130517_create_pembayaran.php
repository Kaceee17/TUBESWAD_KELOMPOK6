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
        Schema::create('pembayaran', function (Blueprint $table) {
            $table->id();
            $table->date('Tanggal_Bayar');
            $table->string('Total');
            $table->string('Jumlah_Bayar');
            $table->string('Sisa_Bayar');
            $table->string('Keterangan');
            $table->string('Bukti_Pembayaran');
            $table->timestamps();
            $table->integer('Status');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembayaran');
    }
};
