<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('clients', function (Blueprint $table) {
            $table->string('dni', 9);
            $table->string('name');
            $table->string('lastname');
            $table->date('bday');
            $table->integer('nacionality')->unsigned();
            $table->string('address');

            $table->foreign('nacionality')->references('id')->on('countries');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('clients', function (Blueprint $table) {
            $table->dropColumn('dni');
            $table->dropColumn('name');
            $table->dropColumn('lastname');
            $table->dropColumn('bday');
            $table->dropColumn('nacionality');
            $table->dropColumn('address');
        });
    }
}
