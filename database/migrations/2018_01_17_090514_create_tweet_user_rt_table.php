<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTweetUserRtTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tweet_user_rt', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_tweet')->unsigned();
            $table->integer('id_user')->unsigned();
            $table->foreign('id_tweet')->references('id')->on('tweets');
            $table->foreign('id_user')->references('id')->on('users');
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
        Schema::dropIfExists('tweet_user_rt');
    }
}
