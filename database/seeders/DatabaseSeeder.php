<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\User;
use App\Models\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10);

        $mensClothing = Category::factory()->create([
            'name' => 'Mens Clothing'
        ]);

        $womensClothing = Category::factory()->create([
            'name' => 'Womens Clothing'
        ]);

        // Mens clothing
        Product::factory()->create([
            'category_id' => $mensClothing->id,
            'imageURL' => 'https://images.unsplash.com/photo-1574180566232-aaad1b5b8450?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80'
        ]);
        Product::factory()->create([
            'category_id' => $mensClothing->id,
            'imageURL' => 'https://images.unsplash.com/flagged/photo-1555728750-55f4db213833?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=623&q=80'
        ]);
        Product::factory()->create([
            'category_id' => $mensClothing->id,
            'imageURL' => 'https://images.unsplash.com/photo-1578423355030-c7b251f5c8f4?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=701&q=80'
        ]);


        // Womens Clothing
        Product::factory()->create([
            'category_id' => $womensClothing->id,
            'imageURL' => 'https://images.unsplash.com/photo-1522706604291-210a56c3b376?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80'
        ]);
        Product::factory()->create([
            'category_id' => $womensClothing->id,
            'imageURL' => 'https://images.unsplash.com/photo-1610143955896-950eb5ce3790?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80'
        ]);
        Product::factory()->create([
            'category_id' => $womensClothing->id,
            'imageURL' => 'https://images.unsplash.com/photo-1578553465764-12343ecfdc1d?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80'
        ]);
    }
}
