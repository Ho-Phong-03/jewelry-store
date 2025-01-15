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
                            <ul>
                                <li><a href="index.html">home</a></li>
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
        
        <!-- ================ Product Detail Start ===========-->
        <section class="product__details section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="product-details-tab">

                            <div id="img-1" class="img-zoom zoomWrapper">
                                <a href="#">
                                    <img id="zoom1" src="{{asset('../asset')}}/images/products/product1.jpg" alt="big-1">
                                </a>
                                <div class="zoomedImage"></div>
                            </div>

                            <div class="product__detail__navactive">
                                <div class="product__detail__sliders">
                                    <div class="box__detail__sliders">
                                        <div class="slider__detail__image"><a href="#"><img src="{{asset('../asset')}}/images/products/product1-1.jpg" alt=""></a></div>
                                        <div class="slider__detail__image"><a href="#"><img src="{{asset('../asset')}}/images/products/product1.jpg" alt=""></a></div>
                                        <div class="slider__detail__image"><a href="#"><img src="{{asset('../asset')}}/images/products/product1-1.jpg" alt=""></a></div>
                                        <div class="slider__detail__image"><a href="#"><img src="{{asset('../asset')}}/images/products/product1.jpg" alt=""></a></div>
                                        <div class="slider__detail__image"><a href="#"><img src="{{asset('../asset')}}/images/products/product1-1.jpg" alt=""></a></div>
                                        <div class="slider__detail__image"><a href="#"><img src="{{asset('../asset')}}/images/products/product1.jpg" alt=""></a></div>
                                    </div>
                                </div>
                                <div class="slider__detail__control">
                                    <a class="btn__slider__detail__control btn__detail__left" id="btn-detail-left">
                                        <i class="fa-solid fa-angle-left"></i>
                                    </a>
                                    <a class="btn__slider__detail__control btn__detail__right" id="btn-detail-right">
                                        <i class="fa-solid fa-angle-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="product__right">
                            <form action="#">
                                <h1>{{$product->name}}</h1>
                                <div class="product__nav">
                                    <ul>
                                        <li class="prev"><a href="#"><i class="fa fa-angle-left"></i></a></li>
                                        <li class="next"><a href="#"><i class="fa fa-angle-right"></i></a></li>
                                    </ul>
                                </div>
                                <div class=" product__ratting">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"> (customer review ) </a></li>
                                    </ul>
                                </div>
                                <div class="product__price">
                                    @if($product->old_price)
                                    
                                        <span class="old__price product__old__price">${{$product->old_price}}</span>
                                    @else
                                        <span class="old__price product__old__price">N/A</span>
                                    @endif

                                    @if($product->price)
                                    
                                        <span class="current__price product__current__price">{{$product->price}}</span>
                                    @else

                                    <span class="current__price product__current__price">Liên hệ</span>

                                    @endif
                                </div>
                                <div class="product__desc box__desc">
                                    <p>{{$product->description}} </p>
                                </div>

                                <div class="product__variant quantity">
                                    <label>quantity</label>
                                    <input min="1" max="100" value="1" type="number">
                                    <button class="button" type="submit">buy now</button>  
                                    
                                </div>
                                <div class="product__action">
                                    <ul>
                                        <li><a href="#" title="" data-original-title="Add to wishlist">+ Add to Wishlist</a></li>
                                        <li><a href="#" title="" data-original-title="Add to wishlist">+ Compare</a></li>
                                    </ul>
                                </div>
                                <div class="product__meta">
                                    <span>Category: <a href="#">Clothing</a></span>
                                </div>
                                
                            </form>
                            <div class="priduct_social">
                                <ul>
                                    <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-pinterest"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-google-plus-g"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>        
                                </ul>      
                            </div>

                        </div>
                    </div>
                </div>
            </div>    
        </section>


        <!-- ================ Product Info Start =============-->
        <section class="product__info__section section">
        <div class="container">   
            <div class="row">
                <div class="col-12">
                    <div class="product__inner">   
                        <div class="product__info__button">    
                            <ul class="nav" role="tablist">
                                <li>
                                    <a class="active" data-toggle="tab" href="#info" role="tab" aria-controls="info" aria-selected="false">Description</a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#reviews" role="tab" aria-controls="reviews" aria-selected="false">Reviews (1)</a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="info" role="tabpanel">
                                <div class="product__info__content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla.</p>
                                    <p>Pellentesque aliquet, sem eget laoreet ultrices, ipsum metus feugiat sem, quis fermentum turpis eros eget velit. Donec ac tempus ante. Fusce ultricies massa massa. Fusce aliquam, purus eget sagittis vulputate, sapien libero hendrerit est, sed commodo augue nisi non neque. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempor, lorem et placerat vestibulum, metus nisi posuere nisl, in accumsan elit odio quis mi. Cras neque metus, consequat et blandit et, luctus a nunc. Etiam gravida vehicula tellus, in imperdiet ligula euismod eget.</p>
                                </div>    
                            </div>

                            <div class="tab-pane fade" id="reviews" role="tabpanel">
                                <div class="reviews__wrapper">
                                    <h2>1 review for Donec eu furniture</h2>
                                    <div class="reviews__comment__box">
                                        <div class="comment__thmb">
                                            <img src="{{asset('../asset')}}/images/slider_image/comment1.jpg" alt="">
                                        </div>
                                        <div class="comment__text">
                                            <div class="reviews__meta">
                                                <div class="product__ratting star__rating">
                                                    <ul>
                                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <p><strong>admin </strong>- September 12, 2018</p>
                                                <span>roadthemes</span>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="comment__title">
                                        <h2>Add a review </h2>
                                        <p>Your email address will not be published.  Required fields are marked </p>
                                    </div>
                                    <div class="product__ratting mb-4 ratting">
                                        <h3>Your rating</h3>
                                        <ul>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product__review__form">
                                        <form action="#">
                                            <div class="row">
                                                <div class="col-12">
                                                    <label for="review__comment">Your review </label>
                                                    <textarea class="reating__text" name="comment" id="review-comment"></textarea>
                                                </div> 
                                                <div class="col-lg-6 col-md-6">
                                                    <label for="author">Name</label>
                                                    <input id="author" type="text">

                                                </div> 
                                                <div class="col-lg-6 col-md-6">
                                                    <label for="email">Email </label>
                                                    <input id="email" type="text">
                                                </div>  
                                            </div>
                                            <button type="submit">Submit</button>
                                        </form>   
                                    </div> 
                                </div>    
                            </div>
                        </div>
                    </div>     
                </div>
            </div>
        </div>    
        </section>

    </main>
    <!-- ==================== Main Area End =========================== -->

    <!-- =========== Product Bestselling Start ===========-->
    <section class="product__section border__section section">
        <div class="product__container container grid">
            <div class="product__area">
                <div class="product__bestselling">
                    <div class="product__bestselling__title">
                        <h2>Bestselling Products</h2>
                    </div>
                    <div class="btn__title">
                        <button class="pd__btn prev__arrow">
                            <i class="fa-solid fa-chevron-left"></i>
                        </button>
                        <button class="pd__btn next__arrow">
                            <i class="fa-solid fa-chevron-right"></i>
                        </button>
                    </div>
                </div>
                
                <div class="product__list__section ">
                    <div class="grid product__list__slider">
                        @foreach ($randomProducts as $randomProduct)
                            <article>
                                <div class="product__item">
                                    <div class="single__product">
                                        <div class="product__thumb">
                                            <a href="#" class="primary__img">
                                                <img src="{{asset('../asset')}}/images/slider_image/product1.jpg" alt="">
                                            </a>
                                            <a href="#" class="secondary__img">
                                                <img src="{{asset('../asset')}}/images/slider_image/product1-1.jpg" alt="">
                                            </a>
                                            <div class="quick__button" id="btn-quick">
                                                <a href="#">Quick view</a>
                                            </div>
                                        </div>
                                        <div class="product__content">
                                            <div class="tag__cate">
                                                <a href="#">Brand</a>
                                            </div>
                                            <a href="#" class="product__title">
                                                <h3 >
                                                    {{$randomProduct->name}}
                                                </h3>
                                            </a>
                                            <div class="price__box">
                                                
                                                @if($randomProduct->old_price)
                                    
                                                    <span class="old__price">${{$product->old_price}}</span>
                                                @else
                                                    <span class="old__price">N/A</span>
                                                @endif

                                                @if($randomProduct->price)
                                                
                                                    <span class="current__price">{{$product->price}}</span>
                                                @else

                                                    <span class="current__price">Liên hệ</span>

                                                @endif
                                            </div>
                                            <div class="product__hover">
                                                <div class="product__rating">
                                                    <ul class="product__rating__list">
                                                        <li>
                                                            <a href="#" class="product__rating__link">
                                                                <i class="fa-regular fa-star"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="product__rating__link">
                                                                <i class="fa-regular fa-star"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="product__rating__link">
                                                                <i class="fa-regular fa-star"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="product__rating__link">
                                                                <i class="fa-regular fa-star"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="product__rating__link">
                                                                <i class="fa-regular fa-star"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="product__desc">
                                                    <p>{{$randomProduct->description}}</p>
                                                </div>
                                                <div class="action__links">
                                                    <ul class="action__links__list">
                                                        <li>
                                                            <a href="" class="action__link ">
                                                                <i class="fa-regular fa-heart"></i>
                                                            </a>
                                                        </li>
                                                        <li class="add__to__cart">
                                                            <a href="" class="action__link">
                                                                Add to cart
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="" class="action__link">
                                                                <i class="fa-solid fa-sliders"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection