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
        Schema::create('peminjam', function (Blueprint $table) {
            $table->string('ID_Peminjam');
            $table->string('Nama');
            $table->integer('NIP_NIM');
            $table->string('No_Hp');
            $table->string('Email');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peminjam');
    }
};
