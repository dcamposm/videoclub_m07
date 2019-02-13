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
        DB::table('actors')->insert([
            'name' => 'Nicolas Cage',
            'lastname' => 'Cage',
            'bday' => \Carbon\Carbon::create(1989, 22, 5),
            'nationality' => 'USA',
        ]);
    }
}