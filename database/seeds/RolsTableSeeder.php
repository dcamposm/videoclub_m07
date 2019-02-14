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

        DB::table('rols')->array([
            'id' => 1,
            'name' => 'admin',
        ]);

        DB::table('rols')->array([
            'id' => 2,
            'name' => 'employee',
        ]);

        DB::table('rols')->array([
            'id' => 3,
            'name' => 'accountant',
        ]);
    }
}