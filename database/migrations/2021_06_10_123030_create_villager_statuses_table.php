<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVillagerStatusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('villager_statuses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('villager_id');
            $table->integer('kawin');
            $table->integer('belum_kawin');
            $table->integer('cerai_hidup');
            $table->integer('cerai_mati');
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
        Schema::dropIfExists('villager_statuses');
    }
}
