<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rents', function (Blueprint $table) {
            $table->unsignedInteger('id_movie');
            $table->unsignedInteger('id_user');
            $table->date('date_rent');
            $table->date('date_return_rent');
            $table->unsignedInteger('price');
            $table->timestamps();

            $table->foreign('id_movie')->references('id')->on('movies');
            $table->foreign('id_user')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rents');
    }
}
