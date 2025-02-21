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
        $cart = session()->get('cart', []);
        if(empty($cart)) {
            return redirect()->route('products.index')->with('error', 'Your cart is empty');
        }
        
        $total = 0;
        $shipping = 100.00;
        foreach($cart as $item) {
            $total += $item['price'] * $item['quantity'];
        }
        $orderTotal = $total + $shipping;
        
        return view('site.checkout', compact('cart', 'total', 'shipping', 'orderTotal'));
    }

    public function processCheckout(Request $request)
    {
        $request->validate([
            'fullName' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'required|email',
            'address' => 'required|string|max:255',
        ]);

        // Here you would typically:
        // 1. Create order in database
        // 2. Process payment
        // 3. Clear cart
        // 4. Send confirmation email
        
        session()->forget('cart');
        return redirect()->route('home')->with('success', 'Order placed successfully!');
    }

    // Chi tiết sản phẩm
    public function detailProduct($id)
    {
        $product = Product::with('images')->findOrFail($id);
        $randomProducts = Product::inRandomOrder()->take(5)->get();
        return view('site.detail_product', compact('product', 'randomProducts'));
    }


    // Sản phẩm
    public function product(Request $request, $name = null)
    {
        if ($name) {
            // Kiểm tra nếu danh mục tồn tại
            $category = Category::where('name', $name)->first();
        } else {
            $category = null; // Đảm bảo không bị lỗi khi view sử dụng
        }
    
        $products = $category ? Product::where('category_id', $category->id) : Product::query();
    
        if ($request->has('keyword')) {
            $keyword = $request->input('keyword');
            $products->where(function ($query) use ($keyword) {
                $query->where('name', 'LIKE', "%{$keyword}%");
            });
        } else {
            $keyword = null;
        }
        
        $products = $products->paginate(20);
        $categories = Category::withCount('products')->get();
    
        return view('site.product', compact('products', 'categories', 'category', 'keyword', ));
    }
        


    //Tìm kiếm sản phẩm
    public function searchSuggestions(Request $request)
    {
        $keyword = $request->input('keyword');

        if (!$keyword || strlen($keyword) < 1) {
            return response()->json([]);

        }

        $products = Product::where('name', 'LIKE', "%{$keyword}%")
                            ->get(['id', 'name', 'image']);

        // Đảm bảo URL hình ảnh đầy đủ
        $products->transform(function($product) {
            $product->image = asset($product->image);
            return $product;
        });

        return response()->json($products);
    }


    public function addProductCart($id){
        $product = Product::find($id);
        $cart = session()->get('cart', []);
        if(isset($cart[$id])){
            $cart[$id]['quantity']++;
        }else{
            $cart[$id]=[
                'name' => $product->name,
                'quantity' => 1,
                'price' => $product->price,
                'image' => $product->image
            ];
        }
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'The product has been added to the cart');
    }

    public function removeCartItem($id){
        $cart = session()->get('cart', []);
        if(isset($cart[$id])){
            unset($cart[$id]);
            session()->put('cart', $cart);
            return redirect()->back()->with('success', 'The product has been deleted from the cart');
        }
    }

    public function updateCart(Request $request)
    {
        $cart = session()->get('cart', []);
        foreach($request->quantity as $id => $quantity)
        {
            if(isset($cart[$id]) && $quantity > 0)
            {
                $cart[$id]['quantity'] = $quantity;
            }
        }
        session()->put('cart', $cart);
        return redirect()->route('cart.index')->with('success', 'Successful update of shopping carts');
    }


}
