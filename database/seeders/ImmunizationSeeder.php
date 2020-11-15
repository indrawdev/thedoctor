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
        DB::table('immunizations')->delete();

        DB::table('immunizations')->insert([
            ['name' => 'B.C.G'],
            ['name' => 'D.P.T/INFARIX'],
            ['name' => 'POLIO/IPV'],
            ['name' => 'TYPHI-M'],
            ['name' => 'HEPATITIS B.'],
            ['name' => 'CAMPAK/MMR'],
            ['name' => 'HIB'],
            ['name' => 'PREVENAR'],
            ['name' => 'IPD'],
            ['name' => 'HEPATITIS A'],
            ['name' => 'VARISELA'],
            ['name' => 'ROTAVIRUS'],
            ['name' => 'INFLUENSA'],
            ['name' => 'MANTOUX'],
        ]);
    }
}
