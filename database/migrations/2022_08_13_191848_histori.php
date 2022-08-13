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
        Schema::create('histori', function (Blueprint $table) {
            $table->id('histori_id');
            $table->string('histori_jadwal');
            $table->string('histori_team');
            $table->string('histori_pekan');
            $table->string('histori_pertandingan');
            $table->string('histori_musim');
            $table->integer('histori_status')->default('0');
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
        //
    }
};
