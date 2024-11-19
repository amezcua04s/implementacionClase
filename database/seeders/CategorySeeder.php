<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::insert([
            [
                'name' => 'Categoria 1',
                'url_clean' => 'category_1'
            ], [
                'name' => 'Categoria 2',
                'url_clean' => 'category_2'
            ], [
                'name' => 'Categoria 3',
                'url_clean' => 'category_3'
            ],[
                'name' => 'Categoria 4',
                'url_clean' => 'category_4'
            ],[
                'name' => 'Categoria 5',
                'url_clean' => 'category_5'
            ]

        ]);
    }
}
