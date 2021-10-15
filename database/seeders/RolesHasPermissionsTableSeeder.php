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
                10
            ], // Gestor

            [
                11,
                12
            ], // Bolsista

            [
                5,
                12,
                14
            ], // Orientador

            [
                9,
                10
            ] // Membro
        ];

        for ($i = 1; $i <= 5; $i++) {
            Role::findById($i)->permissions()->attach($permissions[$i - 1]);
        }
    }
}
