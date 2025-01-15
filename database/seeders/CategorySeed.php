<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;



class CategorySeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Dữ liệu cố định cho bảng categories
        $categories = [
            ['name' => 'Necklace', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Earrings', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Bracelets', 'created_at' => now(), 'updated_at' => now()],
        ];

        // Chèn dữ liệu vào bảng categories
        foreach ($categories as $category) {
            Category::create($category);
        }

    }
}
