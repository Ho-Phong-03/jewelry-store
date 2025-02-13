@extends('site/master')
@section('title', 'Product')
@section('content')
    <!-- ==================== Main Area Start ===========================-->
    <main class="main">
        <!-- ================ Application Product Start ======= -->
        <section class="application__section section">
            <div class="container">
                <div class="row">
                    <!-- ======= Product View Area ======= -->
                    <div class="col-12 col-sm-12 col-md-12 col-lg-9 col-xl-9 box__mini__product">
                        <!-- ================ Title Product Start ============= -->
                        <section class="products__section">
                            <div class="container">
                                <div class="category__products products ">
                                    <div class="sort__pagi__bar">
                                        <div class="row">
                                            <div class="col-12 col-sm-8 col-md-9 col-lg-10">
                                                <div class="box__view__mode">
                                                    <h1 class="conllection__title">
                                                        {{ $category->name ?? 'All products' }}
                                                    </h1>
                                                    <div class="d-none d-lg-inline-block hidden__products__quatity">
                                                        <span class="nots__product">
                                                            (
                                                            {{ $category ? $category->products->count() : $products->total() }}
                                                            sản phẩm )
                                                        </span>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="d-none d-md-block col-md-3 col-lg-2">
                                                <div class="box__product__arrangement">
                                                    <select name="sort-by" class="sort__by" id="sort-by">
                                                        <option value="1">Mặc định</option>
                                                        <option value="2">A -> Z</option>
                                                        <option value="3">Z -> A</option>
                                                        <option value="4">Giá tăng dần</option>
                                                        <option value="5">Giá giảm dần</option>
                                                        <option value="6">Hàng mới nhất</option>
                                                        <option value="7">Hàng cũ nhất</option>
                                                    </select>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <div class="product__area">
                            <div class="product__list__section ">
                                <div class="grid product__list__slider">
                                    @foreach ($products as $product)
                                        <article>
                                            <div class="product__item">
                                                <div class="single__product">
                                                    <div class="product__thumb">
                                                        <a href="product.html" class="primary__img">
                                                            <img src="{{ asset('asset/users/images/products/' . $product->image) }}"
                                                                alt="">
                                                                
                                                        </a>
                                                        <a href="detail_product.html" class="secondary__img">
                                                            <img src="{{ asset('asset/users/images/products/' . $product->image_secondary) }}"
                                                                alt="">
                                                        </a>
                                                        <div class="quick__button" id="btn-quick">
                                                            <a href="#" data-id='{{ $product->id }}'
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#exampleModalToggle">Quick view</a>
                                                        </div>
                                                    </div>
                                                    <div class="product__content">
                                                        <div class="tag__cate">
                                                            <a href="#">Brand</a>
                                                        </div>
                                                        <a href="#" class="product__title">
                                                            <h3>
                                                                {{ $product->name }}
                                                            </h3>
                                                        </a>
                                                        <div class="price__box">
                                                            <span class="old__price">{{ $product->old__price }}</span>
                                                            <span class="current__price">{{ $product->price }}</span>
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
                                                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                                                    Reiciendis, consequuntur.</p>
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

                    <!-- ======= Sidebar Product ========= -->
                    <div class="col-12 col-sm-12 col-md-12 col-lg-3 col-xl-3 box__navbar__mini">
                        <aside class="sidebar__product" id="sidebar-product">
                            <div class="aside__item">
                                <div class="search__box__1">
                                    <form class="form__modal__search" id="sidebar-search-form" action="{{ route('showProduct') }}" method="GET">
                                        <input type="text" 
                                               name="keyword" 
                                               class="modal__inp__search"
                                               id="sidebar-search-input" 
                                               placeholder="Search..." 
                                               autocomplete="off">
                                        <button type="submit" class="nav__modal__item">
                                            <i class="btn__modal__search fa-solid fa-magnifying-glass"></i>
                                        </button>
                                        <!-- Gợi ý tìm kiếm -->
                                        <div id="sidebar-search-suggestions" class="suggestions-box"></div>
                                    </form>
                                </div>
                            </div>
                            <aside class="aside__item sidebar__category collection__category">
                                <div class="aside__title">
                                    <h2 class="title__head">Danh mục</h2>
                                </div>
                                <div class="aside__content">
                                    <div class="nav__category">
                                        <ul class="nav__pills">

                                            @foreach ($categories as $category)
                                                <li class="nav__item category__item">
                                                    <a href="#" class="nav__link">
                                                        {{ $category->name }} ({{ $category->products->count() }})
                                                    </a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </aside>
                            <div class="aside__filter">
                                <div class="filer__conteiner">
                                    <aside class="aside__item filter__price">
                                        <div class="aside__title">
                                            <h2 class="title__head">Mức Giá</h2>
                                        </div>
                                        <div class="aside__content">
                                            <div id="ui-slider" class="ui__sider__corner__all">
                                                <div class="ui__sider__pange"></div>
                                                <div class="range__input">
                                                    <input type="range" class="range__min" min="0"
                                                        max="10000" value="2500" step="100">
                                                    <input type="range" class="range__max" min="0"
                                                        max="10000" value="7500" step="100">
                                                </div>
                                            </div>

                                            <div class="aside__price__input">
                                                <div class="fidle">
                                                    <span>Min</span>
                                                    <input type="number" class="input__min" id="input-min"
                                                        value="2500">
                                                </div>
                                                <span class="separator">-</span>
                                                <div class="fidle">
                                                    <span>Max</span>
                                                    <input type="number" class="input__max" id="input-max"
                                                        value="7500">
                                                </div>
                                            </div>
                                            <a href="#" class="btn__filter__value" id="filter-value">Lọc giá</a>
                                        </div>
                                    </aside>

                                    <aside class="aside__item filter__tag__style__1">
                                        <div class="aside__title">
                                            <h2 class="title__head">Màu sắc</h2>
                                        </div>
                                        <div class="aside__content filter__group">
                                            <ul class="box__filter__color grid">
                                                <li class="filter__item">
                                                    <span>
                                                        <label for="fa-color-1" class="filter__color">
                                                            <input type="checkbox" name="fa-color" value="Vang"
                                                                id="fa-color-1">
                                                            <span>Vàng</span>
                                                        </label>
                                                    </span>
                                                </li>
                                                <li class="filter__item">
                                                    <span>
                                                        <label for="fa-color-2" class="filter__color">
                                                            <input type="checkbox" name="fa-color" value="Do"
                                                                id="fa-color-2">
                                                            <span>Do</span>
                                                        </label>
                                                    </span>
                                                </li>
                                                <li class="filter__item">
                                                    <span>
                                                        <label for="fa-color-3" class="filter__color">
                                                            <input type="checkbox" name="fa-color" value="Trang"
                                                                id="fa-color-3">
                                                            <span>Trang</span>
                                                        </label>
                                                    </span>
                                                </li>
                                                <li class="filter__item">
                                                    <span>
                                                        <label for="fa-color-4" class="filter__color">
                                                            <input type="checkbox" name="fa-color" value="Nau"
                                                                id="fa-color-4">
                                                            <span>Nau</span>
                                                        </label>
                                                    </span>
                                                </li>
                                                <li class="filter__item">
                                                    <span>
                                                        <label for="fa-color-5" class="filter__color">
                                                            <input type="checkbox" name="fa-color" value="Dacam"
                                                                id="fa-color-5">
                                                            <span>Da cam</span>
                                                        </label>
                                                    </span>
                                                </li>
                                                <li class="filter__item">
                                                    <span>
                                                        <label for="fa-color-6" class="filter__color">
                                                            <input type="checkbox" name="fa-color" value="Hong"
                                                                id="fa-color-6">
                                                            <span>Hong</span>
                                                        </label>
                                                    </span>
                                                </li>
                                            </ul>
                                        </div>
                                    </aside>

                                    <aside class="aside__item filter__tag__style__1">
                                        <div class="aside__title">
                                            <h2 class="title__head">Kích thước</h2>
                                        </div>
                                        <div class="aside__content filter__group">
                                            <ul class="box__filter__size grid">
                                                <li class="filter__item">
                                                    <span>
                                                        <label for="size-xs" class="filter__size">
                                                            <input type="checkbox" class="inp__size" name="size-xs"
                                                                id="size-xs">
                                                            XS
                                                        </label>
                                                    </span>
                                                </li>
                                                <li class="filter__item">
                                                    <span>
                                                        <label for="size-s" class="filter__size">
                                                            <input type="checkbox" class="inp__size" name="size-s"
                                                                id="size-s">
                                                            S
                                                        </label>
                                                    </span>
                                                </li>
                                                <li class="filter__item">
                                                    <span>
                                                        <label for="size-m" class="filter__size">
                                                            <input type="checkbox" class="inp__size" name="size-m"
                                                                id="size-m">
                                                            M
                                                        </label>
                                                    </span>
                                                </li>
                                                <li class="filter__item">
                                                    <span>
                                                        <label for="size-l" class="filter__size">
                                                            <input type="checkbox" class="filter" name="size-l"
                                                                id="size-l">
                                                            L
                                                        </label>
                                                    </span>
                                                </li>
                                                <li class="filter__item">
                                                    <span>
                                                        <label for="size-xl" class="filter__size">
                                                            <input type="checkbox" class="inp__size" name="size-xl"
                                                                id="size-xl">
                                                            XL
                                                        </label>
                                                    </span>
                                                </li>
                                                <li class="filter__item">
                                                    <span>
                                                        <label for="size-xxl" class="filter__size">
                                                            <input type="checkbox" class="inp__size" name="size-xxl"
                                                                id="size-xxl">
                                                            XXL
                                                        </label>
                                                    </span>
                                                </li>
                                            </ul>
                                        </div>
                                    </aside>

                                    <aside class="aside__item">
                                        <div class="aside__title">
                                            <h2 class="title__head">Thương hiệu</h2>
                                        </div>
                                        <div class="aside__content filter__group">
                                            <ul class="box__filter__vendor">
                                                <li class="filter__item">
                                                    <label for="inp-vendor-1" class="filter__vendor">
                                                        <input type="checkbox" class="inp__vendor" name="vendor-1"
                                                            id="inp-vendor-1" value="Cartier">
                                                        Cartier
                                                    </label>
                                                </li>
                                                <li class="filter__item">
                                                    <label for="inp-vendor-2" class="filter__vendor">
                                                        <input type="checkbox" class="inp__vendor" name="vendor-2"
                                                            id="inp-vendor-2" value="Tiffany & Co">
                                                        Tiffany & Co
                                                    </label>
                                                </li>
                                                <li class="filter__item">
                                                    <label for="inp-vendor-3" class="filter__vendor">
                                                        <input type="checkbox" class="inp__vendor" name="vendor-3"
                                                            id="inp-vendor-3" value="Bvlgari">
                                                        Bvlgari
                                                    </label>
                                                </li>
                                            </ul>
                                        </div>
                                    </aside>

                                    <aside class="aside-item aside-mini-list-product">
                                        <div class="aside__title">
                                            <h2 class="title__head">Sản phẩm nổi bật</h2>
                                        </div>
                                        <div class="product-mini-lists">
                                            <div class="row row__noGutter">
                                                <div class="col-sm-12">
                                                    <div class="product__mini__item">
                                                        <div class="product__img">
                                                            <a href="#"><img
                                                                    src="{{ asset('../asset') }}/images/products/product1.jpg"
                                                                    alt=""></a>
                                                        </div>
                                                    </div>
                                                    <div class="product__info">
                                                        <h3><a href="#" class="product__name">Nhẫn ngọc trai</a>
                                                        </h3>
                                                        <div class="price__box">
                                                            <span class="special__price">Liên hệ</span>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="row row__noGutter">
                                                <div class="col-sm-12">
                                                    <div class="product__mini__item">
                                                        <div class="product__img">
                                                            <a href="#"><img
                                                                    src="{{ asset('../asset') }}/images/products/product1.jpg"
                                                                    alt=""></a>
                                                        </div>
                                                    </div>
                                                    <div class="product__info">
                                                        <h3><a href="#" class="product__name">Nhẫn ngọc trai</a>
                                                        </h3>
                                                        <div class="price__box">
                                                            <span class="special__price">Liên hệ</span>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="row row__noGutter">
                                                <div class="col-sm-12">
                                                    <div class="product__mini__item">
                                                        <div class="product__img">
                                                            <a href="#"><img
                                                                    src="{{ asset('../asset') }}/images/products/product1.jpg"
                                                                    alt=""></a>
                                                        </div>
                                                    </div>
                                                    <div class="product__info">
                                                        <h3><a href="#" class="product__name">Nhẫn ngọc trai</a>
                                                        </h3>
                                                        <div class="price__box">
                                                            <span class="special__price">Liên hệ</span>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                        </div>
                                    </aside>

                                </div>
                            </div>
                            <div class="banner__mini">
                                <a href="#">
                                    <img src="{{ asset('../asset') }}/images/products/aside_banner.webp" alt="">
                                </a>
                            </div>
                        </aside>
                    </div>

                </div>
                <aside id="open-filters" class="open__filters">
                    <i class="mini__bars fa-solid fa-align-right" id="mini-bars"></i>
                    <i class="mini__xmark fa-solid fa-xmark" id="mini-xmark"></i>
                </aside>
            </div>
        </section>


        <!-- ================  -->

        <!-- Hiển thị liên kết phân trang -->

        @php
            $currentPage = $products->currentPage();
            $lastPage = $products->lastPage();
            $startPage = max(1, $currentPage - 2); // Hiển thị tối đa 2 trang trước
            $endPage = min($lastPage, $currentPage + 2); // Hiển thị tối đa 2 trang sau
        @endphp

        <div class="custom-pagination">
            <ul class="pagination">
                <!-- Nút Previous -->
                @if ($currentPage > 1)
                    <li><a href="{{ $products->url($currentPage - 1) }}">Previous</a></li>
                @else
                    <li class="disabled"><span>Previous</span></li>
                @endif

                <!-- Trang đầu -->
                @if ($startPage > 1)
                    <li><a href="{{ $products->url(1) }}">1</a></li>
                    @if ($startPage > 2)
                        <li><span>...</span></li>
                    @endif
                @endif

                <!-- Các trang xung quanh -->
                @for ($i = $startPage; $i <= $endPage; $i++)
                    @if ($i == $currentPage)
                        <li class="active"><span>{{ $i }}</span></li>
                    @else
                        <li><a href="{{ $products->url($i) }}">{{ $i }}</a></li>
                    @endif
                @endfor

                <!-- Trang cuối -->
                @if ($endPage < $lastPage)
                    @if ($endPage < $lastPage - 1)
                        <li><span>...</span></li>
                    @endif
                    <li><a href="{{ $products->url($lastPage) }}">{{ $lastPage }}</a></li>
                @endif

                <!-- Nút Next -->
                @if ($currentPage < $lastPage)
                    <li><a href="{{ $products->url($currentPage + 1) }}">Next</a></li>
                @else
                    <li class="disabled"><span>Next</span></li>
                @endif
            </ul>
        </div>
    </main>

    <!-- ==================== Main Area End =========================== -->

@endsection
