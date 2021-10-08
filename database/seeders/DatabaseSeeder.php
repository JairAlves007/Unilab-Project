<?php

namespace Database\Seeders;

use App\Models\MinTitulations;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            CategoriesTableSeeder::class,
            MinTitulationsTableSeeder::class,
            PermissionsTableSeeder::class,
            RolesTableSeeder::class,
            RolesHasPermissionsTableSeeder::class,
            UsersTableSeeder::class
        ]);
    }
}
