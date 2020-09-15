<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
            [
                'name' => 'Indra Pramana',
                'email' => 'idprama@gmail.com',
                'password' => Hash::make('1233456'),
            ],
            [
                'name' => 'Budy Wijaya',
                'email' => 'budy.wijaya@gmail.com',
                'password' => Hash::make('1233456'),
            ],
            [
                'name' => 'Sienny',
                'email' => 'sienny@gmail.com',
                'password' => Hash::make('1233456'),
            ]
        );
    }
}
