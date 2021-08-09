<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        return [
            'category_id' => Category::factory(),
            'name' => $this->faker->words(2, true),
            'description' => $this->faker->paragraph(),
            'slug' => $this->faker->slug(),
            'price' => $this->faker->numberBetween(1000, 9000),
            'quantity' => $this->faker->randomDigit()
        ];
    }
}
