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
        Schema::create('pengunjungs', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('tlp');
            $table->string('email');
            $table->string('alamat');
            $table->unsignedBigInteger('id_pekerjaan');
            $table->foreign('id_pekerjaan')->references('id')->on('pekerjaans');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pengunjungs');
    }
};
