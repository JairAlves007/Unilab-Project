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
            Permission::all(),

            [
                1,
                2,
                3,
                4,
                10
            ],

            [
                11,
                12
            ],

            [
                5,
                12
            ],

            [
                9,
                10
            ]
        ];

        for ($i = 1; $i <= 5; $i++) {
            Role::findById($i)->permissions()->attach($permissions[$i - 1]);
        }
    }
}
