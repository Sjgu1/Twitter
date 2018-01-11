<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeguidoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seguidos_seguidores', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_seguidor')->unsigned();
            $table->integer('id_seguido')->unsigned();
            $table->foreign('id_seguidor')->references('id')->on('users');
            $table->foreign('id_seguido')->references('id')->on('users');
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
        Schema::dropIfExists('seguidos_seguidores');
    }
}
