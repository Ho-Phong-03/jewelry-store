<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;
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
            'name' => fake()->name(), // Tên sản phẩm ngẫu nhiên
            'description' => fake()->paragraph(), // Mô tả ngẫu nhiên
            'price' => fake()->randomFloat(2, 10, 1000), // Giá từ 10 đến 1000
            'category_id' => Category::inRandomOrder()->first()->id ?? Category::factory(), // Danh mục ngẫu nhiên
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
