<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(ClinicSeeder::class);
        $this->call(DosageSeeder::class);
        $this->call(ImmunizationSeeder::class);
    }
}
