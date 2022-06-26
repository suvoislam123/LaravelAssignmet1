<x-frontend.layout.master>
    @slot('title')
    HomePage
    @endslot
 <main class="main">
    <div class="page-content">
        <section class="intro-section appear-animate">
            <div class="container">
                <div class="row grid">
                    <div class="grid-item col-xl-3 col-lg-4 height-x2 category-list d-lg-block d-none">
                        <ul class="menu menu-options vertical-menu category-menu appear-animate"
                            data-animation-options="{
                        'name': 'fadeInRightShorter',
                        'delay': '.2s'
                    }">
                            <li><a href="demo5-shop.html" class="menu-title">Browse Our Categories</a></li>
                            <li>
                                <a href="demo5-shop.html">
                                    <i class="d-icon-t-shirt1" style="
                                    font-size: 23px;
                                    margin-left: -1px;
                                    margin-right: 1rem;
                                "></i>Travel &amp; Clothing</a>
                                <div class="megamenu">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <h4 class="menu-title">Women’s Clothing</h4>
                                            <ul>
                                                <li><a href="demo5-shop.html">Bottoms</a></li>
                                                <li><a href="demo5-shop.html">Dresses</a></li>
                                                <li><a href="demo5-shop.html">Outwear</a></li>
                                                <li><a href="demo5-shop.html">Sleepwear</a></li>
                                                <li><a href="demo5-shop.html">Swimwear</a></li>
                                                <li><a href="demo5-shop.html">Tops</a></li>
                                                <li><a href="demo5-shop.html">Two-Piece Set</a></li>
                                                <li><a href="demo5-shop.html">Women's Accessories</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-4">
                                            <h4 class="menu-title">Men’s Clothing</h4>
                                            <ul>
                                                <li><a href="demo5-shop.html">Bottoms</a></li>
                                                <li><a href="demo5-shop.html">Men's Accessories</a></li>
                                                <li><a href="demo5-shop.html">Outdoors</a></li>
                                                <li><a href="demo5-shop.html">Outwear</a></li>
                                                <li><a href="demo5-shop.html">Sleepwear</a></li>
                                                <li><a href="demo5-shop.html">Swimwear</a></li>
                                                <li><a href="demo5-shop.html">Tops</a></li>
                                                <li><a href="demo5-shop.html">Underwear</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="menu-banner menu-banner3 banner banner-fixed">
                                                <figure>
                                                    <img src="{{ asset('ui/frontend') }}/images/menu/banner-3.jpg" alt="Banner" width="280"
                                                        height="374" />
                                                </figure>
                                                <div class="banner-content banner-date">
                                                    <h6
                                                        class=" text-white text-right font-weight-bold text-uppercase lh-1 mb-0">
                                                        20-22<sup>tm</sup>April</h6>
                                                </div>
                                                <div class="banner-content x-50 w-100 text-center">
                                                    <h4
                                                        class="banner-subtitle bg-primary d-inline-block mb-1 text-white lh-1 ls-normal text-uppercase font-weight-semi-bold">
                                                        Ultimate Sale</h4>
                                                    <h3
                                                        class="banner-title text-white text-uppercase font-weight-bold lh-1 ls-l mb-0">
                                                        Up To 70%</h3>
                                                    <p class="text-white font-weight-normal ls-normal mb-2">
                                                        Discount Selected Items</p>
                                                    <a href="demo5-shop.html"
                                                        class="btn btn-white btn-link btn-underline btn-icon-right btn-icon-right btn-icon-right">Shop
                                                        Now<i class="d-icon-arrow-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a href="{{ route('productpage') }}"><i class="d-icon-camera1"></i>Electronics</a>
                                <div class="megamenu">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <h4 class="menu-title">Computers</h4>
                                            <ul>
                                                <li><a href="demo5-shop.html">Riode</a></li>
                                                <li><a href="demo5-shop.html">Acer</a></li>
                                                <li><a href="demo5-shop.html">American Dreams</a></li>
                                                <li><a href="demo5-shop.html">Apple</a></li>
                                                <li><a href="demo5-shop.html">Arcade1UP</a></li>
                                                <li><a href="demo5-shop.html">Samsung</a></li>
                                                <li><a href="demo5-shop.html">HP</a></li>
                                                <li><a href="demo5-shop.html">Sonny</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-4">
                                            <h4 class="menu-title">Tables</h4>
                                            <ul>
                                                <li><a href="demo5-shop.html">Ipad</a></li>
                                                <li><a href="demo5-shop.html">Dell</a></li>
                                                <li><a href="demo5-shop.html">Lenovo</a></li>
                                                <li><a href="demo5-shop.html">Peach</a></li>
                                                <li><a href="demo5-shop.html">Macintosh</a></li>
                                                <li><a href="demo5-shop.html">5G</a></li>
                                                <li><a href="demo5-shop.html">Samsung</a></li>
                                                <li><a href="demo5-shop.html">Sonny</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="menu-banner menu-banner3 banner banner-fixed">
                                                <figure>
                                                    <img src="{{ asset('ui/frontend') }}/images/menu/banner-3.jpg" alt="Banner" width="280"
                                                        height="374" />
                                                </figure>
                                                <div class="banner-content banner-date">
                                                    <h6
                                                        class=" text-white text-right font-weight-bold text-uppercase lh-1 mb-0">
                                                        20-22<sup>tm</sup>April</h6>
                                                </div>
                                                <div class="banner-content x-50 w-100 text-center">
                                                    <h4
                                                        class="banner-subtitle bg-primary d-inline-block mb-1 text-white lh-1 ls-normal text-uppercase font-weight-semi-bold">
                                                        Ultimate Sale</h4>
                                                    <h3
                                                        class="banner-title text-white text-uppercase font-weight-bold lh-1 ls-l mb-0">
                                                        Up To 70%</h3>
                                                    <p class="text-white font-weight-normal ls-normal mb-2">
                                                        Discount Selected Items</p>
                                                    <a href="demo5-shop.html"
                                                        class="btn btn-white btn-link btn-underline btn-icon-right btn-icon-right">Shop
                                                        Now<i class="d-icon-arrow-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a href="demo5-shop.html"><i class="d-icon-officebag"></i>Backpacks &amp;
                                    Fashion bags</a>
                            </li>
                            <li>
                                <a href="demo5-shop.html"><i class="d-icon-gamepad1"></i>Gaming &amp;
                                    Accessories
                                </a>
                            </li>
                            <li><a href="demo5-shop.html"><i class="d-icon-basketball1"></i>Sporting Goods</a>
                            </li>
                            <li>
                                <a href="demo5-shop.html"><i class="d-icon-desktop"></i>Computer
                                </a>
                            </li>
                            <li>
                                <a href="demo5-shop.html"><i class="d-icon-cook"></i>Home &amp; Kitchen</a>
                            </li>
                            <li><a href="demo5-shop.html" class="menu-title">Today Coupon Deals</a>
                            </li>
                            <li>
                                <a href="demo5-shop.html">
                                    <i class="d-icon-card"></i>Backpacks &amp; Fashion bags
                                </a>
                            </li>
                            <li>
                                <a href="demo5-shop.html">
                                    <i class="d-icon-card"></i>Daily Deals
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="grid-item col-xl-6 col-lg-5 col-md-8 height-x2">
                        <div class="intro-slider  owl-carousel owl-theme row owl-dot-inner owl-dot-dark owl-full-height animation-slider cols-1 appear-animate"
                            data-animation="{
                            'name': 'fadeIn',
                            'delay': '.2s'
                        }" data-owl-options="{
                            'items': 1,
                            'nav': false,
                            'dots': true,
                            'loop': true,
                            'autoplay': false,
                            'animateIn': 'fadeInUp',
                            'animateOut': 'fadeOutRight'
                        }">
                            <div class="intro-slide1 banner banner-fixed banner-radius"
                                style="background-color: #f6f5f7;">
                                <figure>
                                    <img src="{{ asset('ui/frontend') }}/images/demos/demo5/slides/1.jpg" width="580" height="508"
                                        alt="banner" />
                                </figure>
                                <div class="banner-content y-50">
                                    <h4 class="banner-subtitle text-uppercase font-weight-normal ls-normal slide-animate"
                                        data-animation-options="{'name': 'fadeInLeftShorter', 'duration': '1s'}">
                                        <span class="text-primary font-weight-bold">01.&nbsp;&nbsp;</span>BEST
                                        SELLERS STORE</h4>
                                    <h3 class="banner-title font-weight-bold ls-md slide-animate"
                                        data-animation-options="{'name': 'blurIn', 'delay': '.4s', 'duration': '1s'}">
                                        Our greatest hits <br />for women</h3>
                                    <p class="font-weight-normal ls-normal lh-1 text-uppercase text-dark mb-5 slide-animate"
                                        data-animation-options="{'name': 'fadeInUpShorter', 'delay': '.7s', 'duration': '1s'}">
                                        Starting At <strong class="text-primary">$24.00</strong></p>
                                    <a href="demo5-shop.html"
                                        class="btn btn-dark btn-sm btn-rounded slide-animate"
                                        data-animation-options="{'name': 'fadeInUpShorter', 'delay': '.9s', 'duration': '1s'}">Shop
                                        now</a>
                                </div>
                            </div>
                            <div class="intro-slide2 banner banner-fixed banner-radius"
                                style="background-color: #e4e8ec;">
                                <figure>
                                    <img src="{{ asset('ui/frontend') }}/images/demos/demo5/slides/2.jpg" width="580" height="508"
                                        alt="banner" />
                                </figure>
                                <div class="banner-content y-50">
                                    <div class="slide-animate" data-animation-options="{
                                        'name': 'fadeInLeftShorter',
                                        'delay': '.2s'
                                    }">
                                        <h4 class="banner-subtitle text-uppercase font-weight-normal ls-normal">
                                            <span class="text-primary font-weight-bold">02.&nbsp;</span>BEST
                                            SELLERS STORE</h4>
                                        <h3 class="banner-title font-weight-bold ls-md mb-2 slide-animate"
                                            data-animation-options="{
                                            'name': 'fadeInLeftShorter',
                                            'delay': '.2s'
                                        }">Big Sale <br />for women</h3>
                                        <p class="text-uppercase text-dark ml-1">
                                            Up To<strong
                                                class="text-primary ml-1 mr-1">$24.00</strong><strong>Off</strong>
                                        </p>
                                        <a class="btn btn-white btn-sm btn-rounded btn-shadow"
                                            href="demo5-shop.html">Shop now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="intro-slide3 banner banner-fixed banner-radius"
                                style="background-color: #1d1b1a;">
                                <figure>
                                    <img src="{{ asset('ui/frontend') }}/images/demos/demo5/slides/3.jpg" width="580" height="508"
                                        alt="Banner" />
                                </figure>
                                <div class="banner-content y-50">
                                    <h4 class="banner-subtitle text-uppercase text-white font-weight-normal ls-normal slide-animate"
                                        data-animation-options="{'name': 'fadeInUpShorter', 'duration': '1s'}">
                                        <span class="text-primary font-weight-bold">03.&nbsp;</span>BEST SELLERS
                                        STORE</h4>
                                    <h3 class="banner-title font-weight-bold text-white ls-md slide-animate"
                                        data-animation-options="{'name': 'fadeInUpShorter', 'delay': '.4s', 'duration': '1s'}">
                                        Fashionable <br />for men's</h3>
                                    <p class="font-weight-normal ls-normal lh-1 text-uppercase text-white mb-5 slide-animate"
                                        data-animation-options="{'name': 'fadeInUpShorter', 'delay': '.6s', 'duration': '1s'}">
                                        Starting At <strong class="text-primary">$24.00</strong></p>
                                    <a href="demo5-shop.html"
                                        class="btn btn-white btn-outline btn-sm btn-rounded slide-animate"
                                        data-animation-options="{'name': 'fadeInUpShorter', 'delay': '.8s', 'duration': '1s'}">Shop
                                        now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid-item col-lg-3 col-md-4 col-sm-6 height-x1">
                        <div class="intro-banner intro-banner1 banner banner-fixed banner-radius 
                            overlay-dark appear-animate" style="background-color: #eeeeee;"
                            data-animation-options="{
                            'name': 'fadeInLeftShorter',
                            'delay': '.2s'
                        }">
                            <a href="#">
                                <figure>
                                    <img src="{{ asset('ui/frontend') }}/images/demos/demo5/banners/1.jpg" width="280" height="241"
                                        alt="banner" />
                                </figure>
                            </a>
                            <div class="banner-content">
                                <h4 class="banner-subtitle text-uppercase font-weight-normal ls-s">
                                    New Arrivals</h4>
                                <h3 class="banner-title font-weight-normal text-capitalize ls-md">Spring
                                    Essentials</h3>
                                <a href="demo5-shop.html"
                                    class="btn btn-dark btn-link btn-underline btn-icon-right">Shop Now<i
                                        class="d-icon-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="grid-item col-lg-3 col-md-4 col-sm-6 height-x1">
                        <div class="intro-banner intro-banner2 banner banner-fixed banner-radius 
                            overlay-dark appear-animate" style="background-color: #e0dfde;"
                            data-animation-options="{
                            'name': 'fadeInLeftShorter',
                            'delay': '.2s'
                        }">
                            <a href="#">
                                <figure>
                                    <img src="{{ asset('ui/frontend') }}/images/demos/demo5/banners/2.jpg" width="280" height="241"
                                        alt="banner" />
                                </figure>
                            </a>
                            <div class="banner-content y-50">
                                <h3 class="banner-title ls-m font-weight-normal mb-5">
                                    <strong class="text-uppercase">Cosmetics</strong><br />Collection
                                </h3>
                                <a href="demo5-shop.html"
                                    class="btn btn-link btn-underline btn-icon-right mb-1">Shop Now<i
                                        class="d-icon-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="grid-item col-lg-6 col-md-4 height-x1">
                        <div class="intro-banner intro-banner3 banner banner-fixed banner-radius 
                            overlay-light appear-animate" style="background-color: #3a4146;"
                            data-animation-options="{
                            'name': 'fadeInUpShorter',
                            'delay': '.2s'
                        }">
                            <a href="#">
                                <figure>
                                    <img src="{{ asset('ui/frontend') }}/images/demos/demo5/banners/3.jpg" width="580" height="241"
                                        alt="banner" />
                                </figure>
                            </a>
                            <div class="banner-content y-50">
                                <h4 class="banner-subtitle text-uppercase font-weight-bold text-primary">BLACK
                                    FRIDAY SALE</h4>
                                <h3 class="banner-title text-white lh-1 font-weight-bold">Fingerprints Padlock
                                </h3>
                                <a href="demo5-shop.html"
                                    class="btn btn-white btn-link btn-underline btn-icon-right">Shop
                                    Now<i class="d-icon-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="grid-item col-lg-3 col-md-4 col-sm-6 height-x1">
                        <div class="intro-banner intro-banner4 banner banner-fixed banner-radius h-100 
                            overlay-dark appear-animate" style="background-color: #fef0e3;"
                            data-animation-options="{
                            'name': 'fadeInUpShorter',
                            'delay': '.2s'
                        }">
                            <figure>
                                <img src="{{ asset('ui/frontend') }}/images/demos/demo5/banners/4.jpg" width="580" height="241"
                                    alt="banner" />
                            </figure>
                            <div class="banner-content w-100 x-50 y-50 text-center pl-2 pr-2">
                                <h3 class="banner-title ls-m text-capitalize font-weight-bold">Our Brands</h3>
                                <p class="mb-0 text-uppercase ls-m">
                                    <a href="#">New York</a> - <a href="#">Paris</a> - <a
                                        href="#">Barcelona</a><br />
                                    <a href="#">Milan</a> - <a href="#">Rome</a> - <a href="#">London</a> - <a
                                        href="#">Dubai</a><br />
                                    <a href="#">Moscow</a> - <a href="#">Tokyo</a> - <a
                                        href="#">Shanghai</a><br />
                                    <a href="#">Mumbai</a> - <a href="#">Melbourne</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="grid-item col-lg-3 col-md-4 col-sm-6 height-x1">
                        <div class="intro-banner intro-banner5 banner banner-fixed banner-radius 
                            overlay-dark appear-animate" style="background-color: #f3f5f3;"
                            data-animation-options="{
                            'name': 'fadeInUpShorter',
                            'delay': '.2s'
                        }">
                            <a href="#">
                                <figure>
                                    <img src="{{ asset('ui/frontend') }}/images/demos/demo5/banners/5.jpg" width="280" height="241"
                                        alt="banner" />
                                </figure>
                            </a>
                            <div class="banner-content">
                                <h4 class="banner-subtitle text-uppercase font-weight-normal ls-s">
                                    20% Off</h4>
                                <h3 class="banner-title ls-m font-weight-normal">Kids Store</h3>
                                <a href="demo5-shop.html" class="btn btn-link btn-underline btn-icon-right">Shop
                                    Now<i class="d-icon-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="grid-space col-1"></div>
                </div>
            </div>
        </section>

        <section class="service-list mt-10">
            <div class="container">
                <div class="owl-carousel owl-theme row cols-lg-3 cols-sm-2 cols-1" data-owl-options="{
                        'items': 3,
                        'nav': false,
                        'dots': false,
                        'loop': true,
                        'autoplay': true,
                        'autoplayTimeout': 5000,
                        'responsive': {
                            '0': {
                                'items': 1
                            },
                            '576': {
                                'items': 2
                            },
                            '768': {
                                'items': 3,
                                'loop': false
                            }
                        }
                    }">
                    <div class="icon-box icon-box-side icon-box1 appear-animate" data-animation-options="{
                            'name': 'fadeInRightShorter',
                            'delay': '.3s'
                        }">
                        <i class="icon-box-icon d-icon-truck"></i>
                        <div class="icon-box-content">
                            <h4 class="icon-box-title text-capitalize ls-normal">Free Shipping &amp; Return
                            </h4>
                            <p class="ls-s">Free shipping on orders over $99</p>
                        </div>
                    </div>

                    <div class="icon-box icon-box-side icon-box2 appear-animate" data-animation-options="{
                            'name': 'fadeInRightShorter',
                            'delay': '.4s'
                        }">
                        <i class="icon-box-icon d-icon-service"></i>
                        <div class="icon-box-content">
                            <h4 class="icon-box-title text-capitalize ls-normal">Customer Support 24/7</h4>
                            <p class="ls-s">Instant access to perfect support</p>
                        </div>
                    </div>

                    <div class="icon-box icon-box-side icon-box3 appear-animate" data-animation-options="{
                            'name': 'fadeInRightShorter',
                            'delay': '.5s'
                        }">
                        <i class="icon-box-icon d-icon-secure"></i>
                        <div class="icon-box-content">
                            <h4 class="icon-box-title text-capitalize ls-normal">100% Secure Payment</h4>
                            <p class="ls-s">We ensure secure payment!</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="mt-10 pt-7 mb-8 appear-animate" data-animation-options="{
            'name': 'fadeIn',
            'delay': '.2s'
        }">
            <div class="container">
                <h2 class="title title-simple title-center">Featured Products</h2>
                <div class="row cols-lg-4 cols-md-3 cols-2">
                    <div class="product text-center">
                        <figure class="product-media" style="background-color: #f7f8fa;">
                            <a href="demo5-product.html">
                                <img src="{{ asset('ui/frontend') }}/images/demos/demo5/products/1.jpg" alt="Blue Pinafore Denim Dress"
                                    width="280" height="280">
                            </a>
                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                    data-target="#addCartModal" title="Add to cart"><i
                                        class="d-icon-bag"></i></a>
                                <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i
                                        class="d-icon-heart"></i></a>
                            </div>
                            <div class="product-action">
                                <a href="#" class="btn-product btn-quickview" title="Quick View">Quick View</a>
                            </div>
                        </figure>
                        <div class="product-details">
                            <div class="product-cat">
                                <a href="demo5-shop.html">Shoes</a>
                            </div>
                            <h3 class="product-name">
                                <a href="demo5-product.html">White Leather shoes</a>
                            </h3>
                            <div class="product-price">
                                <span class="price">$230.99</span>
                            </div>
                            <div class="ratings-container">
                                <div class="ratings-full">
                                    <span class="ratings" style="width:60%"></span>
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <a href="demo5-product.html" class="rating-reviews">( 6 reviews )</a>
                            </div>
                        </div>
                    </div>
                    <div class="product text-center">
                        <figure class="product-media" style="background-color: #f7f8fa;">
                            <a href="demo5-product.html">
                                <img src="{{ asset('ui/frontend') }}/images/demos/demo5/products/2.jpg" alt="Blue Pinafore Denim Dress"
                                    width="280" height="280">
                            </a>
                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                    data-target="#addCartModal" title="Add to cart"><i
                                        class="d-icon-bag"></i></a>
                                <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i
                                        class="d-icon-heart"></i></a>
                            </div>
                            <div class="product-action">
                                <a href="#" class="btn-product btn-quickview" title="Quick View">Quick View</a>
                            </div>
                        </figure>
                        <div class="product-details">
                            <div class="product-cat">
                                <a href="demo5-shop.html">Watch</a>
                            </div>
                            <h3 class="product-name">
                                <a href="demo5-product.html">Brown Strap Wrist Watch</a>
                            </h3>
                            <div class="product-price">
                                <span class="price">$230.99</span>
                            </div>
                            <div class="ratings-container">
                                <div class="ratings-full">
                                    <span class="ratings" style="width:60%"></span>
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <a href="demo5-product.html" class="rating-reviews">( 6 reviews )</a>
                            </div>
                        </div>
                    </div>
                    <div class="product text-center">
                        <figure class="product-media" style="background-color: #f7f8fa;">
                            <a href="demo5-product.html">
                                <img src="{{ asset('ui/frontend') }}/images/demos/demo5/products/3.jpg" alt="Blue Pinafore Denim Dress"
                                    width="280" height="280">
                            </a>
                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                    data-target="#addCartModal" title="Add to cart"><i
                                        class="d-icon-bag"></i></a>
                                <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i
                                        class="d-icon-heart"></i></a>
                            </div>
                            <div class="product-action">
                                <a href="#" class="btn-product btn-quickview" title="Quick View">Quick View</a>
                            </div>
                        </figure>
                        <div class="product-details">
                            <div class="product-cat">
                                <a href="demo5-shop.html">Watch</a>
                            </div>
                            <h3 class="product-name">
                                <a href="demo5-product.html">Men's Black Wrist Watch</a>
                            </h3>
                            <div class="product-price">
                                <span class="price">$230.99</span>
                            </div>
                            <div class="ratings-container">
                                <div class="ratings-full">
                                    <span class="ratings" style="width:60%"></span>
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <a href="demo5-product.html" class="rating-reviews">( 6 reviews )</a>
                            </div>
                        </div>
                    </div>
                    <div class="product text-center">
                        <figure class="product-media" style="background-color: #f7f8fa;">
                            <a href="demo5-product.html">
                                <img src="{{ asset('ui/frontend') }}/images/demos/demo5/products/4.jpg" alt="Blue Pinafore Denim Dress"
                                    width="280" height="280">
                            </a>
                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                    data-target="#addCartModal" title="Add to cart"><i
                                        class="d-icon-bag"></i></a>
                                <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i
                                        class="d-icon-heart"></i></a>
                            </div>
                            <div class="product-action">
                                <a href="#" class="btn-product btn-quickview" title="Quick View">Quick View</a>
                            </div>
                        </figure>
                        <div class="product-details">
                            <div class="product-cat">
                                <a href="demo5-shop.html">Electronics</a>
                            </div>
                            <h3 class="product-name">
                                <a href="demo5-product.html">Soft Sound Maker</a>
                            </h3>
                            <div class="product-price">
                                <span class="price">$230.99</span>
                            </div>
                            <div class="ratings-container">
                                <div class="ratings-full">
                                    <span class="ratings" style="width:60%"></span>
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <a href="demo5-product.html" class="rating-reviews">( 6 reviews )</a>
                            </div>
                        </div>
                    </div>
                    <div class="product text-center">
                        <figure class="product-media" style="background-color: #f7f8fa;">
                            <a href="demo5-product.html">
                                <img src="{{ asset('ui/frontend') }}/images/demos/demo5/products/5.jpg" alt="Blue Pinafore Denim Dress"
                                    width="280" height="280">
                            </a>
                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                    data-target="#addCartModal" title="Add to cart"><i
                                        class="d-icon-bag"></i></a>
                                <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i
                                        class="d-icon-heart"></i></a>
                            </div>
                            <div class="product-action">
                                <a href="#" class="btn-product btn-quickview" title="Quick View">Quick View</a>
                            </div>
                        </figure>
                        <div class="product-details">
                            <div class="product-cat">
                                <a href="demo5-shop.html">Cosmetics</a>
                            </div>
                            <h3 class="product-name">
                                <a href="demo5-product.html">Women's Face Cream</a>
                            </h3>
                            <div class="product-price">
                                <span class="price">$230.99</span>
                            </div>
                            <div class="ratings-container">
                                <div class="ratings-full">
                                    <span class="ratings" style="width:60%"></span>
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <a href="demo5-product.html" class="rating-reviews">( 6 reviews )</a>
                            </div>
                        </div>
                    </div>
                    <div class="product text-center">
                        <figure class="product-media" style="background-color: #f7f8fa;">
                            <a href="demo5-product.html">
                                <img src="{{ asset('ui/frontend') }}/images/demos/demo5/products/6.jpg" alt="Blue Pinafore Denim Dress"
                                    width="280" height="280">
                            </a>
                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                    data-target="#addCartModal" title="Add to cart"><i
                                        class="d-icon-bag"></i></a>
                                <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i
                                        class="d-icon-heart"></i></a>
                            </div>
                            <div class="product-action">
                                <a href="#" class="btn-product btn-quickview" title="Quick View">Quick View</a>
                            </div>
                        </figure>
                        <div class="product-details">
                            <div class="product-cat">
                                <a href="demo5-shop.html">Cosmetics</a>
                            </div>
                            <h3 class="product-name">
                                <a href="demo5-product.html">Women's Wide Tooth Comb</a>
                            </h3>
                            <div class="product-price">
                                <span class="price">$230.99</span>
                            </div>
                            <div class="ratings-container">
                                <div class="ratings-full">
                                    <span class="ratings" style="width:60%"></span>
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <a href="demo5-product.html" class="rating-reviews">( 6 reviews )</a>
                            </div>
                        </div>
                    </div>
                    <div class="product text-center">
                        <figure class="product-media" style="background-color: #f7f8fa;">
                            <a href="demo5-product.html">
                                <img src="{{ asset('ui/frontend') }}/images/demos/demo5/products/7.jpg" alt="Blue Pinafore Denim Dress"
                                    width="280" height="280">
                            </a>
                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                    data-target="#addCartModal" title="Add to cart"><i
                                        class="d-icon-bag"></i></a>
                                <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i
                                        class="d-icon-heart"></i></a>
                            </div>
                            <div class="product-action">
                                <a href="#" class="btn-product btn-quickview" title="Quick View">Quick View</a>
                            </div>
                        </figure>
                        <div class="product-details">
                            <div class="product-cat">
                                <a href="demo5-shop.html">Cosmetics</a>
                            </div>
                            <h3 class="product-name">
                                <a href="demo5-product.html">Cosmetical Wristing Brush</a>
                            </h3>
                            <div class="product-price">
                                <span class="price">$230.99</span>
                            </div>
                            <div class="ratings-container">
                                <div class="ratings-full">
                                    <span class="ratings" style="width:60%"></span>
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <a href="demo5-product.html" class="rating-reviews">( 6 reviews )</a>
                            </div>
                        </div>
                    </div>
                    <div class="product text-center">
                        <figure class="product-media" style="background-color: #f7f8fa;">
                            <a href="demo5-product.html">
                                <img src="{{ asset('ui/frontend') }}/images/demos/demo5/products/8.jpg" alt="Blue Pinafore Denim Dress"
                                    width="280" height="280">
                            </a>
                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                    data-target="#addCartModal" title="Add to cart"><i
                                        class="d-icon-bag"></i></a>
                                <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i
                                        class="d-icon-heart"></i></a>
                            </div>
                            <div class="product-action">
                                <a href="#" class="btn-product btn-quickview" title="Quick View">Quick View</a>
                            </div>
                        </figure>
                        <div class="product-details">
                            <div class="product-cat">
                                <a href="demo5-shop.html">Bags</a>
                            </div>
                            <h3 class="product-name">
                                <a href="demo5-product.html">Men's Black Handbag</a>
                            </h3>
                            <div class="product-price">
                                <span class="price">$230.99</span>
                            </div>
                            <div class="ratings-container">
                                <div class="ratings-full">
                                    <span class="ratings" style="width:60%"></span>
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <a href="demo5-product.html" class="rating-reviews">( 6 reviews )</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="pt-2 appear-animate" data-animation-options="{
            'delay': '.3s'
        }">
            <div class="container">
                <h2 class="title title-center mb-5">Popular Categories</h2>
                <div class="owl-carousel owl-theme row cols-lg-4 cols-md-3 cols-sm-2 cols-1" data-owl-options="{
                    'nav': false,
                    'dots': true,
                    'autoplay': false,
                    'margin': 20,
                    'responsive': {
                        '0': {
                            'items': 1
                        },
                        '576': {
                            'items': 2
                        },
                        '768': {
                            'items': 3
                        },
                        '992': {
                            'items': 4,
                            'dots': false
                        }
                    }
                }">
                    <div class="category category-default1 category-absolute banner-radius overlay-zoom">
                        <a href="demo5-shop.html">
                            <figure class="category-media" style="background-color: #edd3c7;">
                                <img src="{{ asset('ui/frontend') }}/images/demos/demo5/categories/1.jpg" alt="category" width="280"
                                    height="280" />
                            </figure>
                        </a>
                        <div class="category-content">
                            <h4 class="category-name ls-l"><a href="demo5-shop.html">Backpacks &amp; Fashion
                                    Bags</a>
                            </h4>
                        </div>
                    </div>

                    <div class="category category-default1 category-absolute banner-radius overlay-zoom">
                        <a href="demo5-shop.html">
                            <figure class="category-media" style="background-color: #090909;">
                                <img src="{{ asset('ui/frontend') }}/images/demos/demo5/categories/2.jpg" alt="category" width="280"
                                    height="280" />
                            </figure>
                        </a>
                        <div class="category-content">
                            <h4 class="category-name ls-l"><a href="demo5-shop.html">Travel &amp; Clothing</a>
                            </h4>
                        </div>
                    </div>

                    <div class="category category-default1 category-absolute banner-radius overlay-zoom">
                        <a href="demo5-shop.html">
                            <figure class="category-media" style="background-color: #fcd772;">
                                <img src="{{ asset('ui/frontend') }}/images/demos/demo5/categories/3.jpg" alt="category" width="280"
                                    height="280" />
                            </figure>
                        </a>
                        <div class="category-content">
                            <h4 class="category-name ls-l"><a href="demo5-shop.html">Musical instruments</a>
                            </h4>
                        </div>
                    </div>

                    <div class="category category-default1 category-absolute banner-radius overlay-zoom">
                        <a href="demo5-shop.html">
                            <figure class="category-media" style="background-color: #9bc6cb;">
                                <img src="{{ asset('ui/frontend') }}/images/demos/demo5/categories/4.jpg" alt="category" width="280"
                                    height="280" />
                            </figure>
                        </a>
                        <div class="category-content font-weight-bold">
                            <h4 class="category-name ls-l"><a href="demo5-shop.html">Sneakers</a>
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="mt-10 pt-8 mb-8 appear-animate" data-animation-options="{
            'name': 'fadeIn',
            'delay': '.2s'
        }">
            <div class="container">
                <h2 class="title title-simple title-center">Best Sellers</h2>
                <div class="owl-carousel owl-theme row owl-nav-full cols-lg-4 cols-md-3 cols-2"
                    data-owl-options="{
                    'items': 4,
                    'dots': true,
                    'nav': false,
                    'loop': false,
                    'margin': 20,
                    'responsive': {
                        '0': {
                            'items': 2
                        },
                        '576': {
                            'items': 3
                        },
                        '768': {
                            'items': 4
                        },
                        '992': {
                            'items': 5
                        },
                        '1200': {
                            'items': 6,
                            'dots': false,
                            'nav': true
                        }
                    }
                }">
                    <div class="product text-center">
                        <figure class="product-media" style="background-color: #f7f8fa;">
                            <a href="demo5-product.html">
                                <img src="{{ asset('ui/frontend') }}/images/demos/demo5/products/9.jpg" alt="Blue Pinafore Denim Dress"
                                    width="180" height="180">
                            </a>
                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                    data-target="#addCartModal" title="Add to cart"><i
                                        class="d-icon-bag"></i></a>
                                <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i
                                        class="d-icon-heart"></i></a>
                            </div>
                            <div class="product-action">
                                <a href="#" class="btn-product btn-quickview" title="Quick View">Quick View</a>
                            </div>
                        </figure>
                        <div class="product-details">
                            <div class="product-cat">
                                <a href="demo5-shop.html">Electronics</a>
                            </div>
                            <h3 class="product-name">
                                <a href="demo5-product.html">Hand Electric Cell</a>
                            </h3>
                            <div class="product-price">
                                <span class="price">$230.99</span>
                            </div>
                            <div class="ratings-container">
                                <div class="ratings-full">
                                    <span class="ratings" style="width:60%"></span>
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <a href="demo5-product.html" class="rating-reviews">( 6 reviews )</a>
                            </div>
                        </div>
                    </div>
                    <div class="product text-center">
                        <figure class="product-media" style="background-color: #f7f8fa;">
                            <a href="demo5-product.html">
                                <img src="{{ asset('ui/frontend') }}/images/demos/demo5/products/10.jpg" alt="Blue Pinafore Denim Dress"
                                    width="180" height="180">
                            </a>
                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                    data-target="#addCartModal" title="Add to cart"><i
                                        class="d-icon-bag"></i></a>
                                <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i
                                        class="d-icon-heart"></i></a>
                            </div>
                            <div class="product-action">
                                <a href="#" class="btn-product btn-quickview" title="Quick View">Quick View</a>
                            </div>
                        </figure>
                        <div class="product-details">
                            <div class="product-cat">
                                <a href="demo5-shop.html">Bags</a>
                            </div>
                            <h3 class="product-name">
                                <a href="demo5-product.html">Women’s Blue Handbag</a>
                            </h3>
                            <div class="product-price">
                                <span class="price">$230.99</span>
                            </div>
                            <div class="ratings-container">
                                <div class="ratings-full">
                                    <span class="ratings" style="width:60%"></span>
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <a href="demo5-product.html" class="rating-reviews">( 6 reviews )</a>
                            </div>
                        </div>
                    </div>
                    <div class="product text-center">
                        <figure class="product-media" style="background-color: #f7f8fa;">
                            <a href="demo5-product.html">
                                <img src="{{ asset('ui/frontend') }}/images/demos/demo5/products/11.jpg" alt="Blue Pinafore Denim Dress"
                                    width="180" height="180">
                            </a>
                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                    data-target="#addCartModal" title="Add to cart"><i
                                        class="d-icon-bag"></i></a>
                                <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i
                                        class="d-icon-heart"></i></a>
                            </div>
                            <div class="product-action">
                                <a href="#" class="btn-product btn-quickview" title="Quick View">Quick View</a>
                            </div>
                        </figure>
                        <div class="product-details">
                            <div class="product-cat">
                                <a href="demo5-shop.html">Bags</a>
                            </div>
                            <h3 class="product-name">
                                <a href="demo5-product.html">Women’s Yellowish Band Handbag</a>
                            </h3>
                            <div class="product-price">
                                <span class="price">$230.99</span>
                            </div>
                            <div class="ratings-container">
                                <div class="ratings-full">
                                    <span class="ratings" style="width:60%"></span>
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <a href="demo5-product.html" class="rating-reviews">( 6 reviews )</a>
                            </div>
                        </div>
                    </div>
                    <div class="product text-center">
                        <figure class="product-media" style="background-color: #f7f8fa;">
                            <a href="demo5-product.html">
                                <img src="{{ asset('ui/frontend') }}/images/demos/demo5/products/12.jpg" alt="Blue Pinafore Denim Dress"
                                    width="180" height="180">
                            </a>
                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                    data-target="#addCartModal" title="Add to cart"><i
                                        class="d-icon-bag"></i></a>
                                <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i
                                        class="d-icon-heart"></i></a>
                            </div>
                            <div class="product-action">
                                <a href="#" class="btn-product btn-quickview" title="Quick View">Quick View</a>
                            </div>
                        </figure>
                        <div class="product-details">
                            <div class="product-cat">
                                <a href="demo5-shop.html">Cosmetics</a>
                            </div>
                            <h3 class="product-name">
                                <a href="demo5-product.html">Cosmetical Wristing Brush</a>
                            </h3>
                            <div class="product-price">
                                <span class="price">$230.99</span>
                            </div>
                            <div class="ratings-container">
                                <div class="ratings-full">
                                    <span class="ratings" style="width:60%"></span>
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <a href="demo5-product.html" class="rating-reviews">( 6 reviews )</a>
                            </div>
                        </div>
                    </div>
                    <div class="product text-center">
                        <figure class="product-media" style="background-color: #f7f8fa;">
                            <a href="demo5-product.html">
                                <img src="{{ asset('ui/frontend') }}/images/demos/demo5/products/13.jpg" alt="Blue Pinafore Denim Dress"
                                    width="180" height="180">
                            </a>
                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                    data-target="#addCartModal" title="Add to cart"><i
                                        class="d-icon-bag"></i></a>
                                <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i
                                        class="d-icon-heart"></i></a>
                            </div>
                            <div class="product-action">
                                <a href="#" class="btn-product btn-quickview" title="Quick View">Quick View</a>
                            </div>
                        </figure>
                        <div class="product-details">
                            <div class="product-cat">
                                <a href="demo5-shop.html">Watch</a>
                            </div>
                            <h3 class="product-name">
                                <a href="demo5-product.html">Brown Strap Wrist Watch</a>
                            </h3>
                            <div class="product-price">
                                <span class="price">$230.99</span>
                            </div>
                            <div class="ratings-container">
                                <div class="ratings-full">
                                    <span class="ratings" style="width:60%"></span>
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <a href="demo5-product.html" class="rating-reviews">( 6 reviews )</a>
                            </div>
                        </div>
                    </div>
                    <div class="product text-center">
                        <figure class="product-media" style="background-color: #f7f8fa;">
                            <a href="demo5-product.html">
                                <img src="{{ asset('ui/frontend') }}/images/demos/demo5/products/14.jpg" alt="Blue Pinafore Denim Dress"
                                    width="180" height="180">
                            </a>
                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                    data-target="#addCartModal" title="Add to cart"><i
                                        class="d-icon-bag"></i></a>
                                <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i
                                        class="d-icon-heart"></i></a>
                            </div>
                            <div class="product-action">
                                <a href="#" class="btn-product btn-quickview" title="Quick View">Quick View</a>
                            </div>
                        </figure>
                        <div class="product-details">
                            <div class="product-cat">
                                <a href="demo5-shop.html">Shoes</a>
                            </div>
                            <h3 class="product-name">
                                <a href="demo5-product.html">Training White Shoes</a>
                            </h3>
                            <div class="product-price">
                                <span class="price">$230.99</span>
                            </div>
                            <div class="ratings-container">
                                <div class="ratings-full">
                                    <span class="ratings" style="width:60%"></span>
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <a href="demo5-product.html" class="rating-reviews">( 6 reviews )</a>
                            </div>
                        </div>
                    </div>
                    <div class="product text-center">
                        <figure class="product-media" style="background-color: #f7f8fa;">
                            <a href="demo5-product.html">
                                <img src="{{ asset('ui/frontend') }}/images/demos/demo5/products/11.jpg" alt="Blue Pinafore Denim Dress"
                                    width="180" height="180">
                            </a>
                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                    data-target="#addCartModal" title="Add to cart"><i
                                        class="d-icon-bag"></i></a>
                                <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i
                                        class="d-icon-heart"></i></a>
                            </div>
                            <div class="product-action">
                                <a href="#" class="btn-product btn-quickview" title="Quick View">Quick View</a>
                            </div>
                        </figure>
                        <div class="product-details">
                            <div class="product-cat">
                                <a href="demo5-shop.html">Bags</a>
                            </div>
                            <h3 class="product-name">
                                <a href="demo5-product.html">Women’s Yellowish Band Handbag</a>
                            </h3>
                            <div class="product-price">
                                <span class="price">$230.99</span>
                            </div>
                            <div class="ratings-container">
                                <div class="ratings-full">
                                    <span class="ratings" style="width:60%"></span>
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <a href="demo5-product.html" class="rating-reviews">( 6 reviews )</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="banner banner-cta parallax" data-option="{'offset': -75}"
            data-image-src="{{ asset('ui/frontend') }}/images/demos/demo5/cta.jpg" style="background-color: #b8cdce;">
            <div class="container text-center">
                <div class="banner-content appear-animate" data-animation-options="{
                    'name': 'fadeInUpShorter',
                    'delay': '.2s',
                    'duration': '.75s'
                }">
                    <h3 class="banner-title mb-1">Sign up to <strong class="text-uppercase">Riode</strong></h3>
                    <p class="ls-s text-white">It only takes a second to find out about our latest <br />news
                        and
                        promotions...</p>
                    <form action="#" class="input-wrapper input-wrapper-round input-wrapper-inline">
                        <input type="email" class="form-control text-body bg-white" name="email" id="email"
                            placeholder="Email address here..." required />
                        <button class="btn btn-sm btn-dark btn-icon-right" type="submit">subscribe<i
                                class="d-icon-arrow-right"></i></button>
                    </form>
                    <div class="social-links">
                        <a href="#" title="social-link"
                            class="social-link social-facebook fab fa-facebook-f"></a>
                        <a href="#" title="social-link" class="social-link social-twitter fab fa-twitter"></a>
                        <a href="#" title="social-link"
                            class="social-link social-linkedin fab fa-linkedin-in"></a>
                        <a href="#" title="social-link" class="social-link social-google fab fa-google"></a>
                    </div>
                </div>
            </div>
        </section>

        <section class="pt-10 mt-3 pb-10">
            <div class="container mt-4">
                <h2 class="title title-center">Latest News</h2>
                <div class="owl-carousel owl-theme post-slider row cols-lg-3 cols-sm-2 cols-1" data-owl-options="{
                    'nav': false,
                    'dots': true,
                    'margin': 20,
                    'responsive': {
                        '0': {
                            'items': 1
                        },
                        '576': {
                            'items': 2
                        },
                        '992': {
                            'items': 3,
                            'dots': false
                        }
                    }
                }">
                    <div class="blog-post">
                        <article class="post post-frame overlay-zoom">
                            <figure class="post-media" style="background-color: #e9e9e9;">
                                <a href="post-single.html">
                                    <img src="{{ asset('ui/frontend') }}/images/demos/demo5/blog/1.jpg" alt="Blog post" width="340"
                                        height="206" />
                                </a>
                                <div class="post-calendar">
                                    <span class="post-day">19</span>
                                    <span class="post-month">JAN</span>
                                </div>
                            </figure>
                            <div class="post-details">
                                <h4 class="post-title"><a href="post-single.html">20% Off Coupon for Cyber
                                        Week</a></h4>
                                <p class="post-content mb-4">Lorem ipsum dolor sit amet,onadipiscing elit, sedsd
                                    doeiu smod tempo...</p>
                                <a href="post-single.html"
                                    class="btn btn-primary btn-sm btn-link btn-underline btn-icon-right">Read
                                    More<i class="d-icon-arrow-right"></i></a>
                            </div>
                        </article>
                    </div>
                    <div class="blog-post">
                        <article class="post post-frame overlay-zoom">
                            <figure class="post-media" style="background-color: #dfe4e9;">
                                <a href="post-single.html">
                                    <img src="{{ asset('ui/frontend') }}/images/demos/demo5/blog/2.jpg" alt="Blog post" width="340"
                                        height="206" />
                                </a>
                                <div class="post-calendar">
                                    <span class="post-day">19</span>
                                    <span class="post-month">JAN</span>
                                </div>
                            </figure>
                            <div class="post-details">
                                <h4 class="post-title"><a href="post-single.html">Sed adipiscing ornare
                                        risus.</a></h4>
                                <p class="post-content mb-4">Lorem ipsum dolor sit amet,onadipiscing elit, sedsd
                                    doeiu smod tempo...</p>
                                <a href="post-single.html"
                                    class="btn btn-primary btn-sm btn-link btn-underline btn-icon-right">Read
                                    More<i class="d-icon-arrow-right"></i></a>
                            </div>
                        </article>
                    </div>
                    <div class="blog-post">
                        <article class="post post-frame overlay-zoom">
                            <figure class="post-media" style="background-color: #e4e4e3;">
                                <a href="post-single.html">
                                    <img src="{{ asset('ui/frontend') }}/images/demos/demo5/blog/3.jpg" alt="Blog post" width="340"
                                        height="206" />
                                </a>
                                <div class="post-calendar">
                                    <span class="post-day">19</span>
                                    <span class="post-month">JAN</span>
                                </div>
                            </figure>
                            <div class="post-details">
                                <h4 class="post-title"><a href="post-single.html">Vivamus vestibulum ntulla</a>
                                </h4>
                                <p class="post-content mb-4">Lorem ipsum dolor sit amet,onadipiscing elit, sedsd
                                    doeiu smod tempo...</p>
                                <a href="post-single.html"
                                    class="btn btn-primary btn-sm btn-link btn-underline btn-icon-right">Read
                                    More<i class="d-icon-arrow-right"></i></a>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </section>

        <section class="instagram-section pb-8 mb-10 appear-animate">
            <div class="container">
                <h2 class="title title-simple text-normal title-center mb-6">Follow Us on Instagram</h2>
                <div class="row grid">
                    <div class="grid-item col-lg-2 col-sm-4 col-6 height-x1">
                        <figure class="instagram appear-animate" style="background-color: #ced0cf;"
                            data-animation-options="{
                            'name': 'fadeInLeftShorter',
                            'delay': '.3s'
                        }">
                            <a href="#">
                                <img src="{{ asset('ui/frontend') }}/images/demos/demo5/instagrams/1.jpg" alt="Instagram" width="180"
                                    height="180" />
                            </a>
                        </figure>
                    </div>
                    <div class="grid-item col-lg-2 col-sm-4 col-6 height-x1">
                        <figure class="instagram appear-animate" style="background-color: #dddcda;"
                            data-animation-options="{
                            'name': 'fadeInLeftShorter',
                            'delay': '.2s'
                        }">
                            <a href="#">
                                <img src="{{ asset('ui/frontend') }}/images/demos/demo5/instagrams/2.jpg" alt="Instagram" width="180"
                                    height="180" />
                            </a>
                        </figure>
                    </div>
                    <div class="grid-item col-lg-2 col-sm-4 col-6 height-x1">
                        <figure class="instagram appear-animate" style="background-color: #eaebe9;"
                            data-animation-options="{
                            'name': 'fadeInRightShorter',
                            'delay': '.2s'
                        }">
                            <a href="#">
                                <img src="{{ asset('ui/frontend') }}/images/demos/demo5/instagrams/3.jpg" alt="Instagram" width="180"
                                    height="180" />
                            </a>
                        </figure>
                    </div>
                    <div class="grid-item col-lg-2 col-sm-4 col-6 height-x1">
                        <figure class="instagram appear-animate" style="background-color: #b4b4b6;"
                            data-animation-options="{
                            'name': 'fadeInRightShorter',
                            'delay': '.3s'
                        }">
                            <a href="#">
                                <img src="{{ asset('ui/frontend') }}/images/demos/demo5/instagrams/4.jpg" alt="Instagram" width="180"
                                    height="180" />
                            </a>
                        </figure>
                    </div>
                    <div class="grid-item col-lg-4 col-sm-8 height-x2">
                        <div class="testimonial-wrapper">
                            <h3 class="title title-simple font-weight-semi-bold text-normal">What they
                                say about us</h3>
                            <div class="owl-carousel owl-theme row cols-1 appear-animate"
                                data-animation-options="{
                                'delay': '.2s'
                            }" data-owl-options="{
                                'items': 1,
                                'nav': false,
                                'dots': true,
                                'loop': false
                            }">
                                <div class="testimonial testimonial-centered">
                                    <div class="testimonial-info">
                                        <figure class="testimonial-author-thumbnail">
                                            <img src="images/agents/4.jpg" alt="user" width="40" height="40" />
                                        </figure>
                                        <blockquote class="comment">
                                            “ Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                                            Phasellus hendrerit.
                                            Pellente sque aliquet nibh nec urna. In nisi neque ”
                                        </blockquote>
                                        <cite>
                                            Jenson Gregory
                                            <span>Customer</span>
                                        </cite>
                                    </div>
                                </div>
                                <div class="testimonial testimonial-centered">
                                    <div class="testimonial-info">
                                        <figure class="testimonial-author-thumbnail">
                                            <img src="{{ asset('ui/frontend') }}/images/agents/4.jpg" alt="user" width="40" height="40" />
                                        </figure>
                                        <blockquote class="comment">“ Lorem ipsum dolor sit amet, consectetuer
                                            adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec
                                            urna. In nisi neque ”</blockquote>
                                        <cite>
                                            Mary Adams
                                            <span>Customer</span>
                                        </cite>
                                    </div>
                                </div>
                                <div class="testimonial testimonial-centered">
                                    <div class="testimonial-info">
                                        <figure class="testimonial-author-thumbnail">
                                            <img src="{{ asset('ui/frontend') }}/images/agents/4.jpg" alt="user" width="40" height="40" />
                                        </figure>
                                        <blockquote class="comment">“ Lorem ipsum dolor sit amet, consectetuer
                                            adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec
                                            urna. In nisi neque ”</blockquote>
                                        <cite>
                                            Owen Hunt
                                            <span>Customer</span>
                                        </cite>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid-item col-lg-2 col-sm-4 col-6 height-x1">
                        <figure class="instagram appear-animate" style="background-color: #3b414d;"
                            data-animation-options="{
                            'name': 'fadeInLeftShorter',
                            'delay': '.3s'
                        }">
                            <a href="#">
                                <img src="{{ asset('ui/frontend') }}/images/demos/demo5/instagrams/5.jpg" alt="Instagram" width="180"
                                    height="180" />
                            </a>
                        </figure>
                    </div>
                    <div class="grid-item col-lg-2 col-sm-4 col-6 height-x1">
                        <figure class="instagram appear-animate" style="background-color: #d1cecb;"
                            data-animation-options="{
                            'name': 'fadeInLeftShorter',
                            'delay': '.2s'
                        }">
                            <a href="#">
                                <img src="{{ asset('ui/frontend') }}/images/demos/demo5/instagrams/6.jpg" alt="Instagram" width="180"
                                    height="180" />
                            </a>
                        </figure>
                    </div>
                    <div class="grid-item col-lg-2 col-sm-4 col-6 height-x1">
                        <figure class="instagram appear-animate" style="background-color: #e3e7ea;"
                            data-animation-options="{
                            'name': 'fadeInRightShorter',
                            'delay': '.2s'
                        }">
                            <a href="#">
                                <img src="{{ asset('ui/frontend') }}/images/demos/demo5/instagrams/7.jpg" alt="Instagram" width="180"
                                    height="180" />
                            </a>
                        </figure>
                    </div>
                    <div class="grid-item col-lg-2 col-sm-4 col-6 height-x1">
                        <figure class="instagram appear-animate" style="background-color: #162021;"
                            data-animation-options="{
                            'name': 'fadeInRightShorter',
                            'delay': '.3s'
                        }">
                            <a href="#">
                                <img src="{{ asset('ui/frontend') }}/images/demos/demo5/instagrams/8.jpg" alt="Instagram" width="180"
                                    height="180" />
                            </a>
                        </figure>
                    </div>
                    <div class="grid-space col-1"></div>
                </div>
            </div>
        </section>
    </div>

</main>
<div class="sticky-icons-wrapper">
    <div class="sticky-icon-links">
        <ul>
            <li><a href="#" class="demo-toggle"><i class="fas fa-home"></i><span>Demos</span></a></li>
            <li><a href="documentation.html"><i class="fas fa-info-circle"></i><span>Documentation</span></a>
            </li>
            <li><a href="https://themeforest.net/downloads/"><i class="fas fa-star"></i><span>Reviews</span></a>
            </li>
            <li><a href="https://d-themes.com/buynow/riodehtml"><i class="fas fa-shopping-cart"></i><span>Buy
                        now!</span></a></li>
        </ul>
    </div>
    <div class="demos-list">
        <div class="demos-overlay"></div>
        <a class="demos-close" href="#"><i class="close-icon"></i></a>
        <div class="demos-content scrollable scrollable-light">
            <h3 class="demos-title">Demos</h3>
            <div class="demos">
            </div>
        </div>
    </div>
</div>
</x-frontend.layout.master>