<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'product_name' => fake()->unique()->words(3, true),
            'product_description' => fake()->sentence(),
            'product_price' => fake()->randomFloat(2, 30, 1000),
            'product_stock' => fake()->numberBetween(1, 100),
            'product_status' => fake()->boolean(80),
        ];
    }
}
