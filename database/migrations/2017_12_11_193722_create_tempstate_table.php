<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTempstateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tempstate', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
           
            $table->string('game_id');

            //JSON strings
            $table->string('host_hand');
            $table->string('client_hand');
            $table->string('deck');

            //Points
            $table->integer('host_points')->default(0);
            $table->integer('client_points')->default(0);

            $table->integer('turn_state')->default(0);

            //keys
            $table->foreign('game_id')->references('id')->on('game');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tempstate');
    }
}
