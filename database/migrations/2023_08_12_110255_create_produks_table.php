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
        Schema::create('tb_kategori', function (Blueprint $table) {
            $table->id();
            $table->string('namakategori');
            $table->timestamps();
        });

        Schema::create('produks', function (Blueprint $table) {
            $table->id();
            // $table->unsignedBigInteger('kategori_id');
            // $table->foreign('kategori_id')->references('id')->on('tb_kategori');
            $table->string('namaproduk');
            $table->integer('harga');
            $table->integer('stok');
            $table->text('keterangan');
            $table->text('foto')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produks');
    }
};
