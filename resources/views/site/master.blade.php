<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('../asset/users') }}/fontawesome-free-6.5.2-web/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('../asset/users') }}/bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('../asset/users') }}/css/mobile_screen.css">
    <link rel="stylesheet" href="{{ asset('../asset/users') }}/css/styles.css">
    <link rel="stylesheet" href="{{ asset('../asset/users') }}/css/small_screen.css">
    <link rel="stylesheet" href="{{ asset('../asset/users') }}/css/desktop_screen.css">
    <link rel="stylesheet" href="{{ asset('css/pagination.css') }}">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    {{-- <div class="container mt-4">
        <h2 class="mb-3">Add To Shopping Cart</h2>
        @if(session('success'))
            <div class="alert alert-success">
                {{session('success')}}
            </div>
        @endif
    </div> --}}
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
                    <img src="{{ asset('../asset/users') }}/images/icons/menu-icon-bar.svg" alt=""
                        class="nav__item btn__toggle">
                </div>

                <a href="#" class="nav__logo">
                    <div class="nav__logo__image">
                        <img src="{{ asset('../asset/users') }}/images/logo/logo-image.svg" alt=""
                            class="nav__logo__img">
                    </div>
                    Bonney
                </a>

                <div class="nav__box__modal__menu" id="nav-modal-menu">
                    <div class="nav__menu" id="nav-menu">
                        <ul class="nav__list">
                            <li><a href="{{ route('showHomePage') }}"
                                    class="nav__link {{ request()->routeIs('showHomePage') ? 'active' : '' }}">Home</a>
                            </li>
                            @foreach ($categories as $category)
                                <!-- Duyệt qua danh mục -->
                                {{-- <li><a href="{{ route('showProduct', ['category' => $category->name]) }}" class="nav__link {{ request()->is('products/'.$category->slug) ? 'active' : '' }}">{{ $category->name }}</a></li> --}}
                                <li>
                                    <a href="{{ route('showProduct', ['category' => $category->name]) }}"
                                        class="nav__link {{ request()->is('products/' . $category->name) ? 'active' : '' }}">
                                        {{ $category->name }}
                                    </a>
                                </li>
                            @endforeach
                            <li><a href="#" class="nav__link">Contact</a></li>
                            <li><a href="#" class="nav__link">Introduction</a></li>
                        </ul>
                        <!-- Close Button -->
                        <div class="nav__menu__close" id="nav-close">
                            <i class="nav__close fa-solid fa-xmark"></i>
                        </div>
                    </div>
                </div>

                <div class="nav__menu__item menu__item">
                    <ul class="nav__list__menu__items">
                        <li>
                            <i class="header__btn__menu__search fa-solid fa-magnifying-glass"
                                id="header-btn-menu-search"></i>
                            <div class="nav__box__modal__search" id="nav-box-modal-search">
                                <div class="nav__modal__search" id="nav-modal-search">
                                    <form class="form__modal__search" id="modal-search"
                                        action="{{ route('showProduct') }}" method="GET">
                                        <input type="text" name="keyword" class="modal__inp__search"
                                            id="modal-inp-search" placeholder="Search..." autocomplete="off">
                                        <button type="submit" class="nav__modal__item" id="nav-btn-menu-search">
                                            <i class="btn__modal__search fa-solid fa-magnifying-glass"></i>
                                        </button>
                                        <!-- Gợi ý tìm kiếm -->
                                        <div id="search-suggestions" class="suggestions-box"></div>
                                    </form>
                                    <!-- Close Button -->
                                    <div class="modal__search__close" id="modal-search-close">
                                        <i class="nav__close fa-solid fa-xmark"></i>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="li__user">
                            <a href="#" class="nav__link__menu_item">
                                <img src="{{ asset('../asset/users') }}/images/icons/user-icon.svg" alt="img"
                                    class="nav__item btn__user">

                                <ul class="box__modal__user">
                                    <li class="title__modal__user">
                                        <h5>
                                            <span>Hi</span>
                                            <span>{{ auth()->user()->name }}</span>
                                        </h5>
                                    </li>
                                    <li class="box__logout">
                                        <div class="icon__modal__logout__user">
                                            <i class="fa-solid fa-arrow-right-from-bracket"></i>
                                        </div>
                                        <div class="text__modal__logout__user">
                                            <a href="{{ route('admin.login') }}">Logout</a>
                                        </div>
                                    </li>
                                </ul>
                            </a>

                        </li>
                        <li>
                            <div class="nav__link__menu__item" id="nav-btn-cart">
                                <img src="{{ asset('../asset/users') }}/images/icons/bag-icon.svg" alt="img"
                                    class="nav__item btn__bag">
                            </div>
                            <div class="nav__box__modal__cart" id="nav-box-modal-cart">
                                <div class="nav__modal__cart" id="nav-modal-cart">
                                    <div class="modal_cart__list">
                                        <div class="cart__item">
                                            <div class="cart__img">
                                                <a href="#">
                                                    <img src="{{ asset('../asset/users') }}/images/products/img-product-1.jpg"
                                                        alt="" class="cart__image">
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
                                                    <img src="{{ asset('../asset/users') }}/images/products/img-product-1.jpg"
                                                        alt="" class="cart__image">
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
                                            <a href="{{ route('showCart') }}" class="cart__link cart__link_view">View
                                                cart</a>
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
    @yield('content')

    <!-- ==================== Main Area End =========================== -->

    <!-- ==================== Footer Area Start ======================= -->
    <footer class="footer__widgets section">
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
                                        <a href="#"><img
                                                src="{{ asset('../asset/users') }}/images/slider_image/product1.jpg"
                                                alt=""></a>
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
                                        <a href="#"><img
                                                src="{{ asset('../asset/users') }}/images/slider_image/product1-1.jpg"
                                                alt=""></a>
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
                            <p>© 2021 <a href="index.html" class="text-uppercase">MONSTA</a>. Made with <i
                                    class="fa fa-heart"></i> by <a target="_blank"
                                    href="https://www.hasthemes.com">HasThemes</a></p>
                            <img src="assets/img/icon/papyel2.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <!-- ==================== Modal Area Start ======================= -->
    <section class="modal" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel"
        tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content modal__content" id="modal-content">
                <button type="button" class="btn__close" id="btn-close" data-bs-dismiss="modal"
                    aria-label="Close">
                    <i class="fa-solid fa-xmark"></i>
                </button>
                <div class="modal__body">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-5 col-md-5 col-sm-12">
                                <div class="modal__tab">
                                    <div class="box__image">
                                        <a href="#">
                                            <img src="{{ asset('asset/users/images/products/' . $product->image) }}"
                                                alt="">
                                            <img id="modal-product-image" src="" alt="">
                                        </a>
                                    </div>
                                    <div class="product__navactive">
                                        <div class="product__sliders">
                                            <div class="box__sliders">
                                                <div class="slider__image"><a href="#"><img
                                                            src="{{ asset('../asset/users') }}/images/products/product1-1.jpg"
                                                            alt=""></a></div>
                                                <div class="slider__image"><a href="#"><img
                                                            src="{{ asset('../asset/users') }}/images/products/product1.jpg"
                                                            alt=""></a></div>
                                                <div class="slider__image"><a href="#"><img
                                                            src="{{ asset('../asset/users') }}/images/products/product1-1.jpg"
                                                            alt=""></a></div>
                                                <div class="slider__image"><a href="#"><img
                                                            src="{{ asset('../asset/users') }}/images/products/product1.jpg"
                                                            alt=""></a></div>
                                                <div class="slider__image"><a href="#"><img
                                                            src="{{ asset('../asset/users') }}/images/products/product1-1.jpg"
                                                            alt=""></a></div>
                                                <div class="slider__image"><a href="#"><img
                                                            src="{{ asset('../asset/users') }}/images/products/product1.jpg"
                                                            alt=""></a></div>
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
                                        <h2 id="modal-product-name"></h2>
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
                                            <input min="0" max="100" step="1" value="1"
                                                type="number">
                                            <button type="submit">Add to cart</button>
                                        </form>
                                    </div>
                                    <div class="modal__description">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae, unde
                                            doloribus perferendis dolorum nisi ullam odio sequi error</p>
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


    <script src="{{ asset('../asset/users') }}/bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
    <script src="{{ asset('../asset/users') }}/js/main.js"></script>
    <script src="{{ asset('../asset/users') }}/js/desktop.js"></script>
    <script src="{{ asset('../asset/users') }}/js/scrollreveal.min.js"></script>
    <script>
        function changeMainImage(imageSrc) {
            document.getElementById("zoom1").src = imageSrc;
        }
    </script>

    <script>
        $(document).ready(function() {
            let timeout = null;

            $("#modal-inp-search").on("keyup", function() {
                let keyword = $(this).val().trim();
                let suggestions = $("#search-suggestions");
                
                if (keyword.length < 1) {
                    suggestions.hide();
                    return;
                }

                clearTimeout(timeout);
                timeout = setTimeout(function() {
                    $.ajax({
                        url: "{{ url('/search-suggestions') }}",
                        method: "GET", 
                        data: { keyword: keyword },
                        success: function(response) {
                            suggestions.empty();

                            if (response.length > 0) {
                                response.forEach(product => {
                                    suggestions.append(`
                                        <div class="suggestion-item" data-id="${product.id}" data-name="${product.name}">
                                            <img src="${product.image}" alt="${product.name}">
                                            <span>${product.name}</span>
                                        </div>
                                    `);
                                });
                                suggestions.show(); // Hiển thị khi có kết quả
                            } else {
                                suggestions.hide();
                            }
                        },
                        error: function() {
                            suggestions.hide();
                        }
                    });
                }, 300);
            });

            // Cập nhật sự kiện click
            $(document).on("click", ".suggestion-item", function() {
                let productName = $(this).data("name");
                $("#modal-inp-search").val(productName);
                $("#search-suggestions").hide();
                $("#modal-search").submit(); // Tự động submit form khi chọn sản phẩm
            });

            // Ẩn gợi ý khi click ra ngoài
            $(document).click(function(e) {
                if (!$(e.target).closest("#modal-search").length) {
                    $("#search-suggestions").hide();
                }
            });
        });
    </script>
    <script>
        document.getElementById("modal-inp-search").addEventListener("input", function() {
            let suggestionsBox = document.getElementById("search-suggestions");
            if (this.value.length > 0) {
                suggestionsBox.classList.add("active");
            } else {
                suggestionsBox.classList.remove("active");
            }
        });
    </script>

</body>

</html>
