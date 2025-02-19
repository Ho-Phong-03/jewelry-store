<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use App\Models\Category;
use App\Models\Product;
use Carbon\Laravel\ServiceProvider;
use Illuminate\Pagination\Paginator;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        // Kiểm tra nếu bảng 'categories' tồn tại trước khi truy vấn
        if (Schema::hasTable('categories')) {
            $categories = Category::all();
            View::share('categories', $categories);
        }
        
        // Tương tự với bảng 'products'
        if (Schema::hasTable('products')) {
            $product = Product::all();
            View::share('product', $product);
        }

        Paginator::useTailwind();
    }
}
