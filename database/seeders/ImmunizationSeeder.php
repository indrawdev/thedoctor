<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ImmunizationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('immunizations')->insert([
            ['name' => 'BCG'],
            ['name' => ''],
        ]);
    }
}
