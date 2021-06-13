<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVillagerEducationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('villager_educations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('villager_id');
            $table->integer('tidak_sekolah');
            $table->integer('sd');
            $table->integer('smp');
            $table->integer('sma');
            $table->integer('d1d2');
            $table->integer('d3');
            $table->integer('s1');
            $table->integer('lebih_tinggi');
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
        Schema::dropIfExists('villager_educations');
    }
}
