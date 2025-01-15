<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Category; // Model lấy dữ liệu từ database
use App\Models\Product;
use Illuminate\Pagination\Paginator;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Lấy dữ liệu từ bảng categories
        $categories = Category::all();

        // Chia sẻ dữ liệu cho tất cả các view
        View::share('categories', $categories);

        Paginator::useTailwind();

        $product = Product::all();
        // Chia sẻ dữ liệu cho tất cả các view
        View::share('product', $product);

    }
}
