<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJanjiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('janji')) {
            Schema::create('janji', function (Blueprint $table) {
                $table->id();
                $table->dateTime('jadwal')->default(DB::raw('CURRENT_TIMESTAMP'));
                $table->unsignedBigInteger('dokter_id');
                $table->unsignedBigInteger('pasien_id');
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('janji');
    }
}
