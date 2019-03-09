<?php

use Illuminate\Database\Seeder;
use App\Movie_Genre;

class MovieGenreTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('movie_genre')->delete();
        
        Movie_Genre:: create(array(    
            'id_movie' => '1',
            'id_genre' => '1'
        ));
        
        Movie_Genre:: create(array(    
            'id_movie' => '2',
            'id_genre' => '1'
        ));
        
        Movie_Genre:: create(array(    
            'id_movie' => '3',
            'id_genre' => '1'
        ));
        
        Movie_Genre:: create(array(    
            'id_movie' => '3',
            'id_genre' => '5'
        ));
        
        Movie_Genre:: create(array(    
            'id_movie' => '4',
            'id_genre' => '1'
        ));
        
        Movie_Genre:: create(array(    
            'id_movie' => '5',
            'id_genre' => '1'
        ));
        
        Movie_Genre:: create(array(    
            'id_movie' => '6',
            'id_genre' => '1'
        ));
        
        Movie_Genre:: create(array(    
            'id_movie' => '7',
            'id_genre' => '3'
        ));
        
        Movie_Genre:: create(array(    
            'id_movie' => '7',
            'id_genre' => '4'
        ));
        
        Movie_Genre:: create(array(    
            'id_movie' => '8',
            'id_genre' => '1'
        ));
        
        Movie_Genre:: create(array(    
            'id_movie' => '8',
            'id_genre' => '5'
        ));
        
        Movie_Genre:: create(array(    
            'id_movie' => '9',
            'id_genre' => '1'
        ));
        Movie_Genre:: create(array(    
            'id_movie' => '9',
            'id_genre' => '5'
        ));
        
        Movie_Genre:: create(array(    
            'id_movie' => '10',
            'id_genre' => '1'
        ));
        Movie_Genre:: create(array(    
            'id_movie' => '10',
            'id_genre' => '5'
        ));
        
        Movie_Genre:: create(array(    
            'id_movie' => '11',
            'id_genre' => '1'
        ));
    }
}
