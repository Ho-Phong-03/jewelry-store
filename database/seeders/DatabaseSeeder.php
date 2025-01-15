<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::statement("SET FOREIGN_KEY_CHECKS=0;");
        DB::table("users")->truncate();
        DB::table("products")->truncate();
        DB::table("categories")->truncate();
        DB::statement("SET FOREIGN_KEY_CHECKS=1;");
        

        
        $this->call([
            UserSeed::class,
        ]);

        $this->call([
            CategorySeed::class,
        ]);
        

        Product::factory(100)->create();
    }
}
