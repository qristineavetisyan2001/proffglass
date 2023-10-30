<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $postsData = [
            ['subcategory_id' => '3','title' => 'Ծալվող դուռ', 'description' => '85․000 դրամ', 'image' => 'collapsibleProduct.png'],
            ['subcategory_id' => '3','title' => 'Ծալվող դուռ', 'description' => '85․000 դրամ', 'image' => 'collapsibleProduct.png'],
            ['subcategory_id' => '3','title' => 'Ծալվող դուռ', 'description' => '85․000 դրամ', 'image' => 'collapsibleProduct.png'],
            ['subcategory_id' => '3','title' => 'Ծալվող դուռ', 'description' => '85․000 դրամ', 'image' => 'collapsibleProduct.png'],
            ['subcategory_id' => '3','title' => 'Ծալվող դուռ', 'description' => '85․000 դրամ', 'image' => 'collapsibleProduct.png'],
            ['subcategory_id' => '3','title' => 'Ծալվող դուռ', 'description' => '85․000 դրամ', 'image' => 'collapsibleProduct.png'],

            ['subcategory_id' => '5','title' => 'Թերմո պատուհան', 'description' => '85․000 դրամ', 'image' => 'metalplasticProduct.png'],
            ['subcategory_id' => '5','title' => 'Թերմո պատուհան', 'description' => '85․000 դրամ', 'image' => 'metalplasticProduct.png'],
            ['subcategory_id' => '5','title' => 'Թերմո պատուհան', 'description' => '85․000 դրամ', 'image' => 'metalplasticProduct.png'],
            ['subcategory_id' => '5','title' => 'Թերմո պատուհան', 'description' => '85․000 դրամ', 'image' => 'metalplasticProduct.png'],
            ['subcategory_id' => '5','title' => 'Թերմո պատուհան', 'description' => '85․000 դրամ', 'image' => 'metalplasticProduct.png'],
            ['subcategory_id' => '5','title' => 'Թերմո պատուհան', 'description' => '85․000 դրամ', 'image' => 'metalplasticProduct.png'],
        ];

        foreach ($postsData as $post) {
            Product::create($post);
        }
    }
}
