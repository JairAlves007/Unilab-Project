<?php

namespace Database\Seeders;

use App\Models\Categories;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            'Desenvolvimento',
            'Educação',
            'Estágio'
        ];

        foreach ($categories as $category) {
            Categories::create(['name' => $category]);
        }
    }
}
