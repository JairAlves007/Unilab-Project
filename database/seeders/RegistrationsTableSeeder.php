<?php

namespace Database\Seeders;

use App\Models\Students;
use App\Models\Teachers;
use Illuminate\Database\Seeder;

class RegistrationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Teachers::create([
            'registration' => '12345678',
            'institutes_id' => '1',
            'users_id' => '2',
        ]);

        Students::create([
            'registration' => '12345678',
            'users_id' => '3',
        ]);
    }
}
