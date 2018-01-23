<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTweetCategoriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tweet_categorias', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_tweet')->unsigned();
            $table->integer('id_categoria')->unsigned();
            $table->foreign('id_tweet')->references('id')->on('tweets')->onDelete('cascade');
            $table->foreign('id_categoria')->references('id')->on('categoria')->onDelete('cascade');
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
        Schema::dropIfExists('tweet_categorias');
    }
}
