<?php

use Illuminate\Database\Seeder;
use App\Rents;

class RentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rents')->delete();
        
        Movie_Genre:: create(array(    
            'id_movies' => '1',
            'id_client' => '3',
            'date_rent' => \Carbon\Carbon::create(2019, 1, 1),
            'date_return_rent' => \Carbon\Carbon::create(2019, 1, 10),
            'price' => '10'
        ));
        
        Movie_Genre:: create(array(    
            'id_movies' => '2',
            'id_client' => '1',
            'date_rent' => \Carbon\Carbon::create(2019, 1, 2),
            'date_return_rent' => \Carbon\Carbon::create(2019, 1, 11),
            'price' => '15'
        ));
        
        Movie_Genre:: create(array(    
            'id_movies' => '3',
            'id_client' => '3',
            'date_rent' => \Carbon\Carbon::create(2019, 1, 3),
            'date_return_rent' => \Carbon\Carbon::create(2019, 1, 12),
            'price' => '10'
        ));
        
        Movie_Genre:: create(array(    
            'id_movies' => '4',
            'id_client' => '1',
            'date_rent' => \Carbon\Carbon::create(2019, 1, 4),
            'date_return_rent' => \Carbon\Carbon::create(2019, 1, 13),
            'price' => '12'
        ));
        
        Movie_Genre:: create(array(    
            'id_movies' => '5',
            'id_client' => '2',
            'date_rent' => \Carbon\Carbon::create(2019, 1, 5),
            'date_return_rent' => \Carbon\Carbon::create(2019, 1, 14),
            'price' => '10'
        ));
        
        Movie_Genre:: create(array(    
            'id_movies' => '6',
            'id_client' => '3',
            'date_rent' => \Carbon\Carbon::create(2019, 1, 6),
            'date_return_rent' => \Carbon\Carbon::create(2019, 1, 15),
            'price' => '10'
        ));
        
        Movie_Genre:: create(array(    
            'id_movies' => '7',
            'id_client' => '2',
            'date_rent' => \Carbon\Carbon::create(2019, 1, 7),
            'date_return_rent' => \Carbon\Carbon::create(2019, 1, 16),
            'price' => '12'
        ));
        
        Movie_Genre:: create(array(    
            'id_movies' => '8',
            'id_client' => '1',
            'date_rent' => \Carbon\Carbon::create(2019, 1, 8),
            'date_return_rent' => \Carbon\Carbon::create(2019, 1, 17),
            'price' => '15'
        ));
    }
}
