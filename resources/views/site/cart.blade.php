@extends('site/master')
@section('title', 'Home Cart')
@section('content')
    <!-- ==================== Main Area Start ===========================-->
    <main class="main">
        <!-- ================ Breadcrumbs Area Start =========-->
        <section class="breadcrumbs__area product__bread">
            <div class="container">   
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb__content">
                            <h3>Shopping Cart</h3>
                            <ul>
                                <li><a href="{{route('home')}}">home</a></li>
                                <li>&gt;</li>
                                <li><a href="shop.html">shop</a></li>
                                <li>&gt;</li>
                                <li><a href="shop.html">Clothing</a></li>
                                <li>&gt;</li>
                                <li>product details</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>         
        </section>
        <!-- ================ Shopping Cart Area Start =========-->
        <section class="shopping__cart__section section">
            <div class="container">  
                <form action="{{route('cart.update')}}" method="post" > 
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <div class="table__desc">
                                <div class="cart__page table-responsive">
                                    <table class="cart__table">
                                        <thead>
                                            <tr>
                                                <th class="product_remove">Delete</th>
                                                <th class="product_thumb">Image</th>
                                                <th class="product_name">Product</th>
                                                <th class="product-price">Price</th>
                                                <th class="product_quantity">Quantity</th>
                                                <th class="product_total">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php 
                                                $total = 0; 
                                                $ship = 100;
                                            @endphp 
                                            
                                            @if (session('cart')) 
                                                @foreach (session('cart') as $id => $details) 
                                                    @php 
                                                        $subtotal = $details['price'] * $details['quantity']; 
                                                        $total += $subtotal;
                                                    @endphp
                                                    <tr>
                                                        <td class="product_remove"><a href="{{route('cart.remove', $id)}}" onclick="return confirm('Bạn có chắc chắn muốn xóa!');"><i class="fa-solid fa-trash-can"></i></a></td>
                                                        <td class="product_thumb"><a href="{{route('product.show', $id)}}"><img src="{{ asset('asset/users/images/products/' . $details['image']) }}" alt=""></a></td>
                                                        <td class="product_name"><a href="{{route('product.show', $id)}}">{{ $details['name'] }}</a></td>
                                                        <td class="product-price">${{ number_format($details['price'], 2) }}</td>
                                                        <td class="product_quantity"><label>Quantity</label> <input type="number" name="quantity[{{ $id }}]" value="{{ $details['quantity'] }}"></td>
                                                        <td class="product_total">${{ number_format($subtotal, 2) }}</td>
                                                    </tr>
                                                @endforeach
                                                @else
                                                    <tr>
                                                        <td colspan="6" class="text-center">Your cart is empty!</td>
                                                    </tr>
                                            @endif

                                        </tbody>
                                    </table>   
                                </div>  
                                <div class="cart__submit">
                                    <button type="submit">update cart</button>
                                </div>      
                            </div>
                        </div>
                    </div>
                    <!--coupon code area start-->
                    <div class="coupon__area">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="coupon__code left">
                                    <h3>Coupon</h3>
                                    <div class="coupon__inner">   
                                        <p>Enter your coupon code if you have one.</p>                                
                                        <input placeholder="Coupon code" type="text">
                                        <button type="submit">Apply coupon</button>
                                    </div>    
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="coupon__code right">
                                    <h3>Cart Totals</h3>
                                    <div class="coupon__inner">
                                        <div class="cart__subtotal">
                                            <p>Subtotal</p>
                                            <p class="cart__amount">${{ number_format($total, 2) }}</p>
                                        </div>
                                        <div class="cart__subtotal ">
                                            <p>Shipping</p>
                                            <p class="cart__amount"><span>Flat Rate:</span> ${{number_format($ship, 2)}}</p>
                                        </div>
                                        <a href="#">Calculate shipping</a>
    
                                        <div class="cart__subtotal">
                                            <p>Total</p>
                                            <p class="cart__amount total__cart">${{ number_format($total+$ship,2)}}</p>
                                        </div>
                                        <div class="checkout__btn">
                                            <a href="{{ route('checkout.index') }}">Proceed to Checkout</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--coupon code area end-->
                </form> 
            </div>     
        </section>

    </main>
    <!-- ==================== Main Area End =========================== -->
@endsection
    