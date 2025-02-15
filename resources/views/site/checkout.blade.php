@extends('site/master')
@section('title', 'Home Check Out')
@section('content')
    <!-- ==================== Main Area Start ===========================-->
    <main class="main">
        <!-- ================ Breadcrumbs Area Start =========-->
        <section class="breadcrumbs__area product__bread">
            <div class="container">   
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb__content">
                            <h3>Checkout</h3>
                            <ul>
                                <li><a href="index.html">home</a></li>
                                <li>&gt;</li>
                                <li>checkout</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>         
        </section>
        <!-- ================ Shopping Cart Area Start =========-->
        <section class="Checkout__section section" id="accordion">
            <div class="container">
                <div class="checkout__form">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <form action="{{ route('processCheckout') }}" method="POST">
                                @csrf
                                <h3>Billing Details</h3>
                                <div class="row">
                                    <div class="col-lg-6 mb-20">
                                        <label>Full Name <span>*</span></label>
                                        <input type="text" name="fullName" id="full-name" value="{{old('fullName')}}" required>  
                                        @error('fullName')
                                            <small class="text-danger">{{$message}}</small>
                                        @enderror
                                    </div>
                                    <div class="col-lg-6 mb-20">
                                        <label>Phone<span>*</span></label>
                                        <input type="text" name="phone" id="phone" value="{{old('phone')}}"> 
                                        @error('phone')
                                            <small id="helpId" class="text-muted">{{$message}}</small>
                                        @enderror
                                    </div> 
                                    <div class="col-lg-6 mb-20">
                                        <label> Email<span>*</span></label>
                                        <input type="text" name="email" id="email" value="{{old('email')}}"> 
                                        @error('email')
                                            <small id="helpId" class="text-muted">{{$message}}</small>
                                        @enderror
                                    </div> 
                                    <div class="col-12 mb-20">
                                        <label>Address  <span>*</span></label>
                                        <input placeholder="House number and street name" type="text" name="address" id="address" value="{{old('address')}}">   
                                        @error('address')
                                            <small id="helpId" class="text-muted">{{$message}}</small>
                                        @enderror
                                    </div>
                                    <div class="col-12">
                                        <div class="order__notes">
                                            <label for="order__note">Order Notes</label>
                                            <textarea id="order-note" placeholder="Notes about your order, e.g. special notes for delivery." name="notes"></textarea>
                                        </div>    
                                    </div>     	    	    	    	    	    	    
                                </div>
                            </form>    
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <form action="#">    
                                <h3>Your order</h3> 
                                <div class="order__table table__responsive">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th>Product</th>
                                                <th>Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($cart as $id => $details)
                                            <tr>
                                                <td>{{ $details['name'] }} <strong> × {{ $details['quantity'] }}</strong></td>
                                                <td>${{ number_format($details['price'] * $details['quantity'], 2) }}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Shipping</th>
                                                <td><strong>${{ number_format($shipping, 2) }}</strong></td>
                                            </tr>
                                            <tr class="order__total">
                                                <th>Order Total</th>
                                                <td><strong>${{ number_format($orderTotal, 2) }}</strong></td>
                                            </tr>
                                        </tfoot>
                                    </table>     
                                </div>
                                <div class="payment__method">
                                    <div class="panel__default">
                                        <input id="payment-defult" name="check__method" type="radio" data-target="createp_account">
                                        <label for="payment-defult" data-toggle="collapse" data-target="#collapsedefult" aria-controls="collapsedefult">
                                            PayPal 
                                            <img src="{{asset('../asset')}}/images/products/papyel.png" alt="">
                                        </label>
                                    </div>
                                    <div class="order__button">
                                        <button type="submit">Proceed to PayPal</button> 
                                    </div>    
                                </div> 
                            </form>         
                        </div>
                    </div> 
                </div> 
            </div>       
        </section>
    </main>
    <!-- ==================== Main Area End =========================== -->
@endsection
