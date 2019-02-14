<?php

use Illuminate\Database\Seeder;
use App\Genre;

class GenresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genres')->delete();
        
        Genre:: create(array(    
            'name' => 'Action',
            'description' => 'Bum, explosion and action'
        ));
        
        Genre:: create(array(    
            'name' => 'Horror',
            'description' => 'uuuuuuuuuuuuuu, you are afraid and you know'
        ));
        
        Genre:: create(array(    
            'name' => 'Comedy',
            'description' => 'Ha Ha Ha Ha Ha Ha'
        ));
    }
}
