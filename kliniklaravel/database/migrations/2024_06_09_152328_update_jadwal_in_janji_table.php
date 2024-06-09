<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateJadwalInJanjiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('janji', function (Blueprint $table) {
            $table->dateTime('jadwal')->nullable()->change();  // Ubah kolom jadwal menjadi nullable
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('janji', function (Blueprint $table) {
            $table->dateTime('jadwal')->nullable(false)->change();  // Kembalikan perubahan jika rollback
        });
    }
}
Schema::getColumnListing('janji');