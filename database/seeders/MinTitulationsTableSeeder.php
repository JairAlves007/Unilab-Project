<?php

namespace Database\Seeders;

use App\Models\MinTitulations;
use Illuminate\Database\Seeder;

class MinTitulationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $min_titulations = [
            'Graduado',
            'Pós-Graduado',
            'Mestrado',
            'Doutorado'
        ];

        foreach ($min_titulations as $min_titulation) {
            MinTitulations::create(['titulation' => $min_titulation]);
        }
    }
}
