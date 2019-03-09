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
            'image' => 'https://fivethirtyeight.com/wp-content/uploads/2015/10/kappadeseno_lede.jpg?w=575', 
            'nacionality' => 2
        ));
        
        Director:: create(array(
            'id' => '2',
            'name' => 'Steven',
            'lastname' => 'Spielberg',
            'bday' => \Carbon\Carbon::create(1946, 10, 18),
            'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/67/Steven_Spielberg_by_Gage_Skidmore.jpg/276px-Steven_Spielberg_by_Gage_Skidmore.jpg', 
            'nacionality' => 1
        ));
         
        Director:: create(array(    
            'id' => '3',
            'name' => 'Francis',
            'lastname' => 'Ford Coppola',
            'bday' => \Carbon\Carbon::create(1939, 4, 7),
            'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/0/05/Francis_Ford_Coppola_2011_CC.jpg/260px-Francis_Ford_Coppola_2011_CC.jpg', 
            'nacionality' => 1
        ));
        
        Director:: create(array(  
            'id' => '4',
            'name' => 'Quentin',
            'lastname' => 'Tarantino',
            'bday' => \Carbon\Carbon::create(1963, 27, 3),
            'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/0/0b/Quentin_Tarantino_by_Gage_Skidmore.jpg/220px-Quentin_Tarantino_by_Gage_Skidmore.jpg', 
            'nacionality' => 1
        ));
        
        Director:: create(array(    
            'id' => '5',
            'name' => 'Frank',
            'lastname' => 'Darabont',
            'bday' => \Carbon\Carbon::create(1959, 28, 1),
            'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/1/19/Frank_Darabont_at_the_PaleyFest_2011_-_The_Walking_Dead_panel.jpg/250px-Frank_Darabont_at_the_PaleyFest_2011_-_The_Walking_Dead_panel.jpg', 
            'nacionality' => 3
        ));
        
        Director:: create(array(    
            'id' => '6',
            'name' => 'George',
            'lastname' => 'Roy Hill',
            'bday' => \Carbon\Carbon::create(1921, 12, 20),
            'image' => 'https://upload.wikimedia.org/wikipedia/commons/4/4d/George_Roy_Hill_%281970%29.jpg', 
            'nacionality' => 1
        ));
        
        Director:: create(array(    
            'id' => '7',
            'name' => 'Roberto',
            'lastname' => 'Benigni',
            'bday' => \Carbon\Carbon::create(1952, 10, 27),
            'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/0/0d/Benigni.jpg/220px-Benigni.jpg', 
            'nacionality' => 4
        ));
        
        Director:: create(array(    
            'id' => '8',
            'name' => 'Martin',
            'lastname' => 'Scorsese',
            'bday' => \Carbon\Carbon::create(1942, 11, 17),
            'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/8/8a/Martin_Scorsese_Berlinale_2010_%28cropped%29.jpg/220px-Martin_Scorsese_Berlinale_2010_%28cropped%29.jpg', 
            'nacionality' => 1
        ));
        
        Director:: create(array(    
            'id' => '9',
            'name' => 'Milos',
            'lastname' => 'Forman',
            'bday' => \Carbon\Carbon::create(1932, 2, 18),
            'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/d/d0/Milos_Forman.jpg/220px-Milos_Forman.jpg', 
            'nacionality' => 5
        ));
        
        Director:: create(array(    
            'id' => '10',
            'name' => 'Tony',
            'lastname' => 'Kaye',
            'bday' => \Carbon\Carbon::create(1952, 8, 8),
            'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/2/25/Tony_Kaye_2011_Shankbone.JPG/200px-Tony_Kaye_2011_Shankbone.JPG', 
            'nacionality' => 1
        ));
        
        Director:: create(array(    
            'id' => '11',
            'name' => 'Clint',
            'lastname' => 'Eastwood',
            'bday' => \Carbon\Carbon::create(1930, 5, 31),
            'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/7/7e/Clint_Eastwood_at_2010_New_York_Film_Festival.jpg/220px-Clint_Eastwood_at_2010_New_York_Film_Festival.jpg', 
            'nacionality' => 1
        ));
    }
}
