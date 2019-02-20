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
        
        Client:: create(array(
            'dni' => '54123697A',
            'name' => 'Juan Manuel',
            'lastname' => 'Quito',
            'bday' => \Carbon\Carbon::create(1985, 25, 11),
            'nacionality' => '5',
            'address' => 'Action',
        ));
        
        Client:: create(array(
            'dni' => '87596413A',
            'name' => 'Eufracia',
            'lastname' => 'Estalón',
            'bday' => \Carbon\Carbon::create(1994, 1, 4),
            'nacionality' => '4',
            'address' => 'Action',
        ));
        
        Client:: create(array(
            'dni' => '85274163A',
            'name' => 'Manuela',
            'lastname' => 'Manitas',
            'bday' => \Carbon\Carbon::create(1987, 16, 6),
            'nacionality' => '2',
            'address' => 'Action',
        ));
        
        Client:: create(array(
            'dni' => '48627531A',
            'name' => 'Ernesto',
            'lastname' => 'Eldelatendá',
            'bday' => \Carbon\Carbon::create(1991, 21, 3),
            'nacionality' => '2',
            'address' => 'Action',
        ));
    }
}
