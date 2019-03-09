<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Movie_Actor;

class MovieActorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('movie_actor')->delete();

        Movie_Actor:: create(array(
            'id_movie' => 1,
            'id_actor' => 1,
            'character' => 'Michael Corleone',
        ));

        Movie_Actor:: create(array(
            'id_movie' => 5,
            'id_actor' => 2,
            'character' => 'Ellis Boyd',
        ));

        Movie_Actor:: create(array(
            'id_movie' => 1,
            'id_actor' => 3,
            'character' => 'Vito Corleone',
        ));

        Movie_Actor:: create(array(
            'id_movie' => 2,
            'id_actor' => 1,
            'character' => 'Michael Corleone',
        ));

        Movie_Actor:: create(array(
            'id_movie' => 2,
            'id_actor' => 3,
            'character' => 'Vito Corleone',
        ));
    }
}
