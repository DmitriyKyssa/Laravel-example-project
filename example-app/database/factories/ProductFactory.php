<?php

namespace Database\Factories;

use App\Models\Brand;
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
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(4),
            'description' => $this->faker->text(100),
            'price' => $this->faker->numberBetween(100, 3000),
            'image' => $this->faker->imageUrl(),
            'is_published' => 1,
            'brand_id' => Brand::get()->random()->id
        ];
    }
}
