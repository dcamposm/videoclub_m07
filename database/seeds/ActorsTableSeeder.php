<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Actor;

class ActorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('actors')->delete();

        Actor:: create(array(
            'id' => 1,
            'name' => 'Al',
            'lastname' => 'Pacino',
            'bday' => \Carbon\Carbon::create(1940, 4, 25),
            'image' => "/img/al_pacino.jpg",
            'nationality' => 1,
        ));

        Actor:: create(array(
            'id' => 2,
            'name' => 'Morgan',
            'lastname' => 'Freeman',
            'bday' => \Carbon\Carbon::create(1937, 1, 6),
            'image' => "/img/morgan_freeman.jpg",
            'nationality' => 1,
        ));

        Actor:: create(array(
            'id' => 3,
            'name' => 'Marlon',
            'lastname' => 'Brando',
            'bday' => \Carbon\Carbon::create(1924, 4, 3),
            'image' => "/img/marlon_brando.jpg",
            'nationality' => 1,
        ));
    }
}