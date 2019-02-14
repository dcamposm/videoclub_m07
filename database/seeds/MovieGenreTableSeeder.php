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
            'id_movies' => '1',
            'id_genres' => '1'
        ));
        
        Movie_Genre:: create(array(    
            'id_movies' => '2',
            'id_genres' => '1'
        ));
        
        Movie_Genre:: create(array(    
            'id_movies' => '3',
            'id_genres' => '1'
        ));
        
        Movie_Genre:: create(array(    
            'id_movies' => '3',
            'id_genres' => '5'
        ));
        
        Movie_Genre:: create(array(    
            'id_movies' => '4',
            'id_genres' => '1'
        ));
        
        Movie_Genre:: create(array(    
            'id_movies' => '5',
            'id_genres' => '1'
        ));
        
        Movie_Genre:: create(array(    
            'id_movies' => '6',
            'id_genres' => '1'
        ));
        
        Movie_Genre:: create(array(    
            'id_movies' => '7',
            'id_genres' => '3'
        ));
        
        Movie_Genre:: create(array(    
            'id_movies' => '7',
            'id_genres' => '4'
        ));
        
        Movie_Genre:: create(array(    
            'id_movies' => '8',
            'id_genres' => '1'
        ));
        
        Movie_Genre:: create(array(    
            'id_movies' => '8',
            'id_genres' => '5'
        ));
        
        Movie_Genre:: create(array(    
            'id_movies' => '9',
            'id_genres' => '1'
        ));
        Movie_Genre:: create(array(    
            'id_movies' => '9',
            'id_genres' => '5'
        ));
        
        Movie_Genre:: create(array(    
            'id_movies' => '10',
            'id_genres' => '1'
        ));
        Movie_Genre:: create(array(    
            'id_movies' => '10',
            'id_genres' => '5'
        ));
        
        Movie_Genre:: create(array(    
            'id_movies' => '11',
            'id_genres' => '1'
        ));
    }
}
