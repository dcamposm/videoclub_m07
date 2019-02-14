<?php

use Illuminate\Database\Seeder;

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
            'id_client' => '1',
            'dateRent' => \Carbon\Carbon::create(2019, 1, 1),
            'dateReturnRent' => \Carbon\Carbon::create(1991, 13, 2),
            'price' => '10'
        ));
        
        Movie_Genre:: create(array(    
            'id_movies' => '2',
            'id_client' => '1',
            'dateRent' => \Carbon\Carbon::create(2019, 1, 1),
            'dateReturnRent' => \Carbon\Carbon::create(1991, 13, 2),
            'price' => '10'
        ));
        
        Movie_Genre:: create(array(    
            'id_movies' => '3',
            'id_client' => '1',
            'dateRent' => \Carbon\Carbon::create(2019, 1, 1),
            'dateReturnRent' => \Carbon\Carbon::create(1991, 13, 2),
            'price' => '10'
        ));
        
        Movie_Genre:: create(array(    
            'id_movies' => '4',
            'id_client' => '1',
            'dateRent' => \Carbon\Carbon::create(2019, 1, 1),
            'dateReturnRent' => \Carbon\Carbon::create(1991, 13, 2),
            'price' => '10'
        ));
        
        Movie_Genre:: create(array(    
            'id_movies' => '5',
            'id_client' => '1',
            'dateRent' => \Carbon\Carbon::create(2019, 1, 1),
            'dateReturnRent' => \Carbon\Carbon::create(1991, 13, 2),
            'price' => '10'
        ));
        
        Movie_Genre:: create(array(    
            'id_movies' => '6',
            'id_client' => '1',
            'dateRent' => \Carbon\Carbon::create(2019, 1, 1),
            'dateReturnRent' => \Carbon\Carbon::create(1991, 13, 2),
            'price' => '10'
        ));
        
        Movie_Genre:: create(array(    
            'id_movies' => '7',
            'id_client' => '1',
            'dateRent' => \Carbon\Carbon::create(2019, 1, 1),
            'dateReturnRent' => \Carbon\Carbon::create(1991, 13, 2),
            'price' => '10'
        ));
        
        Movie_Genre:: create(array(    
            'id_movies' => '8',
            'id_client' => '1',
            'dateRent' => \Carbon\Carbon::create(2019, 1, 1),
            'dateReturnRent' => \Carbon\Carbon::create(1991, 13, 2),
            'price' => '10'
        ));
    }
    /*

	class MyModel extends Model {
		use HasCompositeKey;

		protected $primaryKey = [id_movie, id_client];
	}

    */
}
