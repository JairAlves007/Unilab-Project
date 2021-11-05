<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Administrador',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('123456789'),
            'can_access' => 1
        ])->syncRoles('super-admin');

        User::create([
            'name' => 'Orientador',
            'email' => 'orientador@gmail.com',
            'password' => Hash::make('123456789'),
            'can_access' => 1
        ])->syncRoles('orientador');

        User::create([
            'name' => 'Bolsista',
            'email' => 'bolsista@gmail.com',
            'password' => Hash::make('123456789'),
            'can_access' => 1
        ])->syncRoles('bolsista');
    }
}
