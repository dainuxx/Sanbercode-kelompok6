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
            $table->string('jadwal');
            $table->unsignedBigInteger("dokter_id");
            $table->foreign('dokter_id')->references('id')->on('dokter')->onDelete('cascade');
            $table->unsignedBigInteger("pasien_id");
            $table->foreign('pasien_id')->references('id')->on('pasien')->onDelete('cascade');
            $table->timestamps();
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