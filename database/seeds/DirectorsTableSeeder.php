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
            'id' => '1',
            'name' => 'Demetrio',
            'lastname' => 'Campos',
            'bday' => \Carbon\Carbon::create(1997, 9, 21),
            'nacionality' => 2
        ));
        
        Director:: create(array(
            'id' => '2',
            'name' => 'Steven',
            'lastname' => 'Spielberg',
            'bday' => \Carbon\Carbon::create(1946, 10, 18),
            'nacionality' => 1
        ));
         
        Director:: create(array(    
            'id' => '3',
            'name' => 'Francis',
            'lastname' => 'Ford Coppola',
            'bday' => \Carbon\Carbon::create(1939, 4, 7),
            'nacionality' => 1
        ));
        
        Director:: create(array(  
            'id' => '4',
            'name' => 'Quentin',
            'lastname' => 'Tarantino',
            'bday' => \Carbon\Carbon::create(1963, 27, 3),
            'nacionality' => 1
        ));
        
        Director:: create(array(    
            'id' => '5',
            'name' => 'Frank',
            'lastname' => 'Darabont',
            'bday' => \Carbon\Carbon::create(1959, 28, 1),
            'nacionality' => 3
        ));
        
        Director:: create(array(    
            'id' => '6',
            'name' => 'George',
            'lastname' => 'Roy Hill',
            'bday' => \Carbon\Carbon::create(1921, 12, 20),
            'nacionality' => 1
        ));
        
        Director:: create(array(    
            'id' => '7',
            'name' => 'Roberto',
            'lastname' => 'Benigni',
            'bday' => \Carbon\Carbon::create(1952, 10, 27),
            'nacionality' => 4
        ));
        
        Director:: create(array(    
            'id' => '8',
            'name' => 'Martin',
            'lastname' => 'Scorsese',
            'bday' => \Carbon\Carbon::create(1942, 11, 17),
            'nacionality' => 1
        ));
        
        Director:: create(array(    
            'id' => '9',
            'name' => 'Milos',
            'lastname' => 'Forman',
            'bday' => \Carbon\Carbon::create(1932, 2, 18),
            'nacionality' => 5
        ));
        
        Director:: create(array(    
            'id' => '10',
            'name' => 'Tony',
            'lastname' => 'Kaye',
            'bday' => \Carbon\Carbon::create(1952, 8, 8),
            'nacionality' => 1
        ));
        
        Director:: create(array(    
            'id' => '11',
            'name' => 'Clint',
            'lastname' => 'Eastwood',
            'bday' => \Carbon\Carbon::create(1930, 5, 31),
            'nacionality' => 1
        ));
    }
}
