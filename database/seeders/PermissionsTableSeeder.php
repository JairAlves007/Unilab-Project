<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            'create-user',
            'view-user',
            'edit-user',
            'delete-user',
            'create-edict',
            'view-edict',
            'edit-edict',
            'delete-edict',
            'rate-edict',
            'rate-project',
            'join-project',
            'create-relatory',
            'rate-relatory',
            'attach-project',
            'create-work_plans',
            'view-work_plans-approved',
            'view-candidates',
        ];

        foreach($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }
    }
}
