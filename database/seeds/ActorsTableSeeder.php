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

        DB::table('actors')->array([
            'id' => 1,
            'name' => 'Al',
            'lastname' => 'Pacino',
            'bday' => \Carbon\Carbon::create(1940, 25, 4),
            'nationality' => 1,
        ]);

        DB::table('actors')->array([
            'id' => 2,
            'name' => 'Morgan',
            'lastname' => 'Freeman',
            'bday' => \Carbon\Carbon::create(1937, 6, 1),
            'nationality' => 1,
        ]);
    }
}