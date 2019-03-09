<?php

use Illuminate\Database\Seeder;
use App\Country;

class CountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('countries')->delete();
        
        Country:: create(array(    
            'id' => '1',
            'name' => 'USA',
            'flag' => 'Obesidad infantil',
            'iso' => 'US'            
        ));
        
        Country:: create(array(    
            'id' => '2',
            'name' => 'Espana',
            'flag' => 'La paella',
            'iso' => 'ES'            
        ));
        
        Country:: create(array(    
            'id' => '3',
            'name' => 'Francia',
            'flag' => 'La bagget',
            'iso' => 'FR'           
        ));
        
        Country:: create(array(    
            'id' => '4',
            'name' => 'Italia',
            'flag' => 'Les spaguetti',
            'iso' => 'IT'           
        ));
        
        Country:: create(array(    
            'id' => '5',
            'name' => 'Republica checa',
            'flag' => 'Estos no tienen identidad',
            'iso' => 'SC'
        ));
        
        Country:: create(array(    
            'id' => '6',
            'name' => 'Brasil',
            'flag' => 'Sopa de macaco',
            'iso' => 'BR'
        ));
    }
}
