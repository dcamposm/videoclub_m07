<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMovieActorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movie_actor', function (Blueprint $table) {
            $table->integer('id_movie')->unsigned();
            $table->integer('id_actor')->unsigned();
            $table->string('character');
            $table->timestamps();

            $table->foreign('id_movie')->references('id')->on('movies');
            $table->foreign('id_actors')->references('id')->on('actors');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movie_actor');
    }
}
