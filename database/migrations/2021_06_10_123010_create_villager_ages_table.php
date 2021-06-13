<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVillagerAgesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('villager_ages', function (Blueprint $table) {
            $table->id();
            $table->foreignId('villager_id');
            $table->integer('u4');
            $table->integer('u9');
            $table->integer('u14');
            $table->integer('u19');
            $table->integer('u24');
            $table->integer('u29');
            $table->integer('u34');
            $table->integer('u39');
            $table->integer('u44');
            $table->integer('u49');
            $table->integer('u54');
            $table->integer('u59');
            $table->integer('u64');
            $table->integer('u69');
            $table->integer('u74');
            $table->integer('o75');
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
        Schema::dropIfExists('villager_ages');
    }
}
