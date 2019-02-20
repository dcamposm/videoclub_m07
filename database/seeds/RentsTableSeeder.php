<?php

use Illuminate\Database\Seeder;
use App\Rent;

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
        
        Rent:: create(array(    
            'id_movie' => '1',
            'id_client' => '3',
            'date_rent' => \Carbon\Carbon::create(2019, 1, 1),
            'date_return_rent' => \Carbon\Carbon::create(2019, 1, 10),
            'price' => '10'
        ));
        
        Rent:: create(array(    
            'id_movie' => '2',
            'id_client' => '1',
            'date_rent' => \Carbon\Carbon::create(2019, 1, 2),
            'date_return_rent' => \Carbon\Carbon::create(2019, 1, 11),
            'price' => '15'
        ));
        
        Rent:: create(array(    
            'id_movie' => '3',
            'id_client' => '3',
            'date_rent' => \Carbon\Carbon::create(2019, 1, 3),
            'date_return_rent' => \Carbon\Carbon::create(2019, 1, 12),
            'price' => '10'
        ));
        
        Rent:: create(array(    
            'id_movie' => '4',
            'id_client' => '1',
            'date_rent' => \Carbon\Carbon::create(2019, 1, 4),
            'date_return_rent' => \Carbon\Carbon::create(2019, 1, 13),
            'price' => '12'
        ));
        
        Rent:: create(array(    
            'id_movie' => '5',
            'id_client' => '2',
            'date_rent' => \Carbon\Carbon::create(2019, 1, 5),
            'date_return_rent' => \Carbon\Carbon::create(2019, 1, 14),
            'price' => '10'
        ));
        
        Rent:: create(array(    
            'id_movie' => '6',
            'id_client' => '3',
            'date_rent' => \Carbon\Carbon::create(2019, 1, 6),
            'date_return_rent' => \Carbon\Carbon::create(2019, 1, 15),
            'price' => '10'
        ));
        
        Rent:: create(array(    
            'id_movie' => '7',
            'id_client' => '2',
            'date_rent' => \Carbon\Carbon::create(2019, 1, 7),
            'date_return_rent' => \Carbon\Carbon::create(2019, 1, 16),
            'price' => '12'
        ));
        
        Rent:: create(array(    
            'id_movie' => '8',
            'id_client' => '1',
            'date_rent' => \Carbon\Carbon::create(2019, 1, 8),
            'date_return_rent' => \Carbon\Carbon::create(2019, 1, 17),
            'price' => '15'
        ));
    }
}
