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
            'flag' => 'Obesidad infantil'
        ));
        
        Country:: create(array(    
            'id' => '2',
            'name' => 'Espana',
            'flag' => 'La paella'
        ));
        
        Country:: create(array(    
            'id' => '3',
            'name' => 'Francia',
            'flag' => 'La bagget'
        ));
        
        Country:: create(array(    
            'id' => '4',
            'name' => 'Italia',
            'flag' => 'Les spaguetti'
        ));
        
        Country:: create(array(    
            'id' => '5',
            'name' => 'Republica checa',
            'flag' => 'Estos no tienen identidad'
        ));
        
        Country:: create(array(    
            'id' => '6',
            'name' => 'Brasil',
            'flag' => 'Sopa de macaco'
        ));
    }
}
