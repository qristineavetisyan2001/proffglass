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
            ['category_id' => '2','title' => 'Պատուհաններ'],
        ];

        foreach ($subCategoriesData as $subcategory) {
            Subcategory::create($subcategory);
        }
    }
}
