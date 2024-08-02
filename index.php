<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./asset/fontawesome-free-6.5.2-web/css/all.min.css">
    <link rel="stylesheet" href="./asset/bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./asset/css/mobile_screen.css">
    <link rel="stylesheet" href="./asset/css/styles.css">
    <link rel="stylesheet" href="./asset/css/small_screen.css">
    <link rel="stylesheet" href="./asset/css/desktop_screen.css">
    
    


</head>
<body>
    <!-- ==================== Header Area Start =========================-->
    <header class="header" id="header">
        <!--================= Header Top ====================-->
        <nav class="nav__header__top">
            <div class="container">
                <ul class="nav__list__top grid">
                    <li>
                        <a href="#" class="nav__link__top">
                            <i class="icon__top fa-regular fa-envelope"></i>
                            demo@gmail.com
                        </a>
                    </li>
                    <li>
                        <div class="nav__link__top">
                            <i class="icon__top fa-regular fa-clock"></i>
                            <span>08:00 - 17:00</span>
                        </div>
                    </li>
                    <li>
                    <a href="#" class="nav__link__top">
                            <i class="icon__top fa-solid fa-phone"></i>
                            012 345 999
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

        <!--================= Header Bottom =================-->
        <nav class="nav__header" id="nav-header">
            <div class="nav__header__menu container">
                <!-- Toggle Button -->
                <div class="nav__toggle" id="nav-toggle">
                    <img src="./asset/images/icons/menu-icon-bar.svg" alt="" class="nav__item btn__toggle">
                </div> 

                <a href="#" class="nav__logo">
                    <div class="nav__logo__image">
                        <img src="./asset/images/logo/logo-image.svg" alt="" class="nav__logo__img">
                    </div>
                    Bonney
                </a>

                <div class="nav__box__modal__menu" id="nav-modal-menu">
                    <div class="nav__menu" id="nav-menu">
                        <ul class="nav__list">
                            <li><a href="#" class="nav__link active">Home</a></li>
                            <li><a href="#" class="nav__link">Necklaces</a></li>
                            <li><a href="#" class="nav__link">Earrings</a></li>
                            <li><a href="#" class="nav__link">Bracelets</a></li>
                            <li><a href="#" class="nav__link">Silver Rings</a></li>
                            <li><a href="#" class="nav__link">Contact</a></li>
                            <li><a href="#" class="nav__link">Introduction</a></li>
                        </ul>
                        <!-- Close Button -->
                        <div class="nav__menu__close" id="nav-close">
                            <i class="nav__close fa-solid fa-xmark"></i>
                        </div>
                    </div>
                </div>

                <div class="nav__menu__item menu__item" >
                    <ul class="nav__list__menu__items">
                        <li>
                            <i class="header__btn__menu__search fa-solid fa-magnifying-glass" id="header-btn-menu-search"></i>
                            <div class="nav__box__modal__search" id="nav-box-modal-search">
                                <div class="nav__modal__search" id="nav-modal-search">
                                    <form  class="form__modal__search" id="modal-search">
                                        <input type="text" name="modal__text__search" class="modal__inp__search" id="modal-inp-search" placeholder="search...">
                                        <button type="submit" class="nav__modal__item" id="nav-btn-menu-search">
                                            <i class=" btn__modal__search fa-solid fa-magnifying-glass"></i>
                                        </button>
                                        
                                    </form>
                                    <!-- Close Button -->
                                    <div class="modal__search__close" id="modal-search-close">
                                        <i class="nav__close fa-solid fa-xmark"></i>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#" class="nav__link__menu_item">
                                <img src="./asset/images/icons/user-icon.svg" alt="img" class="nav__item btn__user">
                            </a>
                        </li>
                        <li>
                            <div class="nav__link__menu__item" id="nav-btn-cart">
                                <img src="./asset/images/icons/bag-icon.svg" alt="img" class="nav__item btn__bag">
                            </div>
                            <div class="nav__box__modal__cart" id="nav-box-modal-cart">
                                <div class="nav__modal__cart" id="nav-modal-cart">
                                    <div class="modal_cart__list">
                                        <div class="cart__item">
                                            <div class="cart__img">
                                                <a href="#">
                                                    <img src="./asset/images/products/img-product-1.jpg" alt="" class="cart__image">
                                                </a>
                                            </div>
                                            <div class="cart__info">
                                                <a href="#" class="cart__name__product">Letraset Animal</a>
                                                <span class="quantity">Qty: 1</span>
                                                <span class="price__cart">$60.00</span>
                                            </div>
                                            <div class="cart__remove">
                                                <a href="#">
                                                    <i class="icon__cart__remove fa-solid fa-xmark"></i>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="cart__item">
                                            <div class="cart__img">
                                                <a href="#">
                                                    <img src="./asset/images/products/img-product-1.jpg" alt="" class="cart__image">
                                                </a>
                                            </div>
                                            <div class="cart__info">
                                                <a href="#" class="cart__name__product">Letraset Animal</a>
                                                <span class="quantity">Qty: 1</span>
                                                <span class="price__cart">$60.00</span>
                                            </div>
                                            <div class="cart__remove">
                                                <a href="#">
                                                    <i class="icon__cart__remove fa-solid fa-xmark"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cart__total">
                                        <span>Subtotal:</span>
                                        <span>$ 120.00</span>
                                    </div>
                                    <div class="mini__cart__footer">
                                        <div class="cart__btn view__cart">
                                            <a href="#" class="cart__link cart__link_view">View cart</a>
                                        </div>
                                        <div class="cart__btn view__checkout">
                                            <a href="#" class="cart__link cart__link_checkout">Checkout</a>
                                        </div>
                                    </div>
                                    <!-- Close Button -->
                                    <div class="modal__cart__close" id="modal-cart-close">
                                        <i class="nav__close fa-solid fa-xmark"></i>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                
            </div>
        </nav>
    </header>
    <!-- ==================== Header Area End ===========================-->


    <!-- ==================== Main Area Start ===========================-->
    <main class="main">
        <!--================= Slider Start ===================-->
        <section class="slider " id="slider">
            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-inner ">
                    <div class="carousel-item active">
                        <img src="./asset/images/slider_image/slider_1.png" class="d-block w-100 " alt="...">
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
                        <img src="./asset/images/slider_image/slider-2.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="./asset/images/slider_image/slider-3.jpg" class="d-block w-100" alt="...">
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
                            <img src="./asset/images/slider_image/banner-1.jpg" alt="" class="banner_image">
                        </a>

                        <div class="banner__content">
                            <p>Design Creative</p>
                            <h2>Modern and Clean</h2>
                            <span>From $60.99 - Sale 20%</span>
                        </div>
                    </div>
                    <div class="banner__thumb">
                        <a href="#" class="banner__link">
                            <img src="./asset/images/slider_image/banner-2.jpg" alt="" class="banner_image">
                        </a>

                        <div class="banner__content">
                            <p>Bestselling Products</p>
                            <h2>Jewelry and Diamonds</h2>
                            <span>Only from $89.00</span>
                        </div>
                    </div>

                    <div class="banner__thumb">
                        <a href="#" class="banner__link">
                            <img src="./asset/images/slider_image/banner-2.jpg" alt="" class="banner_image">
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

        <!--================= Product End ====================-->
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
                            <?php for($i = 1; $i <= 10; $i++) { ?>
                            <article>
                                <div class="product__item">
                                    <div class="single__product">
                                        <div class="product__thumb">
                                            <a href="#" class="primary__img">
                                                <img src="./asset/images/slider_image/product1.jpg" alt="">
                                            </a>
                                            <a href="#" class="secondary__img">
                                                <img src="./asset/images/slider_image/product1-1.jpg" alt="">
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
                            <?php } ?>
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
                                                <img src="./asset/images/slider_image/product1.jpg" alt="">
                                            </a>
                                            <a href="#" class="secondary__img">
                                                <img src="./asset/images/slider_image/product1-1.jpg" alt="">
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
                            <img src="./asset/images/slider_image/banner-1.jpg" alt="" class="banner_image">
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
    <!-- ==================== Main Area End =========================== -->

    
    <!-- ==================== Footer Area Start ======================= -->
    <footer class="footer__widgets">
        <div class="container">  
            <div class="footer__top">
                <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-8">
                            <div class="widgets__container contact__us">
                                <h3>About Monsta</h3>
                                <div class="footer__contact">
                                    <p>Address: Your address goes here.</p>
                                    <p>Phone: <a href="tel:0123456789">0123456789</a></p>
                                    <p>Email: demo@example.com</p>
                                    <ul>
                                        <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa-solid fa-square-rss"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-google-plus-g"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
                                    </ul>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6 col-sm-4 col-6">
                            <div class="widgets__container widget__menu">
                                <h3>Information</h3>
                                <div class="footer__menu">
                                    <ul>
                                        <li><a href="about.html">About Us</a></li>
                                        <li><a href="blog.html">blog</a></li>
                                        <li><a href="contact.html">Contact</a></li>
                                        <li><a href="services.html">Services</a></li>
                                        <li><a href="#">Sample Page</a></li>
                                        <li><a href="portfolio.html">Portfolio</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6 col-sm-5 col-6">
                            <div class="widgets__container widget__menu">
                                <h3>My Account</h3>
                                <div class="footer__menu">
                                    <ul>
                                        <li><a href="my-account.html">My Account</a></li>
                                        <li><a href="contact.html">Contact</a></li>
                                        <li><a href="wishlist.html">Wishlist</a></li>
                                        <li><a href="portfolio.html">Portfolio</a></li>
                                        <li><a href="checkout.html">Checkout</a></li>
                                        <li><a href="faq.html">Frequently Questions</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-7">
                            <div class="widgets__container product__widget">
                                <h3>Top Rated Products</h3>
                                <div class="simple__product">
                                    <div class="simple__product__items">
                                        <div class="simple__product__thumb">
                                            <a href="#"><img src="./asset/images/slider_image/product1.jpg" alt=""></a>
                                        </div>
                                        <div class="simple__product__content">
                                            <div class="tag__cate">
                                                <a href="#">Barnd</a>
                                            </div>
                                            <div class="product__name">
                                                <h3><a href="#">Donec eu animal</a></h3>
                                            </div>
                                            <div class="product__price">
                                                <span class="old__price">$86.00</span>
                                                <span class="current__price">$70.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="simple__product__items">
                                        <div class="simple__product__thumb">
                                            <a href="#"><img src="./asset/images/slider_image/product1-1.jpg" alt=""></a>
                                        </div>
                                        <div class="simple__product__content">
                                            <div class="tag__cate">
                                                <a href="#">Women</a>
                                            </div>
                                            <div class="product__name">
                                                <h3><a href="#">Dummy animal</a></h3>
                                            </div>
                                            <div class="product__price">
                                                <span class="old__price">$74.00</span>
                                                <span class="current__price">$69.00</span>
                                            </div>
                                        </div>
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="footer__middel">
                <div class="row">
                    <div class="col-12">
                        <div class="footer__middel__menu">
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Online Store</a></li>
                                <li><a href="#">Promotion</a></li>
                                <li><a href="#">Privacu Policy</a></li>
                                <li><a href="#">Terms Of Use</a></li>
                                <li><a href="#">Sitemap</a></li>
                                <li><a href="#">Support</a></li>
                                <li><a href="#">Contacts</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer__bottom">
                <div class="row">
                    <div class="col-12">
                        <div class="copyright__area">
                            <p>© 2021 <a href="index.html" class="text-uppercase">MONSTA</a>. Made with <i class="fa fa-heart"></i> by <a target="_blank" href="https://www.hasthemes.com">HasThemes</a></p>
                            <img src="assets/img/icon/papyel2.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>     
    </footer>


    <!-- ==================== Modal Area Start ======================= -->
    <section class="modal" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content modal__content" id="modal-content">
                <button type="button" class="btn__close" id="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fa-solid fa-xmark"></i>
                </button>
                <div class="modal__body">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-5 col-md-5 col-sm-12">
                                <div class="modal__tab">
                                    <div class="box__image">
                                        <a href="#">
                                            <img src="./asset/images/products/product1.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="product__navactive">
                                        <div class="sliders">
                                            <div class="box__sliders">
                                                <div class="slider__image"><a href="#"><img src="./asset/images/products/product1-1.jpg" alt=""></a></div>
                                                <div class="slider__image"><a href="#"><img src="./asset/images/products/product1.jpg" alt=""></a></div>
                                                <div class="slider__image"><a href="#"><img src="./asset/images/products/product1-1.jpg" alt=""></a></div>
                                                <div class="slider__image"><a href="#"><img src="./asset/images/products/product1.jpg" alt=""></a></div>
                                                <div class="slider__image"><a href="#"><img src="./asset/images/products/product1-1.jpg" alt=""></a></div>
                                                <div class="slider__image"><a href="#"><img src="./asset/images/products/product1.jpg" alt=""></a></div>
                                            </div>
                                        </div>
                                        <div class="slider__control">
                                            <a class="btn__slider__control btn__left" id="btn-pd-left">
                                                <i class="fa-solid fa-angle-left"></i>
                                            </a>
                                            <a class="btn__slider__control btn__right" id="btn-pd-right">
                                                <i class="fa-solid fa-angle-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-7 col-sm-12">
                                <div class="modal__right">
                                    <div class="modal__title">
                                        <h2>Donec eu furniture</h2>
                                    </div>
                                    <div class="modal__price">
                                        <span class="current__price new__price">$64.99</span>
                                        <span class="old__price">$78.99</span>
                                    </div>
                                    <div class="see__all">
                                        <a href="#">See all features</a>
                                    </div>
                                    <div class="modal__add__to__cart">
                                        <form action="#">
                                            <input min="0" max="100" step="2" value="1" type="number">
                                            <button type="submit">Add to cart</button>
                                        </form>
                                    </div>
                                    <div class="modal__description">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae, unde doloribus perferendis dolorum nisi ullam odio sequi error</p>
                                    </div>
                                    <div class="modal__social">
                                        <h2>Share this product</h2>
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
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== ScrollUp Area Start ========================== -->
    <section class="box__scrollup">
        <a href="#" class="scroll__up" id="scroll-up">
            <i class="fa-solid fa-angles-up"></i>
        </a>
    </section>


    <!-- <script src="./asset/bootstrap-5.0.2-dist/js/bootstrap.min.js"></script> -->
    <script src="./asset/js/main.js"></script>
    <script src="./asset/js/desktop.js"></script>

</body>
</html>