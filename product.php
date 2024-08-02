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
        <!-- ================ Breadcrumbs Area Start =========-->
        <div class="breadcrumbs__area product__bread">
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
        </div>
        
        <!-- ================ Product Detail Start ===========-->
        <div class="product_details">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="product-details-tab">

                        <div id="img-1" class="zoomWrapper single-zoom">
                            <a href="#">
                                <img id="zoom1" src="assets/img/product/product1-big.jpg" data-zoom-image="assets/img/product/product1-big.jpg" alt="big-1">
                            </a>
                        </div>

                        <div class="single-zoom-thumb">
                            <ul class="s-tab-zoom owl-carousel single-product-active owl-loaded owl-drag" id="gallery_01">
                                
                                <div class="owl-stage-outer">
                                    <div class="owl-stage" style="transform: translate3d(-377px, 0px, 0px); transition: all; width: 1257px;">
                                        <div class="owl-item cloned" style="width: 110.667px; margin-right: 15px;">
                                            <li>
                                                <a href="#" class="elevatezoom-gallery active" data-update="" data-image="assets/img/product/product1-big.jpg" data-zoom-image="assets/img/product/product1-big.jpg">
                                                    <img src="assets/img/product/product13.jpg" alt="zo-th-1">
                                                </a>
                                            </li>
                                        </div>
                                        <div class="owl-item cloned" style="width: 110.667px; margin-right: 15px;">
                                            <li>
                                                <a href="#" class="elevatezoom-gallery active" data-update="" data-image="assets/img/product/product3-big.jpg" data-zoom-image="assets/img/product/product3-big.jpg">
                                                    <img src="assets/img/product/product4.jpg" alt="zo-th-1">
                                                </a>
                                            </li>
                                        </div>
                                        <div class="owl-item cloned" style="width: 110.667px; margin-right: 15px;">
                                            <li>
                                                <a href="#" class="elevatezoom-gallery active" data-update="" data-image="assets/img/product/product2-big.jpg" data-zoom-image="assets/img/product/product2-big.jpg">
                                                    <img src="assets/img/product/product2.jpg" alt="zo-th-1">
                                                </a>
                                            </li>
                                        </div>
                                        <div class="owl-item active" style="width: 110.667px; margin-right: 15px;">
                                            <li>
                                                <a href="#" class="elevatezoom-gallery active" data-update="" data-image="assets/img/product/product2-big.jpg" data-zoom-image="assets/img/product/product2-big.jpg">
                                                    <img src="assets/img/product/product2.jpg" alt="zo-th-1">
                                                </a>
                                            </li>
                                        </div>
                                        <div class="owl-item active" style="width: 110.667px; margin-right: 15px;">
                                            <li>
                                                <a href="#" class="elevatezoom-gallery active" data-update="" data-image="assets/img/product/product1-big.jpg" data-zoom-image="assets/img/product/product1-big.jpg">
                                                    <img src="assets/img/product/product13.jpg" alt="zo-th-1">
                                                </a>
                                            </li>
                                        </div>
                                        <div class="owl-item active" style="width: 110.667px; margin-right: 15px;">
                                            <li>
                                                <a href="#" class="elevatezoom-gallery active" data-update="" data-image="assets/img/product/product3-big.jpg" data-zoom-image="assets/img/product/product3-big.jpg">
                                                    <img src="assets/img/product/product4.jpg" alt="zo-th-1">
                                                </a>
                                            </li>
                                        </div>
                                        <div class="owl-item" style="width: 110.667px; margin-right: 15px;">
                                            <li>
                                                <a href="#" class="elevatezoom-gallery active" data-update="" data-image="assets/img/product/product2-big.jpg" data-zoom-image="assets/img/product/product2-big.jpg">
                                                    <img src="assets/img/product/product2.jpg" alt="zo-th-1">
                                                </a>
                                            </li>
                                        </div>
                                        <div class="owl-item cloned" style="width: 110.667px; margin-right: 15px;">
                                            <li>
                                                <a href="#" class="elevatezoom-gallery active" data-update="" data-image="assets/img/product/product2-big.jpg" data-zoom-image="assets/img/product/product2-big.jpg">
                                                    <img src="assets/img/product/product2.jpg" alt="zo-th-1">
                                                </a>
                                            </li>
                                        </div>
                                        <div class="owl-item cloned" style="width: 110.667px; margin-right: 15px;">
                                            <li>
                                                <a href="#" class="elevatezoom-gallery active" data-update="" data-image="assets/img/product/product1-big.jpg" data-zoom-image="assets/img/product/product1-big.jpg">
                                                    <img src="assets/img/product/product13.jpg" alt="zo-th-1">
                                                </a>
                                            </li>
                                        </div>
                                        <div class="owl-item cloned" style="width: 110.667px; margin-right: 15px;">
                                            <li>
                                                <a href="#" class="elevatezoom-gallery active" data-update="" data-image="assets/img/product/product3-big.jpg" data-zoom-image="assets/img/product/product3-big.jpg">
                                                    <img src="assets/img/product/product4.jpg" alt="zo-th-1">
                                                </a>
                                            </li>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-nav">
                                    <div class="owl-prev">
                                        <i class="fa fa-angle-left"></i>
                                    </div>
                                    <div class="owl-next">
                                        <i class="fa fa-angle-right"></i>
                                    </div>
                                </div>
                                <div class="owl-dots disabled"></div>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="product_d_right">
                       <form action="#">
                           
                            <h1>Donec eu furniture</h1>
                            <div class="product_nav">
                                <ul>
                                    <li class="prev"><a href="#"><i class="fa fa-angle-left"></i></a></li>
                                    <li class="next"><a href="#"><i class="fa fa-angle-right"></i></a></li>
                                </ul>
                            </div>
                            <div class=" product_ratting">
                                <ul>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"> (customer review ) </a></li>
                                </ul>
                            </div>
                            <div class="product_price">
                                <span class="old_price">$80.00</span>
                                <span class="current_price">$70.00</span>
                            </div>
                            <div class="product_desc">
                                <p>eget velit. Donec ac tempus ante. Fusce ultricies massa massa. Fusce aliquam, purus eget sagittis vulputate, sapien libero hendrerit est, sed commodo augue nisi non neque. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempor, lorem et placerat vestibulum, metus nisi posuere nisl, in </p>
                            </div>

                            <div class="product_variant quantity">
                                <label>quantity</label>
                                <input min="1" max="100" value="1" type="number">
                                <button class="button" type="submit">add to cart</button>  
                                
                            </div>
                            <div class=" product_d_action">
                               <ul>
                                   <li><a href="#" title="" data-original-title="Add to wishlist">+ Add to Wishlist</a></li>
                                   <li><a href="#" title="" data-original-title="Add to wishlist">+ Compare</a></li>
                               </ul>
                            </div>
                            <div class="product_meta">
                                <span>Category: <a href="#">Clothing</a></span>
                            </div>
                            
                        </form>
                        <div class="priduct_social">
                            <ul>
                                <li><a href="#" title="" data-original-title="facebook"><i class="fa fa-facebook"></i></a></li>           
                                <li><a href="#" title="" data-original-title="twitter"><i class="fa fa-twitter"></i></a></li>           
                                <li><a href="#" title="" data-original-title="pinterest"><i class="fa fa-pinterest"></i></a></li>           
                                <li><a href="#" title="" data-original-title="google +"><i class="fa fa-google-plus"></i></a></li>        
                                <li><a href="#" title="" data-original-title="linkedin"><i class="fa fa-linkedin"></i></a></li>        
                            </ul>      
                        </div>

                    </div>
                </div>
            </div>
        </div>    
        </div>


        <!-- ================ Product Info Start =============-->
        <div class="product_d_info">
        <div class="container">   
            <div class="row">
                <div class="col-12">
                    <div class="product_d_inner">   
                        <div class="product_info_button">    
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
                                <div class="product_info_content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla.</p>
                                    <p>Pellentesque aliquet, sem eget laoreet ultrices, ipsum metus feugiat sem, quis fermentum turpis eros eget velit. Donec ac tempus ante. Fusce ultricies massa massa. Fusce aliquam, purus eget sagittis vulputate, sapien libero hendrerit est, sed commodo augue nisi non neque. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempor, lorem et placerat vestibulum, metus nisi posuere nisl, in accumsan elit odio quis mi. Cras neque metus, consequat et blandit et, luctus a nunc. Etiam gravida vehicula tellus, in imperdiet ligula euismod eget.</p>
                                </div>    
                            </div>

                            <div class="tab-pane fade" id="reviews" role="tabpanel">
                                <div class="reviews_wrapper">
                                    <h2>1 review for Donec eu furniture</h2>
                                    <div class="reviews_comment_box">
                                        <div class="comment_thmb">
                                            <img src="assets/img/blog/comment2.jpg" alt="">
                                        </div>
                                        <div class="comment_text">
                                            <div class="reviews_meta">
                                                <div class="star_rating">
                                                    <ul>
                                                        <li><a href="#"><i class="ion-ios-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star"></i></a></li>
                                                    </ul>   
                                                </div>
                                                <p><strong>admin </strong>- September 12, 2018</p>
                                                <span>roadthemes</span>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="comment_title">
                                        <h2>Add a review </h2>
                                        <p>Your email address will not be published.  Required fields are marked </p>
                                    </div>
                                    <div class="product_ratting mb-10">
                                       <h3>Your rating</h3>
                                        <ul>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product_review_form">
                                        <form action="#">
                                            <div class="row">
                                                <div class="col-12">
                                                    <label for="review_comment">Your review </label>
                                                    <textarea name="comment" id="review_comment"></textarea>
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
        </div>


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



    <script src="./asset/bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
    <script src="./asset/js/main.js"></script>
    <script src="./asset/js/desktop.js"></script>

</body>
</html>