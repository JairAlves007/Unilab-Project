<?php

namespace Database\Seeders;

use App\Models\SubAreas;
use Illuminate\Database\Seeder;

class SubAreasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $sub_areas_name = [
            [
                "code" => "001",
                "name" => "Função do 2° Grau",
                "areas_id" => "1"
            ],
            [
                "code" => "002",
                "name" => "Primeira Guerra Mundial",
                "areas_id" => "2"
            ]
        ];

        foreach($sub_areas_name as $area){
            SubAreas::create($area);
        }

    }
}
