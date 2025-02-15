@extends('site/master')
@section('title', 'Home Page')
@section('content')
    <main class="main">
        <!--================= Slider Start ===================-->
        <section class="slider " id="slider">
            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{asset('../asset/users')}}/images/slider_image/slider_1.png" class="d-block w-100 " alt="...">
                        <div class="carousel-caption d-md-block container">
                            <p class="">exclusive offer -10% off this week</p>
                            <h1>dennis arrivals</h1>
                            <p class=" slider__price">
                                Starting At
                                <span>$1.220.00</span>
                            </p>
                            <a href="#" class="slider__btn">Shopping now</a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('../asset/users')}}/images/slider_image/slider-2.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('../asset/users')}}/images/slider_image/slider-3.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev d-none" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next d-none" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>

        <!--================= Banner Star ====================-->
        <section class="banner__section section" id="banner">
            <div class="banner_container container">
                <div class="single__banner grid">
                    <div class="banner__thumb">
                        <a href="#" class="banner__link">
                            <img src="{{asset('../asset/users')}}/images/slider_image/banner-1.jpg" alt="" class="banner_image">
                        </a>

                        <div class="banner__content">
                            <p>Design Creative</p>
                            <h2>Modern and Clean</h2>
                            <span>From $60.99 - Sale 20%</span>
                        </div>
                    </div>
                    <div class="banner__thumb">
                        <a href="#" class="banner__link">
                            <img src="{{asset('../asset/users')}}/images/slider_image/banner-2.jpg" alt="" class="banner_image">
                        </a>

                        <div class="banner__content">
                            <p>Bestselling Products</p>
                            <h2>Jewelry and Diamonds</h2>
                            <span>Only from $89.00</span>
                        </div>
                    </div>

                    <div class="banner__thumb">
                        <a href="#" class="banner__link">
                            <img src="{{asset('../asset/users')}}/images/slider_image/banner-2.jpg" alt="" class="banner_image">
                        </a>

                        <div class="banner__content">
                            <p>Bestselling Products</p>
                            <h2>Jewelry and Diamonds</h2>
                            <span>Only from $89.00</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--================= Product Start ====================-->
        <section class="product__section section">
            <div class="product__container container grid">
                <div class="product__area">
                    <div class="product__tab__button">
                        <ul class="product__button__list">
                            <li><a href="#" class="product__button active__product">Featured</a></li>
                            <li><a href="#" class="product__button ">New Arrivals</a></li>
                            <li><a href="#" class="product__button ">Onsale</a></li>
                        </ul>
                    </div>
                    <div class="product__list__section ">
                        <div class="grid product__list__slider">
                            @foreach ($products as $product) 
                                <article>
                                    <div class="product__item">
                                        <div class="single__product">
                                            <div class="product__thumb">
                                                <a href="{{route('showDetailProduct', ['id' => $product->id])}}" class="primary__img">
                                                    <img src="{{ asset('asset/users/images/products/' . $product->image) }}" alt="">
                                                </a>
                                                <a href="{{route('showDetailProduct', ['id' => $product->id])}}" class="secondary__img">
                                                    <img src="{{ asset('asset/users/images/products/' . $product->image_secondary) }}" alt="">
                                                </a>
                                                <div class="quick__button" id="btn-quick">
                                                    <a href="#" data-id=''>Quick view</a>
                                                </div>
                                            </div>
                                            <div class="product__content">
                                                <div class="tag__cate">
                                                    <a href="#">Brand</a>
                                                </div>
                                                <a href="{{route('showDetailProduct', ['id' => $product->id])}}" class="product__title">
                                                    <h3 >
                                                        {{$product->name}}
                                                    </h3>
                                                </a>
                                                <div class="price__box">
                                                    <span class="old__price">{{$product->old_price}}</span>
                                                    <span class="current__price">{{$product->price}}</span>
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
                                                        <p>{{$product->description}}</p>
                                                    </div>
                                                    <div class="action__links">
                                                        <ul class="action__links__list">
                                                            <li>
                                                                <a href="" class="action__link ">
                                                                    <i class="fa-regular fa-heart"></i>
                                                                </a>
                                                            </li>
                                                            <li class="add__to__cart">
                                                                <a href="{{route('addProductCart', ['id' => $product->id])}}" class="action__link">
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

        <!-- ================ Banner Start ===================-->
        <section class="banner__section">
            <div class="banner__fullwidth">
                <div class="banner__container container">
                    <div class="banner__items">
                        <div class="banner__win">
                            <div class="banner__text">
                                <p>Sale Off 20% All Products</p>
                                <h2>New Trending Collection</h2>
                                <span>We Believe That Good Design is Always in Season</span>
                                <a href="#" class="">Shopping now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

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
                            <?php for($i = 1; $i <= 10; $i++) { ?>
                            <article>
                                <div class="product__item">
                                    <div class="single__product">
                                        <div class="product__thumb">
                                            <a href="#" class="primary__img">
                                                <img src="{{asset('../asset/users')}}/images/slider_image/product1.jpg" alt="">
                                            </a>
                                            <a href="#" class="secondary__img">
                                                <img src="{{asset('../asset/users')}}/images/slider_image/product1-1.jpg" alt="">
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
                                                    Donec eu furniture
                                                </h3>
                                            </a>
                                            <div class="price__box">
                                                <span class="old__price">$86.00</span>
                                                <span class="current__price">$60.00</span>
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
                                                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Reiciendis, consequuntur.</p>
                                                </div>
                                                <div class="action__links">
                                                    <ul class="action__links__list">
                                                        <li>
                                                            <a href="" class="action__link ">
                                                                <i class="fa-regular fa-heart"></i>
                                                            </a>
                                                        </li>
                                                        <li class="add__to__cart">
                                                            <a href="{{route('addProductCart', ['id' => $product->id])}}" class="action__link">
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
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--============ Banner Footer Star ==================-->
        <section class="banner__section banner__footer section" id="banner">
            <div class="banner_container container">
                <div class="product__bestselling">
                    <div class="product__bestselling__title">
                        <h2>Monsta News</h2>
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
                <div class="single__banner banner__footer grid">
                    <?php for($i = 1; $i <= 3; $i++) { ?>
                    <div class="banner__thumb">
                        <a href="#" class="banner__link">
                            <img src="{{asset('../asset/users')}}/images/slider_image/banner-1.jpg" alt="" class="banner_image">
                        </a>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </section>

        <!--============ Newsletter Start ====================-->
        <section class="newsletter__section section">
        </section>

    </main>
@endsection
    