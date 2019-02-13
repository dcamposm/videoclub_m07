<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('movies', function (Blueprint $table) {
            $table->integer('country')->unsigned();
            $table->integer('director')->unsigned()->change();
            $table->integer('time')->unsigned();

            $table->foreign('country')->references('id')->on('countries');
            $table->foreign('director')->references('id')->on('directors');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('movies', function (Blueprint $table) {
            $table->dropColumn('country');
            $table->string('director', 64)->change();
            $table->dropColumn('time');
        });
    }
}
