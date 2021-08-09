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

        Product::factory(20)->create([
            'category_id' => $mensClothing->id
        ]);

        Product::factory(20)->create([
            'category_id' => $womensClothing->id
        ]);
    }
}
