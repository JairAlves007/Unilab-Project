<?php

namespace Database\Seeders;

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
            InstitutesTableSeeder::class,
            BigAreasTableSeeder::class,
            AreasTableSeeder::class,
            SubAreasTableSeeder::class,
            SpecialitiesTableSeeder::class,
            CategoriesTableSeeder::class,
            MinTitulationsTableSeeder::class,
            PermissionsTableSeeder::class,
            RolesTableSeeder::class,
            RolesHasPermissionsTableSeeder::class,
            UsersTableSeeder::class
        ]);
    }
}
