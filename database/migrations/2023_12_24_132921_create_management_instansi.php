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
        Schema::create('management_instansi', function (Blueprint $table) {
            $table->id();
            $table->string('nama_instansi');
            $table->string('lokasi');
            $table->string('jumlah_pegawai');
            $table->string('link_web_instansi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('management_instansi');
    }
};
