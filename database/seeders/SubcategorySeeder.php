<?php

namespace Database\Seeders;

use App\Models\Subcategory;
use Illuminate\Database\Seeder;

class SubcategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subCategoriesData = [
            ['category_id' => '2','title' => 'Թերմո ալյումին'],
            ['category_id' => '2','title' => 'Մետաղապլաստե'],
            ['category_id' => '2','title' => 'Ծալվող'],
            ['category_id' => '2','title' => 'Սահող'],

            ['category_id' => '3','title' => 'Մետաղապլաստե'],
            ['category_id' => '3','title' => 'Թերմոալյումինե'],
        ];

        foreach ($subCategoriesData as $subcategory) {
            Subcategory::create($subcategory);
        }
    }
}
