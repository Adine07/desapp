<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVillagerReligionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('villager_religions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('villager_id');
            $table->integer('islam');
            $table->integer('kristen');
            $table->integer('katholik');
            $table->integer('hindu');
            $table->integer('budha');
            $table->integer('konghucu');
            $table->integer('lainnya');
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
        Schema::dropIfExists('villager_religions');
    }
}
