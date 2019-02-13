<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMovieGenresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movie_genre', function (Blueprint $table) {
            $table->unsignedInteger('id_movies');
            $table->unsignedInteger('id_genres');
            $table->timestamps();
            
            $table->primary(['id_movies', 'id_genres']);
            $table->foreign('id_movies')->references('id')->on('movies');
            $table->foreign('id_genres')->references('id')->on('genres');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movie_genre');
    }
}
