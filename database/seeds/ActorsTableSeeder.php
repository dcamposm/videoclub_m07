<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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

        DB::table('actors')->insert([
            'name' => 'Nicolas',
            'lastname' => 'Cage',
            'bday' => \Carbon\Carbon::create(1964, 1, 7),
            'nationality' => 'USA',
        ]);
    }
}