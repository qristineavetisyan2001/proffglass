<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categoriesData = [
            ['title' => 'Լոգախցիկներ'],
            ['title' => 'Դռներ'],
            ['title' => 'Պատուհաններ'],
            ['title' => 'Ֆասադային կոնստուկցիաներ'],
            ['title' => 'Դարպասներ'],
        ];

        foreach ($categoriesData as $category) {
            Category::create($category);
        }
    }
}
