<?php

namespace Database\Seeders;

use App\Models\Areas;
use Illuminate\Database\Seeder;

class AreasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $areas_name = [
            [
                "code" => "001",
                "name" => "Matemática",
                "big_areas_id" => "1"
            ],
            [
                "code" => "002",
                "name" => "Historia",
                "big_areas_id" => "2"
            ]
        ];

        foreach($areas_name as $area){
            Areas::create($area);
        }
    }
}
