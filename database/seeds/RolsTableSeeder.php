<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Rol;

class RolsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rols')->delete();

        Rol:: create(array( 
            'id' => 1,
            'name' => 'admin',
        ));

        Rol:: create(array( 
            'id' => 2,
            'name' => 'employee',
        ));

        Rol:: create(array( 
            'id' => 3,
            'name' => 'accountant',
        ));
    }
}