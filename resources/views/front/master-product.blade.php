<!DOCTYPE html>
<html lang="en">
   <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
   @foreach($Products as $Product)
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
        <?php $SiteSettings = DB::table('sitesettings')->get() ?>
        @foreach ($SiteSettings as $Settings)
                {{-- SEO --}}
            {!! SEOMeta::generate() !!}
            <meta name="author" content="Designekta Studios">
            <meta property="og:description" content="Car Audio store in Nairobi, Vehicle Sounds Systems in Kenya, Vehicle Accessories in kenya, Car Sound Systems in Kenya, Car alarm Systems in Kenya">
            <meta property="og:image" content="{{url('/')}}/uploads/logo/{{$Settings->logo}}" />
            <meta property="fb:app_id" content="431980657174772" />
            {!! OpenGraph::generate() !!}
            {!! Twitter::generate() !!}
            <meta name="twitter:card" content="summary_large_image" />
            <meta name="twitter:creator" content="@crystalcaraudio" />
            <meta name="_token" content="{{ csrf_token() }}">
            {{-- SEO --}}
            {{-- @include('front.favicon') --}}
            {{-- @include('front.facebook') --}}
            {{-- @include('front.tawk') --}}
            {{-- @include('front.google') --}}
        @endforeach



        <link rel="preload" href="{{asset('theme/fonts/riode115b.ttf?5gap68')}}" as="font" type="font/woff2" crossorigin="anonymous">
        <link rel="preload" href="{{asset('theme/vendor/fontawesome-free/webfonts/fa-solid-900.woff2')}}" as="font" type="font/woff2" crossorigin="anonymous">
        <link rel="preload" href="{{asset('theme/vendor/fontawesome-free/webfonts/fa-brands-400.woff2')}}" as="font" type="font/woff2" crossorigin="anonymous">
        <script>
            WebFontConfig = {
                google: { families: ['Poppins:400,500,600,700,800'] }
            };
            (function (d) {
                var wf = d.createElement('script'), s = d.scripts[0];
                wf.src = "{{asset('theme/js/webfont.js')}}";
                wf.async = true;
                s.parentNode.insertBefore(wf, s);
            })(document);
        </script>
        <link rel="stylesheet" type="text/css" href="{{asset('theme/vendor/fontawesome-free/css/all.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('theme/vendor/animate/animate.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('theme/vendor/magnific-popup/magnific-popup.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('theme/vendor/owl-carousel/owl.carousel.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('theme/vendor/sticky-icon/stickyicon.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('theme/css/demo29.min.css')}}">
    </head>
    <body>
        <div class="page-wrapper">
            <h1 class="d-none"> {{$Product->name}}</h1>
            <header class="header">

                <div class="header-middle sticky-header fix-top sticky-content">
                <div class="container">
                    <div class="header-left">
                        <a href="#" class="mobile-menu-toggle">
                        <i class="d-icon-bars2"></i>
                        </a>
                        <a href="{{url('/')}}" class="logo mr-4">
                        <img src="{{url('/')}}/uploads/theme-logo.png" alt="logo" width="183" height="53" />
                        </a>
                    </div>
                    <div class="header-center mr-xl-6 ml-xl-8">
                        <div class="header-search hs-simple mr-0">
                            <form action="#" method="get" class="input-wrapper">
                            <div class="select-box">
                                <select id="category" name="category">
                                    <option value>All Categories</option>
                                    <?php $Categories = DB::table('category')->inRandomOrder()->get(); ?>
                                    @foreach ($Categories as $cat)
                                        <option value="4">{{$cat->cat}}</option>
                                    @endforeach

                                </select>
                            </div>
                            <input type="text" class="form-control" name="search" id="search" placeholder="Search..." required>
                            <button class="btn btn-sm btn-search" type="submit" title="submit-button"><i class="d-icon-search"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="header-right">
                        <a href="tel:#" class="icon-box icon-box-side mr-lg-3">
                            <div class="icon-box-icon mr-0 mr-lg-2">
                            <i class="d-icon-phone"></i>
                            </div>
                            <div class="icon-box-content d-lg-show">
                            <h4 class="icon-box-title">Call Us Now:</h4>
                            <p>{{$Settings->mobile}}</p>
                            </div>
                        </a>
                        <span class="divider"></span>
                        <div class="dropdown compare-dropdown off-canvas d-md-show mr-xl-7 mr-4">
                            <a href="#" class="compare compare-toggle mr-0" title="comapre">
                            <i class="d-icon-compare"></i>
                            </a>
                            <div class="canvas-overlay"></div>
                            <div class="dropdown-box scrollable">
                            <div class="canvas-header">
                                <h4 class="canvas-title">Compare</h4>
                                <a href="#" class="btn btn-dark btn-link btn-icon-right btn-close">close<i class="d-icon-arrow-right"></i><span class="sr-only">Compare</span></a>
                            </div>
                            <div class="products scrollable">
                                <div class="product product-compare">
                                    <figure class="product-media">
                                        <a href="product.html">
                                        <img src="{{asset('theme/images/compare/product-1.jpg')}}" alt="product" width="80" height="88" />
                                        </a>
                                        <button class="btn btn-link btn-close">
                                        <i class="fas fa-times"></i><span class="sr-only">Close</span>
                                        </button>
                                    </figure>
                                    <div class="product-detail">
                                        <a href="product.html" class="product-name">Riode White Trends</a>
                                        <div class="price-box">
                                        <span class="product-price">$21.00
                                        <del class="old-price pl-1">$40.00</del>
                                        </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="product product-compare">
                                    <figure class="product-media">
                                        <a href="product.html">
                                        <img src="{{asset('theme/images/compare/product-2.jpg')}}" alt="product" width="80" height="88" />
                                        </a>
                                        <button class="btn btn-link btn-close">
                                        <i class="fas fa-times"></i><span class="sr-only">Close</span>
                                        </button>
                                    </figure>
                                    <div class="product-detail">
                                        <a href="product.html" class="product-name">Dark Blue Women’s
                                        Leomora Hat</a>
                                        <div class="price-box">
                                        <span class="product-price">$118.00
                                        <del class="old-price pl-1">$158.99</del>
                                        </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="compare.html" class="btn btn-dark compare-btn mt-4"><span>Go To Compare
                            List</span></a>
                            </div>
                        </div>
                        <div class="dropdown wishlist wishlist-dropdown off-canvas">
                            <a href="wishlist.html" class="wishlist-toggle" title="wishlist">
                            <i class="d-icon-heart"></i>
                            </a>
                            <div class="canvas-overlay"></div>
                            <div class="dropdown-box scrollable">
                            <div class="canvas-header">
                                <h4 class="canvas-title">wishlist</h4>
                                <a href="#" class="btn btn-dark btn-link btn-icon-right btn-close">close<i class="d-icon-arrow-right"></i><span class="sr-only">wishlist</span></a>
                            </div>
                            <div class="products scrollable">
                                <div class="product product-wishlist">
                                    <figure class="product-media">
                                        <a href="product.html">
                                        <img src="{{asset('theme/images/wishlist/product-1.jpg')}}" width="100" height="100" alt="product" />
                                        </a>
                                        <button class="btn btn-link btn-close">
                                        <i class="fas fa-times"></i><span class="sr-only">Close</span>
                                        </button>
                                    </figure>
                                    <div class="product-detail">
                                        <a href="product.html" class="product-name">Girl's Dark Bag</a>
                                        <div class="price-box">
                                        <span class="product-price">$84.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="product product-wishlist">
                                    <figure class="product-media">
                                        <a href="product.html">
                                        <img src="{{asset('theme/images/wishlist/product-2.jpg')}}" width="100" height="100" alt="product" />
                                        </a>
                                        <button class="btn btn-link btn-close">
                                        <i class="fas fa-times"></i><span class="sr-only">Close</span>
                                        </button>
                                    </figure>
                                    <div class="product-detail">
                                        <a href="product.html" class="product-name">Women's Fashional Comforter
                                        </a>
                                        <div class="price-box">
                                        <span class="product-price">$84.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="product product-wishlist">
                                    <figure class="product-media">
                                        <a href="product.html">
                                        <img src="{{asset('theme/images/wishlist/product-3.jpg')}}" width="100" height="100" alt="product" />
                                        </a>
                                        <button class="btn btn-link btn-close">
                                        <i class="fas fa-times"></i><span class="sr-only">Close</span>
                                        </button>
                                    </figure>
                                    <div class="product-detail">
                                        <a href="product.html" class="product-name">Wide Knickerbockers</a>
                                        <div class="price-box">
                                        <span class="product-price">$84.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="wishlist.html" class="btn btn-dark wishlist-btn mt-4"><span>Go To
                            Wishlist</span></a>
                            </div>
                        </div>
                        <span class="divider"></span>
                        <div class="dropdown cart-dropdown type2 off-canvas mr-0 mr-lg-2">
                            <a href="#" class="cart-toggle label-block link">
                            <div class="cart-label d-lg-show ls-normal">
                                <span class="cart-name">Shopping Cart:</span>
                                <span class="cart-price">$42.00</span>
                            </div>
                            <i class="d-icon-bag"><span class="cart-count">2</span></i>
                            </a>
                            <div class="canvas-overlay"></div>
                            <div class="dropdown-box scrollable">
                            <div class="canvas-header">
                                <h4 class="canvas-title">Shopping Cart</h4>
                                <a href="#" class="btn btn-dark btn-link btn-icon-right btn-close">close<i class="d-icon-arrow-right"></i><span class="sr-only">Cart</span></a>
                            </div>
                            <div class="products scrollable">
                                <div class="product product-cart">
                                    <figure class="product-media">
                                        <a href="product.html">
                                        <img src="{{asset('theme/images/cart/product-1.jpg')}}" alt="product" width="80" height="88" />
                                        </a>
                                        <button class="btn btn-link btn-close">
                                        <i class="fas fa-times"></i><span class="sr-only">Close</span>
                                        </button>
                                    </figure>
                                    <div class="product-detail">
                                        <a href="product.html" class="product-name">Riode White Trends</a>
                                        <div class="price-box">
                                        <span class="product-quantity">1</span>
                                        <span class="product-price">$21.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="product product-cart">
                                    <figure class="product-media">
                                        <a href="product.html">
                                        <img src="{{asset('theme/images/cart/product-2.jpg')}}" alt="product" width="80" height="88" />
                                        </a>
                                        <button class="btn btn-link btn-close">
                                        <i class="fas fa-times"></i><span class="sr-only">Close</span>
                                        </button>
                                    </figure>
                                    <div class="product-detail">
                                        <a href="product.html" class="product-name">Dark Blue Women’s
                                        Leomora Hat</a>
                                        <div class="price-box">
                                        <span class="product-quantity">1</span>
                                        <span class="product-price">$118.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="cart-total">
                                <label>Subtotal:</label>
                                <span class="price">$139.00</span>
                            </div>
                            <div class="cart-action">
                                <a href="cart.html" class="btn btn-dark btn-link">View Cart</a>
                                <a href="checkout.html" class="btn btn-dark"><span>Go To Checkout</span></a>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>

            </header>

                @yield('content')

            <footer class="footer">
                <div class="container">
                <div class="footer-top">
                    <div class="owl-carousel owl-theme owl-middle row cols-xl-4 cols-md-3 cols-sm-2 cols-2" data-owl-options="{
                        'items': 3,
                        'margin': 0,
                        'dots': false,
                        'autoplay': true,
                        'responsive': {
                        '0': {
                        'items': 1
                        },
                        '576': {
                        'items': 1
                        },
                        '768': {
                        'items': 2
                        },
                        '992': {
                        'items': 3
                        }
                        }
                        }">
                        <div class="icon-box icon-box-side slide-icon-box justify-content-center">
                            <i class="icon-box-icon d-icon-truck" style="font-size: 46px;">
                            </i>
                            <div class="icon-box-content">
                            <h4 class="icon-box-title">Free shipping &amp; Return</h4>
                            <p>Free shipping on orders over $99</p>
                            </div>
                        </div>
                        <div class="icon-box icon-box-side slide-icon-box justify-content-center">
                            <i class="icon-box-icon d-icon-service">
                            </i>
                            <div class="icon-box-content">
                            <h4 class="icon-box-title">Customer Support 24/7</h4>
                            <p>Instant access to perfect support</p>
                            </div>
                        </div>
                        <div class="icon-box icon-box-side slide-icon-box justify-content-center">
                            <i class="icon-box-icon d-icon-secure">
                            </i>
                            <div class="icon-box-content">
                            <h4 class="icon-box-title">100% Secure Payment</h4>
                            <p>We ensure secure payment!</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="footer-bottom">
                    <div class="container p-0">
                        <div class="footer-left">
                            <figure class="payment">
                            {{-- <img src="{{asset('theme/images/payment.png')}}" alt="payment" width="159" height="29" /> --}}
                            <img src="{{url('/')}}/uploads/white-logo.png" alt="logo-footer" width="159" height="29" />
                            </figure>
                        </div>
                        <div class="footer-center">
                            <p class="copyright">Copyright &copy; Sound Wave Audio  {{date('Y')}} All Rights Reserved | Powered By Designekta Studios</p>
                        </div>
                        <div class="footer-right">
                            <div class="social-links">
                            <a href="#" title="social-link" class="social-link social-facebook fab fa-facebook-f"></a>
                            <a href="#" title="social-link" class="social-link social-twitter fab fa-twitter"></a>
                            <a href="#" title="social-link" class="social-link social-linkedin fab fa-linkedin-in mr-0"></a>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </footer>
        </div>
        <div class="sticky-footer sticky-content fix-bottom">
            <a href="{{url('/')}}" class="sticky-link">
            <i class="d-icon-home"></i>
            <span>Home</span>
            </a>
            <a href="demo29-shop.html" class="sticky-link">
            <i class="d-icon-volume"></i>
            <span>Categories</span>
            </a>
            <a href="wishlist.html" class="sticky-link">
            <i class="d-icon-heart"></i>
            <span>Wishlist</span>
            </a>
            <a href="account.html" class="sticky-link">
            <i class="d-icon-user"></i>
            <span>Account</span>
            </a>
            <div class="header-search hs-toggle dir-up">
                <a href="#" class="search-toggle sticky-link">
                <i class="d-icon-search"></i>
                <span>Search</span>
                </a>
                <form action="#" class="input-wrapper">
                <input type="text" class="form-control" name="search" autocomplete="off" placeholder="Search your keyword..." required />
                <button class="btn btn-search" type="submit">
                <i class="d-icon-search"></i>
                </button>
                </form>
            </div>
        </div>
        <a id="scroll-top" href="#top" title="Top" role="button" class="scroll-top"><i class="d-icon-arrow-up"></i></a>
        <div class="mobile-menu-wrapper">
            <div class="mobile-menu-overlay"></div>
            <a class="mobile-menu-close" href="#"><i class="d-icon-times"></i></a>
            <div class="mobile-menu-container scrollable">
                <form action="#" class="input-wrapper">
                <input type="text" class="form-control" name="search" autocomplete="off" placeholder="Search your keyword..." required />
                <button class="btn btn-search" type="submit">
                <i class="d-icon-search"></i>
                </button>
                </form>
                <ul class="mobile-menu mmenu-anim">
                <li>
                    <a href="{{url('/')}}">Home</a>
                </li>
                <li>
                    <a href="demo29-shop.html">Categories</a>
                    <ul>
                        <li>
                            <a href="#">
                            Variations 1
                            </a>
                            <ul>
                            <li><a href="shop-classic-filter.html">Classic Filter</a></li>
                            <li><a href="shop-left-toggle-sidebar.html">Left Toggle Filter</a></li>
                            <li><a href="shop-right-toggle-sidebar.html">Right Toggle Sidebar</a></li>
                            <li><a href="shop-horizontal-filter.html">Horizontal Filter </a></li>
                            <li><a href="shop-navigation-filter.html">Navigation Filter</a></li>
                            <li><a href="shop-off-canvas-filter.html">Off-Canvas Filter </a></li>
                            <li><a href="shop-top-banner.html">Top Banner</a></li>
                            <li><a href="shop-inner-top-banner.html">Inner Top Banner</a></li>
                            <li><a href="shop-with-bottom-block.html">With Bottom Block</a></li>
                            <li><a href="shop-category-in-page-header.html">Category In Page Header</a>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                            Variations 2
                            </a>
                            <ul>
                            <li><a href="shop-grid-3cols.html">3 Columns Mode</a></li>
                            <li><a href="shop-grid-4cols.html">4 Columns Mode</a></li>
                            <li><a href="shop-grid-5cols.html">5 Columns Mode</a></li>
                            <li><a href="shop-grid-6cols.html">6 Columns Mode</a></li>
                            <li><a href="shop-grid-7cols.html">7 Columns Mode</a></li>
                            <li><a href="shop-grid-8cols.html">8 Columns Mode</a></li>
                            <li><a href="shop-list-mode.html">List Mode</a></li>
                            <li><a href="shop-pagination.html">Pagination</a></li>
                            <li><a href="shop-infinite-ajaxscroll.html">Infinite Ajaxscroll </a></li>
                            <li><a href="shop-loadmore-button.html">Loadmore Button</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                            Variations 3
                            </a>
                            <ul>
                            <li><a href="shop-category-grid-shop.html">Category Grid Shop</a></li>
                            <li><a href="shop-category%2bproducts.html">Category + Products</a></li>
                            <li><a href="shop-default-1.html">Shop Default 1 </a></li>
                            <li><a href="shop-default-2.html">Shop Default 2</a></li>
                            <li><a href="shop-default-3.html">Shop Default 3</a></li>
                            <li><a href="shop-default-4.html">Shop Default 4</a></li>
                            <li><a href="shop-default-5.html">Shop Default 5</a></li>
                            <li><a href="shop-default-6.html">Shop Default 6</a></li>
                            <li><a href="shop-default-7.html">Shop Default 7</a></li>
                            <li><a href="shop-default-8.html">Shop Default 8</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="demo29-product.html">Products</a>
                    <ul>
                        <li>
                            <a href="#">Product Pages</a>
                            <ul>
                            <li><a href="product-simple.html">Simple Product</a></li>
                            <li><a href="product-featured.html">Featured &amp; On Sale</a></li>
                            <li><a href="product.html">Variable Product</a></li>
                            <li><a href="product-variable-swatch.html">Variation Swatch
                                Product</a>
                            </li>
                            <li><a href="product-grouped.html">Grouped Product </a></li>
                            <li><a href="product-external.html">External Product</a></li>
                            <li><a href="product-in-stock.html">In Stock Product</a></li>
                            <li><a href="product-out-stock.html">Out of Stock Product</a></li>
                            <li><a href="product-upsell.html">Upsell Products</a></li>
                            <li><a href="product-cross-sell.html">Cross Sell Products</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Product Layouts</a>
                            <ul>
                            <li><a href="product-vertical.html">Vertical Thumb</a></li>
                            <li><a href="product-horizontal.html">Horizontal Thumb</a></li>
                            <li><a href="product-gallery.html">Gallery Type</a></li>
                            <li><a href="product-grid.html">Grid Images</a></li>
                            <li><a href="product-masonry.html">Masonry Images</a></li>
                            <li><a href="product-sticky.html">Sticky Info</a></li>
                            <li><a href="product-sticky-both.html">Left & Right Sticky</a></li>
                            <li><a href="product-left-sidebar.html">With Left Sidebar</a></li>
                            <li><a href="product-right-sidebar.html">With Right Sidebar</a></li>
                            <li><a href="product-full.html">Full Width Layout </a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Product Features</a>
                            <ul>
                            <li><a href="product-sale.html">Sale Countdown</a></li>
                            <li><a href="product-hurryup.html">Hurry Up Notification </a></li>
                            <li><a href="product-attribute-guide.html">Attribute Guide </a></li>
                            <li><a href="product-sticky-cart.html">Add Cart Sticky</a></li>
                            <li><a href="product-thumbnail-label.html">Labels on Thumbnail</a></li>
                            <li><a href="product-more-description.html">More Description
                                Tabs</a>
                            </li>
                            <li><a href="product-accordion-data.html">Data In Accordion</a></li>
                            <li><a href="product-tabinside.html">Data Inside</a></li>
                            <li><a href="product-video.html">Video Thumbnail </a></li>
                            <li><a href="product-360-degree.html">360 Degree Thumbnail </a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">Pages</a>
                    <ul>
                        <li><a href="about-us.html">About</a></li>
                        <li><a href="contact-us.html">Contact Us</a></li>
                        <li><a href="account.html">Login</a></li>
                        <li><a href="faq.html">FAQs</a></li>
                        <li>
                            <a href="error-404.html">Error 404</a>
                            <ul>
                            <li><a href="error-404.html">Error 404-1</a></li>
                            <li><a href="error-404-1.html">Error 404-2</a></li>
                            <li><a href="error-404-2.html">Error 404-3</a></li>
                            <li><a href="error-404-3.html">Error 404-4</a></li>
                            </ul>
                        </li>
                        <li><a href="coming-soon.html">Coming Soon</a></li>
                    </ul>
                </li>
                <li>
                    <a href="blog-classic.html">Blog</a>
                    <ul>
                        <li><a href="blog-classic.html">Classic</a></li>
                        <li><a href="blog-listing.html">Listing</a></li>
                        <li>
                            <a href="#">Grid</a>
                            <ul>
                            <li><a href="blog-grid-2col.html">Grid 2 columns</a></li>
                            <li><a href="blog-grid-3col.html">Grid 3 columns</a></li>
                            <li><a href="blog-grid-4col.html">Grid 4 columns</a></li>
                            <li><a href="blog-grid-sidebar.html">Grid sidebar</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Masonry</a>
                            <ul>
                            <li><a href="blog-masonry-2col.html">Masonry 2 columns</a></li>
                            <li><a href="blog-masonry-3col.html">Masonry 3 columns</a></li>
                            <li><a href="blog-masonry-4col.html">Masonry 4 columns</a></li>
                            <li><a href="blog-masonry-sidebar.html">Masonry sidebar</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Mask</a>
                            <ul>
                            <li><a href="blog-mask-grid.html">Blog mask grid</a></li>
                            <li><a href="blog-mask-masonry.html">Blog mask masonry</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="post-single.html">Single Post</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="element.html">Elements</a>
                    <ul>
                        <li>
                            <a href="#">Elements 1</a>
                            <ul>
                            <li><a href="element-accordions.html">Accordions</a></li>
                            <li><a href="element-alerts.html">Alert &amp; Notification</a></li>
                            <li><a href="element-banner-effect.html">Banner Effect
                                </a>
                            </li>
                            <li><a href="element-banner.html">Banner
                                </a>
                            </li>
                            <li><a href="element-blog-posts.html">Blog Posts</a></li>
                            <li><a href="element-breadcrumb.html">Breadcrumb
                                </a>
                            </li>
                            <li><a href="element-buttons.html">Buttons</a></li>
                            <li><a href="element-cta.html">Call to Action</a></li>
                            <li><a href="element-countdown.html">Countdown
                                </a>
                            </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Elements 2</a>
                            <ul>
                            <li><a href="element-counter.html">Counter </a></li>
                            <li><a href="element-creative-grid.html">Creative Grid
                                </a>
                            </li>
                            <li><a href="element-animation.html">Entrance Effect
                                </a>
                            </li>
                            <li><a href="element-floating.html">Floating
                                </a>
                            </li>
                            <li><a href="element-hotspot.html">Hotspot
                                </a>
                            </li>
                            <li><a href="element-icon-boxes.html">Icon Boxes</a></li>
                            <li><a href="element-icons.html">Icons</a></li>
                            <li><a href="element-image-box.html">Image box
                                </a>
                            </li>
                            <li><a href="element-instagrams.html">Instagrams</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Elements 3</a>
                            <ul>
                            <li><a href="element-categories.html">Product Category</a></li>
                            <li><a href="element-products.html">Products</a></li>
                            <li><a href="element-product-banner.html">Products + Banner
                                </a>
                            </li>
                            <li><a href="element-product-grid.html">Products + Grid
                                </a>
                            </li>
                            <li><a href="element-product-single.html">Product Single
                                </a>
                            </li>
                            <li><a href="element-product-tab.html">Products + Tab
                                </a>
                            </li>
                            <li><a href="element-single-product.html">Single Product
                                </a>
                            </li>
                            <li><a href="element-slider.html">Slider
                                </a>
                            </li>
                            <li><a href="element-social-link.html">Social Icons </a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Elements 4</a>
                            <ul>
                            <li><a href="element-subcategory.html">Subcategory
                                </a>
                            </li>
                            <li><a href="element-svg-floating.html">Svg Floating
                                </a>
                            </li>
                            <li><a href="element-tabs.html">Tabs</a></li>
                            <li><a href="element-testimonials.html">Testimonials
                                </a>
                            </li>
                            <li><a href="element-titles.html">Title</a></li>
                            <li><a href="element-typography.html">Typography</a></li>
                            <li><a href="element-vendor.html">Vendor
                                </a>
                            </li>
                            <li><a href="element-video.html">Video
                                </a>
                            </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a href="https://d-themes.com/buynow/riodehtml">Buy Riode!</a></li>
                </ul>
            </div>
        </div>
        <div class="newsletter-popup newsletter-pop1 mfp-hide" id="newsletter-popup" style="background-image: url('{{asset('theme/images/newsletter-popup.jpg')}}')">
            <div class="newsletter-content">
                <h4 class="text-uppercase text-dark">Up to <span class="text-primary">20% Off</span></h4>
                <h2 class="font-weight-semi-bold">Sign up to <span>RIODE</span></h2>
                <p class="text-grey">Subscribe to the Riode eCommerce newsletter to receive timely updates from your
                favorite
                products.
                </p>
                <form action="#" method="get" class="input-wrapper input-wrapper-inline input-wrapper-round">
                <input type="email" class="form-control email" name="email" id="email2" placeholder="Email address here..." required>
                <button class="btn btn-dark" type="submit">SUBMIT</button>
                </form>
                <div class="form-checkbox justify-content-center">
                <input type="checkbox" class="custom-checkbox" id="hide-newsletter-popup" name="hide-newsletter-popup" required />
                <label for="hide-newsletter-popup">Don't show this popup again</label>
                </div>
            </div>
        </div>

        {{--  --}}
        <script src="{{asset('theme/vendor/jquery/jquery.min.js')}}"></script>
        <script src="{{asset('theme/vendor/sticky/sticky.min.js')}}"></script>
        <script src="{{asset('theme/vendor/imagesloaded/imagesloaded.pkgd.min.js')}}"></script>
        <script src="{{asset('theme/vendor/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
        <script src="{{asset('theme/vendor/owl-carousel/owl.carousel.min.js')}}"></script>
        <script src="{{asset('theme/vendor/elevatezoom/jquery.elevatezoom.min.js')}}"></script>
        <script src="{{asset('theme/vendor/photoswipe/photoswipe.min.js')}}"></script>
        <script src="{{asset('theme/vendor/photoswipe/photoswipe-ui-default.min.js')}}"></script>
        {{--  --}}
        <script src="{{asset('theme/js/main.min.js')}}"></script>
    </body>
   @endforeach
</html>
