<?php

namespace Database\Seeders;

use App\Models\Specialities;
use Illuminate\Database\Seeder;

class SpecialitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $specialities_name = [
            [
                "code" => "001",
                "name" => "Doutorado em Matemática",
                "sub_areas_id" => "1"
            ],
            [
                "code" => "002",
                "name" => "Docente em História",
                "sub_areas_id" => "2"
            ]
        ];

        foreach($specialities_name as $specialitie) {
            Specialities::create($specialitie);
        }

    }
}
