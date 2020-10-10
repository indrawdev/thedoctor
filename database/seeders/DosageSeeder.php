<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DosageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dosages')->insert([
            ['name' => '1 x 1 Sebelum makan'],
            ['name' => '1 x 1 Sesudah makan'],
            ['name' => '2 x 1 Sebelum makan'],
            ['name' => '2 x 1 Sesudah makan'],
            ['name' => '3 x 1 Sebelum makan'],
            ['name' => '3 x 1 Sesudah makan']
        ]);
    }
}
