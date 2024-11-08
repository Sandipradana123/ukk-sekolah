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
        Schema::create('pengembalian', function (Blueprint $table) {
            $table->id('id_pengembalian');
            $table->integer('id_peminjam');
            $table->unsignedBigInteger('buku_id');
            $table->unsignedBigInteger('nisn');
            $table->unsignedBigInteger('id_admin');
            $table->date('buku_kembali');
            $table->enum('keterlambatan',['ya','tidak']);
            $table->integer('denda');
            $table->timestamps();

            // tabel relasi
            $table->foreign('buku_id')->references('buku_id')->on('buku')->onDelete('cascade');
            $table->foreign('nisn')->references('nisn')->on('member')->onDelete('cascade');
            $table->foreign('id_admin')->references('id')->on('admin')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengembalians');
    }
};
