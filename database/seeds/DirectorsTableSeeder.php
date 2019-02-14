<?php

use Illuminate\Database\Seeder;
use App\Director;

class DirectorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('directors')->delete();
        
        Director:: create(array(    
            'name' => 'Steven',
            'lastname' => 'Spielberg',
            'bday' => \Carbon\Carbon::create(1946, 18, 10),
            'nacionality' => 1
        ));
        
        Director:: create(array(    
            'name' => 'Demetrio',
            'lastname' => 'Campos',
            'bday' => \Carbon\Carbon::create(1997, 21, 9),
            'nacionality' => 2
        ));
    }
}
