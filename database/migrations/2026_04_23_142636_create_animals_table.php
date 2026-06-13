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
        Schema::create('animals', function (Blueprint $table) {
            $table->id();
            $table->string('nama'); // Nama Hewan
            $table->string('habitat'); // Isinya: darat, laut, atau udara
            $table->string('gambar'); // Nama file gambar (contoh: harimau.jpg)
            $table->string('asal');
            $table->string('populasi');
            $table->text('deskripsi');
            $table->string('video_url'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('animals');
    }
};