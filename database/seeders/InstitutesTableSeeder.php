<?php

namespace Database\Seeders;

use App\Models\Institutes;
use Illuminate\Database\Seeder;

class InstitutesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $institutes_names = [
            [
                "name" => "
                    Instituto Federal de Educação, 
                    Ciência e Tecnologia do Ceará
                ",
                "initials" => "IFCE"
            ],
            [
                "name" => "Universidade Federal do Ceará",
                "initials" => "UFC"
            ]
        ];

        foreach($institutes_names as $institute) {
            Institutes::create($institute);
        }

    }
}
