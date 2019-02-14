<?php

use Illuminate\Database\Seeder;
use App\Client;

class ClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clients')->delete();
        
        Genre:: create(array(
            'dni' => '541236987A',
            'name' => 'Juan Manuel',
            'lastname' => 'Quito',
            'bday' => \Carbon\Carbon::create(1985, 25, 11),
            'nationality' => '5',
            'address' => 'Action',
        ));
        
        Genre:: create(array(
            'dni' => '875964123A',
            'name' => 'Eufracia',
            'lastname' => 'Estalón',
            'bday' => \Carbon\Carbon::create(1994, 1, 4),
            'nationality' => '4',
            'address' => 'Action',
        ));
        
        Genre:: create(array(
            'dni' => '852741963A',
            'name' => 'Manuela',
            'lastname' => 'Manitas',
            'bday' => \Carbon\Carbon::create(1987, 16, 6),
            'nationality' => '2',
            'address' => 'Action',
        ));
        
        Genre:: create(array(
            'dni' => '486275391A',
            'name' => 'Ernesto',
            'lastname' => 'Eldelatendá',
            'bday' => \Carbon\Carbon::create(1991, 21, 3),
            'nationality' => '2',
            'address' => 'Action',
        ));
    }
}
