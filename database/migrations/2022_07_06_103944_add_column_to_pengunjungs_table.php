<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pengunjungs', function (Blueprint $table) {
            $table->unsignedBigInteger('id_pendidikan');
            $table->foreign('id_pendidikan')->references('id')->on('pendidikans');
            $table->unsignedBigInteger('id_mediapelayanan');
            $table->foreign('id_mediapelayanan')->references('id')->on('media_pelayanans');
            $table->unsignedBigInteger('id_jenispelayanan');
            $table->foreign('id_jenispelayanan')->references('id')->on('jenis_layanans');
            $table->unsignedBigInteger('id_sospen');
            $table->foreign('id_sospen')->references('id')->on('sosial_kependudukans');
            $table->unsignedBigInteger('id_ekopangan');
            $table->foreign('id_ekopangan')->references('id')->on('ekonomi_perdagangans');
            $table->unsignedBigInteger('id_pertama');
            $table->foreign('id_pertama')->references('id')->on('pertanian_pertambangans');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pengunjungs', function (Blueprint $table) {
            //
        });
    }
};
