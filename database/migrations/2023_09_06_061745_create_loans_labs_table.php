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
        Schema::create('loans_labs', function (Blueprint $table) {
            $table->id();
            $table->integer('nip_guru')->unique();
            $table->string('nama_lab');
            $table->string('kelas');
            $table->string('mata_pelajaran');
            $table->date('tanggal');
            $table->string('durasi');
            $table->string('lab');
            $table->string('status_peminjaman');
            $table->text('ulasan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loans_labs');
    }
};
