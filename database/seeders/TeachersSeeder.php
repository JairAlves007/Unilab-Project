<?php

namespace Database\Seeders;

use App\Models\Teachers;
use Illuminate\Database\Seeder;

class TeachersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Teachers::create([
        'registration' => '012345-67',
        'institutes_id' => '1',
        'users_id' => '1',
      ]);
    }
}
