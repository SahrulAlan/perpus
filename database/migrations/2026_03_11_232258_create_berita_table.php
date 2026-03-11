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
        Schema::create('berita', function (Blueprint $table) {
            $table->id('berita_id');
            $table->string('judul');
            $table->string('slug')->unique();
            $table->string('penulis');

            $table->unsignedBigInteger('kategori_id')->nullable();
            $table->foreign('kategori_id')->references('kategori_id')->on('kategori')->onDelete('set null');

            $table->longText('konten');
            $table->string('foto')->nullable();
            $table->date('tanggal_terbit')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('berita');
    }
};
