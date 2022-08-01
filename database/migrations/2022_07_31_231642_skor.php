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
        Schema::create('skor', function (Blueprint $table) {
            $table->id('skor_id');
            $table->string('skor_jadwal');
            $table->string('skor_team');
            $table->string('skor_nilai');
            $table->string('skor_poin');
            $table->string('skor_bobol');
            $table->integer('skor_delete')->default('0');
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
