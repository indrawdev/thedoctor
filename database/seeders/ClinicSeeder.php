<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClinicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clinics')->delete();

        DB::table('clinics')->insert([
            [
                'user_id' => 1,
                'name' => 'dr. Untung',
                'slug' => 'dr-untung',
                'address' => 'Jl. Banten No. 81B, Jagakarsa, Jakarta Selatan',
                'phone' => '085294076828',
                'email' => 'untung@gmail.com'
            ],
            [
                'user_id' => 1,
                'name' => 'dr. Nana',
                'slug' => 'dr-nana',
                'address' => 'Jl. Banten No. 81B, Jagakarsa, Jakarta Selatan',
                'phone' => '085294076820',
                'email' => 'nana@gmail.com'
            ]
        ]);
    }
}
