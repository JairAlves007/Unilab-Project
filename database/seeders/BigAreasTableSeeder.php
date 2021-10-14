<?php

namespace Database\Seeders;

use App\Models\BigAreas;
use Illuminate\Database\Seeder;

class BigAreasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $big_areas_name = [
            [
                "code" => "001",
                "name" => "Exatas",
            ],
            [
                "code" => "002",
                "name" => "Humanas"
            ]
        ];

        foreach($big_areas_name as $area){
            BigAreas::create($area);
        }

    }
}
