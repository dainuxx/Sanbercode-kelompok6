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
        Schema::create('janji', function (Blueprint $table) {
            $table->id();
            $table->string('jadwal', 255); // Batas panjang kolom 'jadwal' ditambahkan
            $table->unsignedBigInteger("dokter_id");
            $table->unsignedBigInteger("pasien_id");
            $table->timestamps();

            // Penetapan kunci asing setelah kolom 'dokter_id' dan 'pasien_id'
            $table->foreign('dokter_id')->references('id')->on('dokter')->onDelete('cascade');
            $table->foreign('pasien_id')->references('id')->on('pasien')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('janji');
    }
};
