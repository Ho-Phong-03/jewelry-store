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
                                <li><a href="{{route('homePage')}}">home</a></li>
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
                <form action="#"> 
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
                                            <tr>
                                                <td class="product_remove"><a href="#"><i class="fa-solid fa-trash-can"></i></a></td>
                                                <td class="product_thumb"><a href="#"><img src="{{asset('../asset')}}/images/products/product1-1.jpg" alt=""></a></td>
                                                <td class="product_name"><a href="#">Handbag fringilla</a></td>
                                                <td class="product-price">£65.00</td>
                                                <td class="product_quantity"><label>Quantity</label> <input min="0" max="100" value="1" type="number"></td>
                                                <td class="product_total">£130.00</td>
                                            </tr>
    
                                            <tr>
                                                <td class="product_remove"><a href="#"><i class="fa-solid fa-trash-can"></i></a></td>
                                                <td class="product_thumb"><a href="#"><img src="{{asset('../asset')}}/images/products/product2.jpg" alt=""></a></td>
                                                <td class="product_name"><a href="#">Handbags justo</a></td>
                                                <td class="product-price">£90.00</td>
                                                <td class="product_quantity"><label>Quantity</label> <input min="0" max="100" value="1" type="number"></td>
                                                <td class="product_total">£180.00</td>
                                            </tr>

                                            <tr>
                                                <td class="product_remove"><a href="#"><i class="fa-solid fa-trash-can"></i></a></td>
                                                <td class="product_thumb"><a href="#"><img src="asset/images/products/product5.jpg" alt=""></a></td>
                                                <td class="product_name"><a href="#">Handbag elit</a></td>
                                                <td class="product-price">£80.00</td>
                                                <td class="product_quantity"><label>Quantity</label> <input min="0" max="100" value="1" type="number"></td>
                                                <td class="product_total">£160.00</td>
                                            </tr>
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
                                            <p class="cart__amount">£215.00</p>
                                        </div>
                                        <div class="cart__subtotal ">
                                            <p>Shipping</p>
                                            <p class="cart__amount"><span>Flat Rate:</span> £255.00</p>
                                        </div>
                                        <a href="#">Calculate shipping</a>
    
                                        <div class="cart__subtotal">
                                            <p>Total</p>
                                            <p class="cart__amount">£215.00</p>
                                        </div>
                                        <div class="checkout__btn">
                                            <a href="#">Proceed to Checkout</a>
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
    