<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolesHasPermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $permissions = [
            Permission::all(), // Super-Admin

            [
                1,
                2,
                3,
                4,
                10,
                15
            ], // Gestor

            [
                6,
                11,
                12,
                19
            ], // Bolsista

            [
                5,
                6,
                7,
                12,
                14,
                15,
                17,
                18
            ], // Orientador

            [
                6,
                9,
                10,
            ] // Membro
        ];

        for ($i = 1; $i <= 5; $i++) {
            Role::findById($i)->permissions()->attach($permissions[$i - 1]);
        }
    }
}
