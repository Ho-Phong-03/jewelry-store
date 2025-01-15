<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Category;

use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    // Trang chủ
    public function homePage(){
        $products = Product::paginate(10);
        $categories = Category::all(); // Lấy tất cả danh mục
        return view('site.index', compact('products', 'categories')); // Truyền các danh mục sang view
    }
    

    // Giỏ hàng
    public function cart(){
        return view('site.cart');
    }

    // Thanh toán
    public function checkOut(){
        return view('site.checkout');
    }

    // Chi tiết sản phẩm
    public function detailProduct($id)
    {
        $product = Product::with('images')->findOrFail($id);
        $randomProducts = Product::inRandomOrder()->take(5)->get();
        return view('site.detail_product', compact('product', 'randomProducts')); // Trả về view product với danh sách sản phẩm
    }


    public function product($name)
    {
        // Tìm danh mục theo tên (name)
        $category = Category::where('name', $name)->firstOrFail();

        // Lấy tất cả sản phẩm thuộc danh mục
        $products = Product::where('category_id', $category->id)->paginate(20);

        // Lấy tất cả danh mục
        $categories = Category::all();

        // Tính tổng số lượng sản phẩm thuộc loại này
        $totalQuantity = $products->total();

        return view('site.product', compact('products', 'categories', 'category', 'totalQuantity'));
    }


}
