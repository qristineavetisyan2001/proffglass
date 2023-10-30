<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $postsData = [
            ['subcategory_id' => '3','title' => 'Ծալվող դուռ', 'description' => '85․000 դրամ'],
            ['subcategory_id' => '3','title' => 'Ծալվող դուռ', 'description' => '85․000 դրամ'],
            ['subcategory_id' => '3','title' => 'Ծալվող դուռ', 'description' => '85․000 դրամ'],
            ['subcategory_id' => '3','title' => 'Ծալվող դուռ', 'description' => '85․000 դրամ'],
            ['subcategory_id' => '3','title' => 'Ծալվող դուռ', 'description' => '85․000 դրամ'],
            ['subcategory_id' => '3','title' => 'Ծալվող դուռ', 'description' => '85․000 դրամ'],
        ];

        foreach ($postsData as $post) {
            Post::create($post);
        }
    }
}
