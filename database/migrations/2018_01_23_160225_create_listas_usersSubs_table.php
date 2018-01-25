<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListasUsersSubsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lista_suscrito', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_lista')->unsigned();
            $table->integer('id_user')->unsigned();
            $table->foreign('id_lista')->references('id')->on('listas');
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
        Schema::dropIfExists('lista_suscrito');
    }
}
