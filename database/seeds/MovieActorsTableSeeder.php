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

        DB::table('movie_actor')->array([
            'id_movie' => 1,
            'id_actor' => 1,
            'character' => 'Michael Corleone',
        ]);

        DB::table('movie_actor')->array([
            'id_movie' => 5,
            'id_actor' => 2,
            'character' => 'Ellis Boyd',
        ]);
    }
}
