@extends('front.master')

@section('content')
<main class="main home mt-4">
    <div class="page-content">
       <section class="intro-slider animation-slider owl-carousel owl-theme row cols-1 gutter-no" data-owl-options="{
          'items': 1,
          'loop': true,
          'nav': false,
          'dots': false,
          'responsive': {
          '992': {
          'nav': true
          }
          }
          }">
          <div class="intro-slide1 banner banner-fixed" style="background-color: #e6e8e9;">
             <figure>
                <img src="{{asset('theme/images/demos/demo29/slides/1.jpg')}}" alt="banner" width="1903" height="469" />
             </figure>
             <div class="container">
                <div class="banner-content y-50">
                   <h3 class="banner-subtitle d-inline-block slide-animate text-uppercase" data-animation-options="{
                      'name': 'fadeInUpShorter',
                      'duration': '1.5s',
                      'delay': '.3s'
                      }">From Online Store</h3>
                   <h2 class="banner-title slide-animate" data-animation-options="{
                      'name': 'fadeInUpShorter',
                      'duration': '1.3s',
                      'delay': '.4s'
                      }">Originals Comper Star. Xbox</h2>
                   <p class="font-primary mb-6 slide-animate" data-animation-options="{
                      'name': 'fadeInUpShorter',
                      'duration': '1.2s',
                      'delay': '.5s'
                      }">Free Shipping on all orders over $320.00</p>
                   <a href="demo29-shop.html" class="btn btn-rounded btn-dark btn-outline mb-1 slide-animate" data-animation-options="{
                      'name': 'fadeInUpShorter',
                      'duration': '1s',
                      'delay': '.6s'
                      }">Shop Now<i class="d-icon-arrow-right"></i></a>
                </div>
             </div>
          </div>
          <div class="intro-slide2 banner banner-fixed" style="background-color: #e6e8e9;">
             <figure>
                <img src="{{asset('theme/images/demos/demo29/slides/2.jpg')}}" alt="banner" width="1903" height="469" />
             </figure>
             <div class="container">
                <div class="banner-content y-50 ml-auto text-right">
                   <div class="slide-animate" data-animation-options="{
                      'name': 'blurIn',
                      'duration': '.8s'
                      }">
                      <h4 class="banner-subtitle text-uppercase">Lifestyle Collection</h4>
                      <h2 class="banner-title"><b class="text-primary">Sophisticated</b>Domestic Electric
                         Machines
                      </h2>
                      <a href="demo29-shop.html" class="btn btn-rounded btn-outline btn-dark">Shop now<i class="d-icon-arrow-right"></i></a>
                   </div>
                </div>
             </div>
          </div>
       </section>
       <div class="container">
          <section class="banners-grid pt-10 mt-6 pb-6">
             <h2 class="title title-simple">Special Offers</h2>
             <div class="row grid">
                <div class="grid-item col-lg-6 height-x2">
                   <div class="banner banner1 banner-fixed overlay-light appear-animate" data-animation-options="{
                      'name': 'fadeInRightShorter'
                      }">
                      <figure>
                         <img src="{{asset('theme/images/demos/demo29/banner/2.jpg')}}" alt="banner image" width="680" height="508">
                      </figure>
                      <div class="banner-content top w-100 text-center">
                         <h4 class="banner-subtitle text-uppercase mb-2">
                            Deals and Promotion
                         </h4>
                         <h3 class="banner-title font-weight-bold text-uppercase">Camera &amp; Lens</h3>
                         <h5 class="text-uppercase">Start at <span class="text-primary">$250.00</span></h5>
                      </div>
                      <div class="banner-content bottom w-100 text-center">
                         <a href="demo29-shop.html" class="btn btn-rounded btn-outline btn-dark mb-4">Shop Now<i class="d-icon-arrow-right"></i></a>
                      </div>
                   </div>
                </div>
                <div class="grid-item col-lg-3 col-xs-6 height-x1">
                   <div class="banner banner2 banner-fixed overlay-light content-middle appear-animate" data-animation-options="{
                      'name': 'fadeInDownShorter'
                      }">
                      <figure>
                         <img src="{{asset('theme/images/demos/demo29/banner/3.jpg')}}" alt="banner image" width="280" height="207">
                      </figure>
                      <div class="banner-content">
                         <h5 class="ls-l mb-1 opacity-8">Featured Event</h5>
                         <h4 class="banner-subtitle text-uppercase ls-s mb-0">Black Friday</h4>
                         <h3 class="banner-title text-primary font-weight-bold ls-s">Sale</h3>
                         <a href="demo29-shop.html" class="btn btn-link btn-underline btn-dark">Shop
                         Now<i class="d-icon-arrow-right"></i></a>
                      </div>
                   </div>
                </div>
                <div class="grid-item col-lg-3 col-xs-6 height-x2">
                   <div class="banner banner4 banner-fixed overlay-dark appear-animate" data-animation-options="{
                      'name': 'fadeInLeftShorter'
                      }">
                      <figure>
                         <img src="{{asset('theme/images/demos/demo29/banner/5.jpg')}}" alt="banner image" width="280" height="434">
                      </figure>
                      <div class="banner-content top w-100 text-center">
                         <p class="banner-date text-right text-white font-weight-bold">
                            18-25<sup>TH</sup>MAY
                         </p>
                         <h5 class="banner-subtitle text-uppercase text-white">
                            The Season To Play
                         </h5>
                         <h3 class="banner-title font-weight-bold text-white text-uppercase">Up To 50%</h3>
                         <h4 class="text-white text-uppercase font-weight-normal">Xbox one wireless
                            controller
                         </h4>
                      </div>
                   </div>
                </div>
                <div class="grid-item col-lg-3 col-xs-6 height-x1">
                   <div class="banner banner3 banner-fixed overlay-dark content-middle appear-animate" data-animation-options="{
                      'name': 'fadeInUpShorter'
                      }">
                      <figure>
                         <img src="{{asset('theme/images/demos/demo29/banner/4.jpg')}}" alt="banner image" width="280" height="207">
                      </figure>
                      <div class="banner-content">
                         <h5 class="ls-l text-white mb-1 opacity-8">Best Seller</h5>
                         <h4 class="banner-subtitle text-uppercase ls-s text-white mb-1">Electronic</h4>
                         <h3 class="banner-title font-weight-bold text-white ls-s ">20% Off</h3>
                         <a href="demo29-shop.html" class="btn btn-link btn-underline btn-white">Shop
                         Now<i class="d-icon-arrow-right"></i></a>
                      </div>
                   </div>
                </div>
                <div class="grid-space col-lg-3 col-xs-6"></div>
             </div>
          </section>
       </div>
       <section class="grey-section product-wrapper mt-10 pt-10 pb-4">
          <div class="container pt-2">
             <div class="title-wrapper with-filters d-flex align-items-center justify-content-between pt-2 mb-4">
                <h2 class="title title-simple mb-md-0 appear-animate" data-animation-options="{'name': 'fadeInLeftShorter','delay': '.2s'}">New Arrivals</h2>
                <ul class="nav-filters product-filters font-weight-semi-bold mr-0 appear-animate" data-animation-options="{'name': 'fadeInRightShorter','delay': '.2s'}" data-target="#products-1">
                   <li><a href="#" class="nav-filter active" data-filter="*">All</a></li>
                   <li><a href="#" class="nav-filter" data-filter=".headphones">Headphones</a></li>
                   <li><a href="#" class="nav-filter" data-filter=".accessories">Accessories</a></li>
                   <li><a href="#" class="nav-filter" data-filter=".speakers">Speakers</a></li>
                </ul>
             </div>
             <div id="products-1" class="row grid products-grid pb-2 mb-8 appear-animate" data-grid-options="{
                'layoutMode': 'fitRows'
                }">
                <div class="grid-item col-xl-2 col-lg-3 col-sm-4 col-6 accessories speakers">
                   <div class="product text-center">
                      <figure class="product-media">
                         <a href="demo29-product.html">
                         <img src="{{asset('theme/images/demos/demo29/products/1.jpg')}}" alt="product" width="168" height="190">
                         </a>
                         <div class="product-action-vertical">
                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal" data-target="#addCartModal" title="Add to cart"><i class="d-icon-bag"></i></a>
                            <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i class="d-icon-heart"></i></a>
                            <a href="#" class="btn-product-icon btn-compare" title="Add to wishlist"><i class="d-icon-compare"></i></a>
                         </div>
                         <div class="product-action">
                            <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                            View</a>
                         </div>
                      </figure>
                      <div class="product-details">
                         <div class="product-cat">
                            <a href="demo29-shop.html">categories</a>
                         </div>
                         <h3 class="product-name">
                            <a href="demo29-product.html">Apple Laptop</a>
                         </h3>
                         <div class="product-price">
                            <ins class="new-price">$199.00</ins><del class="old-price">$210.00</del>
                         </div>
                         <div class="ratings-container">
                            <div class="ratings-full">
                               <span class="ratings" style="width:100%"></span>
                               <span class="tooltiptext tooltip-top"></span>
                            </div>
                            <a href="demo29-product.html" class="rating-reviews">( 2 )</a>
                         </div>
                      </div>
                   </div>
                </div>
                <div class="grid-item col-xl-2 col-lg-3 col-sm-4 col-6 speakers">
                   <div class="product text-center">
                      <figure class="product-media">
                         <a href="demo29-product.html">
                         <img src="{{asset('theme/images/demos/demo29/products/2.jpg')}}" alt="product" width="168" height="190">
                         </a>
                         <div class="product-action-vertical">
                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal" data-target="#addCartModal" title="Add to cart"><i class="d-icon-bag"></i></a>
                            <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i class="d-icon-heart"></i></a>
                            <a href="#" class="btn-product-icon btn-compare" title="Add to wishlist"><i class="d-icon-compare"></i></a>
                         </div>
                         <div class="product-action">
                            <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                            View</a>
                         </div>
                      </figure>
                      <div class="product-details">
                         <div class="product-cat">
                            <a href="demo29-shop.html">categories</a>
                         </div>
                         <h3 class="product-name">
                            <a href="demo29-product.html">Bluetooth Speaker</a>
                         </h3>
                         <div class="product-price">
                            <ins class="new-price">$199.00</ins><del class="old-price">$210.00</del>
                         </div>
                         <div class="ratings-container">
                            <div class="ratings-full">
                               <span class="ratings" style="width:100%"></span>
                               <span class="tooltiptext tooltip-top"></span>
                            </div>
                            <a href="demo29-product.html" class="rating-reviews">( 2 )</a>
                         </div>
                      </div>
                   </div>
                </div>
                <div class="grid-item col-xl-2 col-lg-3 col-sm-4 col-6 accessories headphones speakers">
                   <div class="product text-center">
                      <figure class="product-media">
                         <a href="demo29-product.html">
                         <img src="{{asset('theme/images/demos/demo29/products/3.jpg')}}" alt="product" width="168" height="190">
                         </a>
                         <div class="product-action-vertical">
                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal" data-target="#addCartModal" title="Add to cart"><i class="d-icon-bag"></i></a>
                            <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i class="d-icon-heart"></i></a>
                            <a href="#" class="btn-product-icon btn-compare" title="Add to wishlist"><i class="d-icon-compare"></i></a>
                         </div>
                         <div class="product-action">
                            <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                            View</a>
                         </div>
                      </figure>
                      <div class="product-details">
                         <div class="product-cat">
                            <a href="demo29-shop.html">categories</a>
                         </div>
                         <h3 class="product-name">
                            <a href="demo29-product.html">Galaxy Tablet 10inchi</a>
                         </h3>
                         <div class="product-price">
                            <ins class="new-price">$199.00</ins><del class="old-price">$210.00</del>
                         </div>
                         <div class="ratings-container">
                            <div class="ratings-full">
                               <span class="ratings" style="width:100%"></span>
                               <span class="tooltiptext tooltip-top"></span>
                            </div>
                            <a href="demo29-product.html" class="rating-reviews">( 2 )</a>
                         </div>
                      </div>
                   </div>
                </div>
                <div class="grid-item col-xl-2 col-lg-3 col-sm-4 col-6 headphones accessories">
                   <div class="product text-center">
                      <figure class="product-media">
                         <a href="demo29-product.html">
                         <img src="{{asset('theme/images/demos/demo29/products/4.jpg')}}" alt="product" width="168" height="190">
                         </a>
                         <div class="product-action-vertical">
                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal" data-target="#addCartModal" title="Add to cart"><i class="d-icon-bag"></i></a>
                            <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i class="d-icon-heart"></i></a>
                            <a href="#" class="btn-product-icon btn-compare" title="Add to wishlist"><i class="d-icon-compare"></i></a>
                         </div>
                         <div class="product-action">
                            <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                            View</a>
                         </div>
                      </figure>
                      <div class="product-details">
                         <div class="product-cat">
                            <a href="demo29-shop.html">categories</a>
                         </div>
                         <h3 class="product-name">
                            <a href="demo29-product.html">SAMSUNG SmartPhone</a>
                         </h3>
                         <div class="product-price">
                            <ins class="new-price">$199.00</ins><del class="old-price">$210.00</del>
                         </div>
                         <div class="ratings-container">
                            <div class="ratings-full">
                               <span class="ratings" style="width:100%"></span>
                               <span class="tooltiptext tooltip-top"></span>
                            </div>
                            <a href="demo29-product.html" class="rating-reviews">( 2 )</a>
                         </div>
                      </div>
                   </div>
                </div>
                <div class="grid-item col-xl-2 col-lg-3 col-sm-4 col-6 speakers">
                   <div class="product text-center">
                      <figure class="product-media">
                         <a href="demo29-product.html">
                         <img src="{{asset('theme/images/demos/demo29/products/5.jpg')}}" alt="product" width="168" height="190">
                         </a>
                         <div class="product-action-vertical">
                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal" data-target="#addCartModal" title="Add to cart"><i class="d-icon-bag"></i></a>
                            <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i class="d-icon-heart"></i></a>
                            <a href="#" class="btn-product-icon btn-compare" title="Add to wishlist"><i class="d-icon-compare"></i></a>
                         </div>
                         <div class="product-action">
                            <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                            View</a>
                         </div>
                      </figure>
                      <div class="product-details">
                         <div class="product-cat">
                            <a href="demo29-shop.html">categories</a>
                         </div>
                         <h3 class="product-name">
                            <a href="demo29-product.html">Bluetooth Speaker</a>
                         </h3>
                         <div class="product-price">
                            <ins class="new-price">$199.00</ins><del class="old-price">$210.00</del>
                         </div>
                         <div class="ratings-container">
                            <div class="ratings-full">
                               <span class="ratings" style="width:100%"></span>
                               <span class="tooltiptext tooltip-top"></span>
                            </div>
                            <a href="demo29-product.html" class="rating-reviews">( 2 )</a>
                         </div>
                      </div>
                   </div>
                </div>
                <div class="grid-item col-xl-2 col-lg-3 col-sm-4 col-6 speakers headphones accessories">
                   <div class="product text-center">
                      <figure class="product-media">
                         <a href="demo29-product.html">
                         <img src="{{asset('theme/images/demos/demo29/products/6.jpg')}}" alt="product" width="168" height="190">
                         </a>
                         <div class="product-action-vertical">
                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal" data-target="#addCartModal" title="Add to cart"><i class="d-icon-bag"></i></a>
                            <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i class="d-icon-heart"></i></a>
                            <a href="#" class="btn-product-icon btn-compare" title="Add to wishlist"><i class="d-icon-compare"></i></a>
                         </div>
                         <div class="product-action">
                            <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                            View</a>
                         </div>
                      </figure>
                      <div class="product-details">
                         <div class="product-cat">
                            <a href="demo29-shop.html">categories</a>
                         </div>
                         <h3 class="product-name">
                            <a href="demo29-product.html">Apple Sports Watch</a>
                         </h3>
                         <div class="product-price">
                            <ins class="new-price">$199.00</ins><del class="old-price">$210.00</del>
                         </div>
                         <div class="ratings-container">
                            <div class="ratings-full">
                               <span class="ratings" style="width:100%"></span>
                               <span class="tooltiptext tooltip-top"></span>
                            </div>
                            <a href="demo29-product.html" class="rating-reviews">( 2 )</a>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
             <div class="title-wrapper with-filters d-flex align-items-center justify-content-between pt-1 mb-4">
                <h2 class="title title-simple mb-md-0 appear-animate" data-animation-options="{'name': 'fadeInLeftShorter','delay': '.2s'}">Best Sellers</h2>
                <ul class="nav-filters product-filters font-weight-semi-bold mr-0 appear-animate" data-animation-options="{'name': 'fadeInRightShorter','delay': '.2s'}" data-target="#products-2">
                   <li><a href="#" class="nav-filter active" data-filter="*">All</a></li>
                   <li><a href="#" class="nav-filter" data-filter=".headphones">Headphones</a></li>
                   <li><a href="#" class="nav-filter" data-filter=".accessories">Accessories</a></li>
                   <li><a href="#" class="nav-filter" data-filter=".speakers">Speakers</a></li>
                </ul>
             </div>
             <div id="products-2" class="row grid products-grid mb-10 appear-animate" data-grid-options="{
                'layoutMode': 'fitRows'
                }">
                <div class="grid-item col-xl-2 col-lg-3 col-sm-4 col-6 headphones accessories">
                   <div class="product text-center">
                      <figure class="product-media">
                         <a href="demo29-product.html">
                         <img src="{{asset('theme/images/demos/demo29/products/7.jpg')}}" alt="product" width="168" height="190">
                         </a>
                         <div class="product-action-vertical">
                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal" data-target="#addCartModal" title="Add to cart"><i class="d-icon-bag"></i></a>
                            <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i class="d-icon-heart"></i></a>
                            <a href="#" class="btn-product-icon btn-compare" title="Add to wishlist"><i class="d-icon-compare"></i></a>
                         </div>
                         <div class="product-action">
                            <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                            View</a>
                         </div>
                      </figure>
                      <div class="product-details">
                         <div class="product-cat">
                            <a href="demo29-shop.html">categories</a>
                         </div>
                         <h3 class="product-name">
                            <a href="demo29-product.html">Classic Radio</a>
                         </h3>
                         <div class="product-price">
                            <ins class="new-price">$199.00</ins><del class="old-price">$210.00</del>
                         </div>
                         <div class="ratings-container">
                            <div class="ratings-full">
                               <span class="ratings" style="width:100%"></span>
                               <span class="tooltiptext tooltip-top"></span>
                            </div>
                            <a href="demo29-product.html" class="rating-reviews">( 2 )</a>
                         </div>
                      </div>
                   </div>
                </div>
                <div class="grid-item col-xl-2 col-lg-3 col-sm-4 col-6 accessories">
                   <div class="product text-center">
                      <figure class="product-media">
                         <a href="demo29-product.html">
                         <img src="{{asset('theme/images/demos/demo29/products/8.jpg')}}" alt="product" width="168" height="190">
                         </a>
                         <div class="product-action-vertical">
                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal" data-target="#addCartModal" title="Add to cart"><i class="d-icon-bag"></i></a>
                            <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i class="d-icon-heart"></i></a>
                            <a href="#" class="btn-product-icon btn-compare" title="Add to wishlist"><i class="d-icon-compare"></i></a>
                         </div>
                         <div class="product-action">
                            <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                            View</a>
                         </div>
                      </figure>
                      <div class="product-details">
                         <div class="product-cat">
                            <a href="demo29-shop.html">categories</a>
                         </div>
                         <h3 class="product-name">
                            <a href="demo29-product.html">HP Laptop</a>
                         </h3>
                         <div class="product-price">
                            <ins class="new-price">$199.00</ins><del class="old-price">$210.00</del>
                         </div>
                         <div class="ratings-container">
                            <div class="ratings-full">
                               <span class="ratings" style="width:100%"></span>
                               <span class="tooltiptext tooltip-top"></span>
                            </div>
                            <a href="demo29-product.html" class="rating-reviews">( 2 )</a>
                         </div>
                      </div>
                   </div>
                </div>
                <div class="grid-item col-xl-2 col-lg-3 col-sm-4 col-6 speakers accessories headphones">
                   <div class="product text-center">
                      <figure class="product-media">
                         <a href="demo29-product.html">
                         <img src="{{asset('theme/images/demos/demo29/products/9.jpg')}}" alt="product" width="168" height="190">
                         </a>
                         <div class="product-action-vertical">
                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal" data-target="#addCartModal" title="Add to cart"><i class="d-icon-bag"></i></a>
                            <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i class="d-icon-heart"></i></a>
                            <a href="#" class="btn-product-icon btn-compare" title="Add to wishlist"><i class="d-icon-compare"></i></a>
                         </div>
                         <div class="product-action">
                            <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                            View</a>
                         </div>
                      </figure>
                      <div class="product-details">
                         <div class="product-cat">
                            <a href="demo29-shop.html">categories</a>
                         </div>
                         <h3 class="product-name">
                            <a href="demo29-product.html">Apple Watch</a>
                         </h3>
                         <div class="product-price">
                            <ins class="new-price">$199.00</ins><del class="old-price">$210.00</del>
                         </div>
                         <div class="ratings-container">
                            <div class="ratings-full">
                               <span class="ratings" style="width:100%"></span>
                               <span class="tooltiptext tooltip-top"></span>
                            </div>
                            <a href="demo29-product.html" class="rating-reviews">( 2 )</a>
                         </div>
                      </div>
                   </div>
                </div>
                <div class="grid-item col-xl-2 col-lg-3 col-sm-4 col-6 headphones speakers accessories">
                   <div class="product text-center">
                      <figure class="product-media">
                         <a href="demo29-product.html">
                         <img src="{{asset('theme/images/demos/demo29/products/10.jpg')}}" alt="product" width="168" height="190">
                         </a>
                         <div class="product-action-vertical">
                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal" data-target="#addCartModal" title="Add to cart"><i class="d-icon-bag"></i></a>
                            <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i class="d-icon-heart"></i></a>
                            <a href="#" class="btn-product-icon btn-compare" title="Add to wishlist"><i class="d-icon-compare"></i></a>
                         </div>
                         <div class="product-action">
                            <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                            View</a>
                         </div>
                      </figure>
                      <div class="product-details">
                         <div class="product-cat">
                            <a href="demo29-shop.html">categories</a>
                         </div>
                         <h3 class="product-name">
                            <a href="demo29-product.html">Apple Laptop</a>
                         </h3>
                         <div class="product-price">
                            <ins class="new-price">$199.00</ins><del class="old-price">$210.00</del>
                         </div>
                         <div class="ratings-container">
                            <div class="ratings-full">
                               <span class="ratings" style="width:100%"></span>
                               <span class="tooltiptext tooltip-top"></span>
                            </div>
                            <a href="demo29-product.html" class="rating-reviews">( 2 )</a>
                         </div>
                      </div>
                   </div>
                </div>
                <div class="grid-item col-xl-2 col-lg-3 col-sm-4 col-6 accessories">
                   <div class="product text-center">
                      <figure class="product-media">
                         <a href="demo29-product.html">
                         <img src="{{asset('theme/images/demos/demo29/products/11.jpg')}}" alt="product" width="168" height="190">
                         </a>
                         <div class="product-action-vertical">
                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal" data-target="#addCartModal" title="Add to cart"><i class="d-icon-bag"></i></a>
                            <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i class="d-icon-heart"></i></a>
                            <a href="#" class="btn-product-icon btn-compare" title="Add to wishlist"><i class="d-icon-compare"></i></a>
                         </div>
                         <div class="product-action">
                            <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                            View</a>
                         </div>
                      </figure>
                      <div class="product-details">
                         <div class="product-cat">
                            <a href="demo29-shop.html">categories</a>
                         </div>
                         <h3 class="product-name">
                            <a href="demo29-product.html">Bluetooth Speaker</a>
                         </h3>
                         <div class="product-price">
                            <ins class="new-price">$199.00</ins><del class="old-price">$210.00</del>
                         </div>
                         <div class="ratings-container">
                            <div class="ratings-full">
                               <span class="ratings" style="width:100%"></span>
                               <span class="tooltiptext tooltip-top"></span>
                            </div>
                            <a href="demo29-product.html" class="rating-reviews">( 2 )</a>
                         </div>
                      </div>
                   </div>
                </div>
                <div class="grid-item col-xl-2 col-lg-3 col-sm-4 col-6 speakers">
                   <div class="product text-center">
                      <figure class="product-media">
                         <a href="demo29-product.html">
                         <img src="{{asset('theme/images/demos/demo29/products/12.jpg')}}" alt="product" width="168" height="190">
                         </a>
                         <div class="product-action-vertical">
                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal" data-target="#addCartModal" title="Add to cart"><i class="d-icon-bag"></i></a>
                            <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i class="d-icon-heart"></i></a>
                            <a href="#" class="btn-product-icon btn-compare" title="Add to wishlist"><i class="d-icon-compare"></i></a>
                         </div>
                         <div class="product-action">
                            <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                            View</a>
                         </div>
                      </figure>
                      <div class="product-details">
                         <div class="product-cat">
                            <a href="demo29-shop.html">categories</a>
                         </div>
                         <h3 class="product-name">
                            <a href="demo29-product.html">SAMSUNG Smart Phone</a>
                         </h3>
                         <div class="product-price">
                            <ins class="new-price">$199.00</ins><del class="old-price">$210.00</del>
                         </div>
                         <div class="ratings-container">
                            <div class="ratings-full">
                               <span class="ratings" style="width:100%"></span>
                               <span class="tooltiptext tooltip-top"></span>
                            </div>
                            <a href="demo29-product.html" class="rating-reviews">( 2 )</a>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </section>
       <section class="banner-group pt-10 mt-6 pb-2 mb-10">
          <div class="container">
             <div class="owl-carousel owl-theme row cols-md-3 cols-sm-2 mb-4" data-owl-options="{
                'items': 1,
                'margin': 20,
                'responsive': {
                '576': {
                'items': 2
                },
                '768': {
                'items': 3
                }
                }
                }">
                <div class="category category-banner category-absolute category-group-icon text-white chevron-inherit appear-animate" data-animation-options="{
                   'name': 'fadeInLeftShorter',
                   'delay': '.3s'
                   }" style="background: #2C3642;">
                   <figure class="category-media">
                      <img src="{{asset('theme/images/demos/demo29/banner/6.jpg')}}" alt="banner image" width="380" height="213">
                   </figure>
                   <div class="category-content">
                      <h4>Headphones</h4>
                      <ul class="category-list">
                         <li><a href="demo29-shop.html">Samsung</a></li>
                         <li><a href="demo29-shop.html">American Dreams</a></li>
                         <li><a href="demo29-shop.html">Apple</a></li>
                         <li><a href="demo29-shop.html">Acer</a></li>
                         <li><a href="demo29-shop.html">Arcade 1 UP</a></li>
                      </ul>
                   </div>
                </div>
                <div class="category category-banner category-absolute category-group-icon appear-animate" data-animation-options="{
                   'name': 'fadeIn',
                   'delay': '.3s'
                   }" style="background: #e6e6e6;">
                   <figure class="category-media">
                      <img src="{{asset('theme/images/demos/demo29/banner/7.jpg')}}" alt="banner image" width="380" height="213">
                   </figure>
                   <div class="category-content">
                      <h4>Cameras</h4>
                      <ul class="category-list">
                         <li><a href="demo29-shop.html">Samsung</a></li>
                         <li><a href="demo29-shop.html">Nikon D850</a></li>
                         <li><a href="demo29-shop.html">Sony</a></li>
                         <li><a href="demo29-shop.html">Canon EOS 80D</a></li>
                         <li><a href="demo29-shop.html">Lumix</a></li>
                      </ul>
                   </div>
                </div>
                <div class="category category-banner category-absolute category-group-icon text-white appear-animate" data-animation-options="{
                   'name': 'fadeInRightShorter',
                   'delay': '.3s'
                   }" style="background: #6a6c71;">
                   <figure class="category-media">
                      <img src="{{asset('theme/images/demos/demo29/banner/8.jpg')}}" alt="banner image" width="380" height="213">
                   </figure>
                   <div class="category-content">
                      <h4>Watches</h4>
                      <ul class="category-list">
                         <li><a href="demo29-shop.html">Dell</a></li>
                         <li><a href="demo29-shop.html">Lenovo</a></li>
                         <li><a href="demo29-shop.html">Apple</a></li>
                         <li><a href="demo29-shop.html">Sony</a></li>
                         <li><a href="demo29-shop.html">Samsung</a></li>
                      </ul>
                   </div>
                </div>
             </div>
             <div class="row">
                <div class="col-md-6 mb-4">
                   <div class="banner banner5 banner-fixed overlay-light content-middle appear-animate" data-animation-options="{
                      'name': 'fadeInUpShorter',
                      'delay': '.4s'
                      }">
                      <figure>
                         <img src="{{asset('theme/images/demos/demo29/banner/9.jpg')}}" alt="banner image" width="280" height="207">
                      </figure>
                      <div class="banner-content pl-8">
                         <h4 class="banner-subtitle text-white font-weight-bold">Flash Sale <span class="text-primary">50%
                            OFF</span>
                         </h4>
                         <h3 class="banner-title text-white font-weight-bold">Wireless Earphone</h3>
                         <p class="text-white font-weight-normal">
                            Only until the end of this Week
                         </p>
                         <a href="demo29-shop.html" class="btn btn-rounded btn-white btn-outline">Shop
                         Now<i class="d-icon-arrow-right"></i></a>
                      </div>
                   </div>
                </div>
                <div class="col-md-6 mb-4">
                   <div class="banner banner6 banner-fixed overlay-light content-middle appear-animate" data-animation-options="{
                      'name': 'fadeInUpShorter',
                      'delay': '.6s'
                      }">
                      <figure>
                         <img src="{{asset('theme/images/demos/demo29/banner/10.jpg')}}" alt="banner image" width="280" height="207">
                      </figure>
                      <div class="banner-content pl-8">
                         <h4 class="banner-subtitle text-white font-weight-normal mb-0">Best Sellers
                            Store
                         </h4>
                         <h3 class="banner-title text-white font-weight-bold">Up To 30% OFF</h3>
                         <p class="text-white font-weight-normal opacity-8">
                            Feel the charm in this spot
                         </p>
                         <a href="demo29-shop.html" class="btn btn-rounded btn-white btn-outline">Shop
                         Now<i class="d-icon-arrow-right"></i></a>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </section>
       <section class="grey-section pt-10 pb-10">
          <div class="container pt-6 mb-4">
             <h2 class="title text-center d-block appear-animate" data-animation-options="{'name': 'fadeIn', 'delay': '.3s'}">Our
                Featured
             </h2>
             <div class="row mb-10 pb-4 appear-animate">
                <div class="col-md-6 col-lg-4 col-xl-4 col-xxl-3">
                   <div class="product product-list-sm">
                      <figure class="product-media">
                         <a href="demo29-product.html">
                         <img src="{{asset('theme/images/demos/demo29/products/13.jpg')}}" alt="product" width="162" height="191">
                         </a>
                      </figure>
                      <div class="product-details">
                         <div class="product-cat">
                            <a href="demo29-shop.html">categories</a>
                         </div>
                         <h3 class="product-name">
                            <a href="demo29-product.html">Virtual 3D Glasses</a>
                         </h3>
                         <div class="product-price">
                            <span class="price">$19.00</span>
                         </div>
                         <div class="ratings-container">
                            <div class="ratings-full">
                               <span class="ratings" style="width:100%"></span>
                               <span class="tooltiptext tooltip-top">5.00</span>
                            </div>
                         </div>
                         <a href="#" class="btn-product btn-cart" data-toggle="modal" data-target="#addCartModal" title="Add to cart"><i class="d-icon-bag"></i><span>add to cart</span></a>
                      </div>
                   </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-4 col-xxl-3">
                   <div class="product product-list-sm">
                      <figure class="product-media">
                         <a href="demo29-product.html">
                         <img src="{{asset('theme/images/demos/demo29/products/14.jpg')}}" alt="product" width="162" height="191">
                         </a>
                      </figure>
                      <div class="product-details">
                         <div class="product-cat">
                            <a href="demo29-shop.html">categories</a>
                         </div>
                         <h3 class="product-name">
                            <a href="demo29-product.html">Tablet 8inchi</a>
                         </h3>
                         <div class="product-price">
                            <span class="price">$19.00</span>
                         </div>
                         <div class="ratings-container">
                            <div class="ratings-full">
                               <span class="ratings" style="width:100%"></span>
                               <span class="tooltiptext tooltip-top">5.00</span>
                            </div>
                         </div>
                         <a href="#" class="btn-product btn-cart" data-toggle="modal" data-target="#addCartModal" title="Add to cart"><i class="d-icon-bag"></i><span>add to cart</span></a>
                      </div>
                   </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-4 col-xxl-3">
                   <div class="product product-list-sm product-variable">
                      <figure class="product-media">
                         <a href="demo29-product.html">
                         <img src="{{asset('theme/images/demos/demo29/products/15.jpg')}}" alt="product" width="162" height="191">
                         </a>
                      </figure>
                      <div class="product-details">
                         <div class="product-cat">
                            <a href="demo29-shop.html">categories</a>
                         </div>
                         <h3 class="product-name">
                            <a href="demo29-product.html">Electronics Waffle Iron</a>
                         </h3>
                         <div class="product-price">
                            <span class="price">$19.00-$21.00</span>
                         </div>
                         <div class="ratings-container">
                            <div class="ratings-full">
                               <span class="ratings" style="width:100%"></span>
                               <span class="tooltiptext tooltip-top">5.00</span>
                            </div>
                         </div>
                         <a href="demo29-product.html" class="btn-product btn-cart" title="Select Options"><span>Select
                         Options</span></a>
                      </div>
                   </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-4 col-xxl-3">
                   <div class="product product-list-sm">
                      <figure class="product-media">
                         <a href="demo29-product.html">
                         <img src="{{asset('theme/images/demos/demo29/products/16.jpg')}}" alt="product" width="162" height="191">
                         </a>
                      </figure>
                      <div class="product-details">
                         <div class="product-cat">
                            <a href="demo29-shop.html">categories</a>
                         </div>
                         <h3 class="product-name">
                            <a href="demo29-product.html">Tiny USB Camera</a>
                         </h3>
                         <div class="product-price">
                            <span class="price">$19.00</span>
                         </div>
                         <div class="ratings-container">
                            <div class="ratings-full">
                               <span class="ratings" style="width:100%"></span>
                               <span class="tooltiptext tooltip-top">5.00</span>
                            </div>
                         </div>
                         <a href="#" class="btn-product btn-cart" data-toggle="modal" data-target="#addCartModal" title="Add to cart"><i class="d-icon-bag"></i><span>add to cart</span></a>
                      </div>
                   </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-4 col-xxl-3">
                   <div class="product product-list-sm">
                      <figure class="product-media">
                         <a href="demo29-product.html">
                         <img src="{{asset('theme/images/demos/demo29/products/17.jpg')}}" alt="product" width="162" height="191">
                         </a>
                      </figure>
                      <div class="product-details">
                         <div class="product-cat">
                            <a href="demo29-shop.html">categories</a>
                         </div>
                         <h3 class="product-name">
                            <a href="demo29-product.html">Apple Sports Watch</a>
                         </h3>
                         <div class="product-price">
                            <span class="price">$19.00</span>
                         </div>
                         <div class="ratings-container">
                            <div class="ratings-full">
                               <span class="ratings" style="width:100%"></span>
                               <span class="tooltiptext tooltip-top">5.00</span>
                            </div>
                         </div>
                         <a href="#" class="btn-product btn-cart" data-toggle="modal" data-target="#addCartModal" title="Add to cart"><i class="d-icon-bag"></i><span>add to cart</span></a>
                      </div>
                   </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-4 col-xxl-3">
                   <div class="product product-list-sm">
                      <figure class="product-media">
                         <a href="demo29-product.html">
                         <img src="{{asset('theme/images/demos/demo29/products/18.jpg')}}" alt="product" width="162" height="191">
                         </a>
                      </figure>
                      <div class="product-details">
                         <div class="product-cat">
                            <a href="demo29-shop.html">categories</a>
                         </div>
                         <h3 class="product-name">
                            <a href="demo29-product.html">Virtual 3D Glasses</a>
                         </h3>
                         <div class="product-price">
                            <span class="price">$19.00</span>
                         </div>
                         <div class="ratings-container">
                            <div class="ratings-full">
                               <span class="ratings" style="width:100%"></span>
                               <span class="tooltiptext tooltip-top">5.00</span>
                            </div>
                         </div>
                         <a href="#" class="btn-product btn-cart" data-toggle="modal" data-target="#addCartModal" title="Add to cart"><i class="d-icon-bag"></i><span>add to cart</span></a>
                      </div>
                   </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-4 col-xxl-3">
                   <div class="product product-list-sm">
                      <figure class="product-media">
                         <a href="demo29-product.html">
                         <img src="{{asset('theme/images/demos/demo29/products/14.jpg')}}" alt="product" width="162" height="191">
                         </a>
                      </figure>
                      <div class="product-details">
                         <div class="product-cat">
                            <a href="demo29-shop.html">categories</a>
                         </div>
                         <h3 class="product-name">
                            <a href="demo29-product.html">Tablet 8inchi</a>
                         </h3>
                         <div class="product-price">
                            <span class="price">$19.00</span>
                         </div>
                         <div class="ratings-container">
                            <div class="ratings-full">
                               <span class="ratings" style="width:100%"></span>
                               <span class="tooltiptext tooltip-top">5.00</span>
                            </div>
                         </div>
                         <a href="#" class="btn-product btn-cart" data-toggle="modal" data-target="#addCartModal" title="Add to cart"><i class="d-icon-bag"></i><span>add to cart</span></a>
                      </div>
                   </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-4 col-xxl-3">
                   <div class="product product-list-sm product-variable">
                      <figure class="product-media">
                         <a href="demo29-product.html">
                         <img src="{{asset('theme/images/demos/demo29/products/15.jpg')}}" alt="product" width="162" height="191">
                         </a>
                      </figure>
                      <div class="product-details">
                         <div class="product-cat">
                            <a href="demo29-shop.html">categories</a>
                         </div>
                         <h3 class="product-name">
                            <a href="demo29-product.html">Electronics Waffle Iron</a>
                         </h3>
                         <div class="product-price">
                            <span class="price">$19.00-$21.00</span>
                         </div>
                         <div class="ratings-container">
                            <div class="ratings-full">
                               <span class="ratings" style="width:100%"></span>
                               <span class="tooltiptext tooltip-top">5.00</span>
                            </div>
                         </div>
                         <a href="demo29-product.html" class="btn-product btn-cart" title="Select Options"><span>Select
                         Options</span></a>
                      </div>
                   </div>
                </div>
             </div>
             <div class="row product-wrapper">
                <h2 class="title text-center d-block appear-animate" data-animation-options="{'name': 'fadeInUpShorter','delay': '.5s'}">Best of the Week</h2>
                <div class="owl-carousel owl-theme cols-md-6 cols-4 gutter-sm mb-4 appear-animate" data-owl-options="{
                   'items': 2,
                   'margin': 20,
                   'dots': false,
                   'responsive': {
                   '480': {
                   'items': 2
                   },
                   '576': {
                   'items': 3
                   },
                   '768': {
                   'items': 4
                   },
                   '992': {
                   'items': 6
                   }
                   }
                   }">
                   <div class="product text-center">
                      <figure class="product-media">
                         <a href="demo29-product.html">
                         <img src="{{asset('theme/images/demos/demo29/products/19.jpg')}}" alt="product" width="168" height="190">
                         </a>
                         <div class="product-action-vertical">
                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal" data-target="#addCartModal" title="Add to cart"><i class="d-icon-bag"></i></a>
                            <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i class="d-icon-heart"></i></a>
                         </div>
                         <div class="product-action">
                            <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                            View</a>
                         </div>
                      </figure>
                      <div class="product-details">
                         <div class="product-cat">
                            <a href="demo29-shop.html">categories</a>
                         </div>
                         <h3 class="product-name">
                            <a href="demo29-product.html">XP Digital Camera</a>
                         </h3>
                         <div class="product-price">
                            <ins class="new-price">$199.00</ins>
                         </div>
                         <div class="ratings-container">
                            <div class="ratings-full">
                               <span class="ratings" style="width:100%"></span>
                               <span class="tooltiptext tooltip-top"></span>
                            </div>
                            <a href="demo29-product.html" class="rating-reviews">( 2 )</a>
                         </div>
                      </div>
                   </div>
                   <div class="product text-center">
                      <figure class="product-media">
                         <a href="demo29-product.html">
                         <img src="{{asset('theme/images/demos/demo29/products/20.jpg')}}" alt="product" width="168" height="190">
                         </a>
                         <div class="product-action-vertical">
                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal" data-target="#addCartModal" title="Add to cart"><i class="d-icon-bag"></i></a>
                            <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i class="d-icon-heart"></i></a>
                         </div>
                         <div class="product-action">
                            <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                            View</a>
                         </div>
                      </figure>
                      <div class="product-details">
                         <div class="product-cat">
                            <a href="demo29-shop.html">categories</a>
                         </div>
                         <h3 class="product-name">
                            <a href="demo29-product.html">Canon Digital Camera 16x</a>
                         </h3>
                         <div class="product-price">
                            <ins class="new-price">$199.00</ins>
                         </div>
                         <div class="ratings-container">
                            <div class="ratings-full">
                               <span class="ratings" style="width:100%"></span>
                               <span class="tooltiptext tooltip-top"></span>
                            </div>
                            <a href="demo29-product.html" class="rating-reviews">( 2 )</a>
                         </div>
                      </div>
                   </div>
                   <div class="product text-center">
                      <figure class="product-media">
                         <a href="demo29-product.html">
                         <img src="{{asset('theme/images/demos/demo29/products/21.jpg')}}" alt="product" width="168" height="190">
                         </a>
                         <div class="product-action-vertical">
                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal" data-target="#addCartModal" title="Add to cart"><i class="d-icon-bag"></i></a>
                            <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i class="d-icon-heart"></i></a>
                         </div>
                         <div class="product-action">
                            <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                            View</a>
                         </div>
                      </figure>
                      <div class="product-details">
                         <div class="product-cat">
                            <a href="demo29-shop.html">categories</a>
                         </div>
                         <h3 class="product-name">
                            <a href="demo29-product.html">Sony Digital Camera</a>
                         </h3>
                         <div class="product-price">
                            <ins class="new-price">$199.00</ins>
                         </div>
                         <div class="ratings-container">
                            <div class="ratings-full">
                               <span class="ratings" style="width:100%"></span>
                               <span class="tooltiptext tooltip-top"></span>
                            </div>
                            <a href="demo29-product.html" class="rating-reviews">( 2 )</a>
                         </div>
                      </div>
                   </div>
                   <div class="product text-center">
                      <figure class="product-media">
                         <a href="demo29-product.html">
                         <img src="{{asset('theme/images/demos/demo29/products/22.jpg')}}" alt="product" width="168" height="190">
                         </a>
                         <div class="product-action-vertical">
                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal" data-target="#addCartModal" title="Add to cart"><i class="d-icon-bag"></i></a>
                            <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i class="d-icon-heart"></i></a>
                         </div>
                         <div class="product-action">
                            <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                            View</a>
                         </div>
                      </figure>
                      <div class="product-details">
                         <div class="product-cat">
                            <a href="demo29-shop.html">categories</a>
                         </div>
                         <h3 class="product-name">
                            <a href="demo29-product.html">Fashion Headphone</a>
                         </h3>
                         <div class="product-price">
                            <ins class="new-price">$199.00</ins>
                         </div>
                         <div class="ratings-container">
                            <div class="ratings-full">
                               <span class="ratings" style="width:100%"></span>
                               <span class="tooltiptext tooltip-top"></span>
                            </div>
                            <a href="demo29-product.html" class="rating-reviews">( 2 )</a>
                         </div>
                      </div>
                   </div>
                   <div class="product text-center">
                      <figure class="product-media">
                         <a href="demo29-product.html">
                         <img src="{{asset('theme/images/demos/demo29/products/23.jpg')}}" alt="product" width="168" height="190">
                         </a>
                         <div class="product-action-vertical">
                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal" data-target="#addCartModal" title="Add to cart"><i class="d-icon-bag"></i></a>
                            <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i class="d-icon-heart"></i></a>
                         </div>
                         <div class="product-action">
                            <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                            View</a>
                         </div>
                      </figure>
                      <div class="product-details">
                         <div class="product-cat">
                            <a href="demo29-shop.html">categories</a>
                         </div>
                         <h3 class="product-name">
                            <a href="demo29-product.html">Headphone</a>
                         </h3>
                         <div class="product-price">
                            <ins class="new-price">$199.00</ins>
                         </div>
                         <div class="ratings-container">
                            <div class="ratings-full">
                               <span class="ratings" style="width:100%"></span>
                               <span class="tooltiptext tooltip-top"></span>
                            </div>
                            <a href="demo29-product.html" class="rating-reviews">( 2 )</a>
                         </div>
                      </div>
                   </div>
                   <div class="product text-center">
                      <figure class="product-media">
                         <a href="demo29-product.html">
                         <img src="{{asset('theme/images/demos/demo29/products/24.jpg')}}" alt="product" width="168" height="190">
                         </a>
                         <div class="product-action-vertical">
                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal" data-target="#addCartModal" title="Add to cart"><i class="d-icon-bag"></i></a>
                            <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i class="d-icon-heart"></i></a>
                         </div>
                         <div class="product-action">
                            <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                            View</a>
                         </div>
                      </figure>
                      <div class="product-details">
                         <div class="product-cat">
                            <a href="demo29-shop.html">categories</a>
                         </div>
                         <h3 class="product-name">
                            <a href="demo29-product.html">Headphone</a>
                         </h3>
                         <div class="product-price">
                            <ins class="new-price">$199.00</ins>
                         </div>
                         <div class="ratings-container">
                            <div class="ratings-full">
                               <span class="ratings" style="width:100%"></span>
                               <span class="tooltiptext tooltip-top"></span>
                            </div>
                            <a href="demo29-product.html" class="rating-reviews">( 2 )</a>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </section>
       <section class="blog-section pt-10 mt-3 pb-8">
          <div class="container">
             <h2 class="title text-center d-block">Latest News</h2>
             <div class="owl-carousel owl-theme row cols-lg-3 cols-sm-2 cols-1" data-owl-options="{
                'items': 1,
                'margin': 20,
                'loop': false,
                'responsive': {
                '576': {
                'items': 2
                },
                '768': {
                'items': 3
                },
                '992': {
                'items': 4
                }
                }
                }">
                <div class="post overlay-zoom overlay-dark appear-animate" data-animation-options="{'name': 'fadeInRightShorter', 'delay': '.1s'}">
                   <figure class="post-media">
                      <a href="post-single.html">
                      <img src="{{asset('theme/images/demos/demo29/blog/1.jpg')}}" width="380" height="250" alt="post" />
                      </a>
                   </figure>
                   <div class="post-details">
                      <div class="post-meta">
                         <a href="#" class="post-date"><span>on</span>Nov 22, 2018</a> | <a href="#" class="post-comment"><mark>0</mark> Comments</a>
                      </div>
                      <h3 class="post-title"><a href="#">Sed adipiscing ornare.</a></h3>
                      <a href="blog-classic.html" class="btn btn-link btn-underline ls-normal text-normal font-weight-normal">Read
                      More<i class="d-icon-arrow-right"></i></a>
                   </div>
                </div>
                <div class="post overlay-zoom overlay-dark appear-animate" data-animation-options="{'name': 'fadeInRightShorter', 'delay': '.2s'}">
                   <figure class="post-media">
                      <a href="post-single.html">
                      <img src="{{asset('theme/images/demos/demo29/blog/2.jpg')}}" width="380" height="250" alt="post" />
                      </a>
                   </figure>
                   <div class="post-details">
                      <div class="post-meta">
                         <a href="#" class="post-date"><span>on</span>Nov 22, 2018</a> | <a href="#" class="post-comment"><mark>0</mark> Comments</a>
                      </div>
                      <h3 class="post-title"><a href="#">Aenean dignissim pellentesque.</a></h3>
                      <a href="blog-classic.html" class="btn btn-link btn-underline ls-normal text-normal font-weight-normal">Read
                      More<i class="d-icon-arrow-right"></i></a>
                   </div>
                </div>
                <div class="post overlay-zoom overlay-dark appear-animate" data-animation-options="{'name': 'fadeInRightShorter', 'delay': '.3s'}">
                   <figure class="post-media">
                      <a href="post-single.html">
                      <img src="{{asset('theme/images/demos/demo29/blog/3.jpg')}}" width="380" height="250" alt="post" />
                      </a>
                   </figure>
                   <div class="post-details">
                      <div class="post-meta">
                         <a href="#" class="post-date"><span>on</span>Nov 22, 2018</a> | <a href="#" class="post-comment"><mark>0</mark> Comments</a>
                      </div>
                      <h3 class="post-title"><a href="#">Quisque volutpat mattis eros.</a></h3>
                      <a href="blog-classic.html" class="btn btn-link btn-underline ls-normal text-normal font-weight-normal">Read
                      More<i class="d-icon-arrow-right"></i></a>
                   </div>
                </div>
                <div class="post overlay-zoom overlay-dark appear-animate" data-animation-options="{'name': 'fadeInRightShorter', 'delay': '.3s'}">
                   <figure class="post-media">
                      <a href="post-single.html">
                      <img src="{{asset('theme/images/demos/demo29/blog/4.jpg')}}" width="380" height="250" alt="post" />
                      </a>
                   </figure>
                   <div class="post-details">
                      <div class="post-meta">
                         <a href="#" class="post-date"><span>on</span>Nov 22, 2018</a> | <a href="#" class="post-comment"><mark>0</mark> Comments</a>
                      </div>
                      <h3 class="post-title"><a href="#">Quisque volutpat mattis eros.</a></h3>
                      <a href="blog-classic.html" class="btn btn-link btn-underline ls-normal text-normal font-weight-normal">Read
                      More<i class="d-icon-arrow-right"></i></a>
                   </div>
                </div>
             </div>
          </div>
       </section>
       <section class="grey-section pt-10 pb-10">
          <div class="container">
             <h2 class="title text-center d-block pt-3">Instagram</h2>
             <div class="owl-carousel owl-theme row cols-lg-5 cols-md-4 cols-sm-3 cols-2 mb-4 pb-4" data-owl-options="{
                'items': 2,
                'margin': 20,
                'loop': false,
                'responsive': {
                '480': {
                'items': 2
                },
                '576': {
                'items': 3
                },
                '768': {
                'items': 4
                },
                '992': {
                'items': 6
                }
                }
                }">
                <figure class="instagram appear-animate" data-animation-options="{
                   'name': 'fadeInUpShorter',
                   'delay': '.3s',
                   'duration': '.8s'
                   }">
                   <a href="#">
                   <img src="{{asset('theme/images/demos/demo29/instagram/1.jpg')}}" alt="Instagram" width="213" height="213">
                   </a>
                </figure>
                <figure class="instagram appear-animate" data-animation-options="{
                   'name': 'fadeInUpShorter',
                   'delay': '.3s',
                   'duration': '.8s'
                   }">
                   <a href="#">
                   <img src="{{asset('theme/images/demos/demo29/instagram/2.jpg')}}" alt="Instagram" width="213" height="213">
                   </a>
                </figure>
                <figure class="instagram appear-animate" data-animation-options="{
                   'name': 'fadeInUpShorter',
                   'delay': '.3s',
                   'duration': '.8s'
                   }">
                   <a href="#">
                   <img src="{{asset('theme/images/demos/demo29/instagram/3.jpg')}}" alt="Instagram" width="213" height="213">
                   </a>
                </figure>
                <figure class="instagram appear-animate" data-animation-options="{
                   'name': 'fadeInUpShorter',
                   'delay': '.3s',
                   'duration': '.8s'
                   }">
                   <a href="#">
                   <img src="{{asset('theme/images/demos/demo29/instagram/4.jpg')}}" alt="Instagram" width="213" height="213">
                   </a>
                </figure>
                <figure class="instagram appear-animate" data-animation-options="{
                   'name': 'fadeInUpShorter',
                   'delay': '.3s',
                   'duration': '.8s'
                   }">
                   <a href="#">
                   <img src="{{asset('theme/images/demos/demo29/instagram/5.jpg')}}" alt="Instagram" width="213" height="213">
                   </a>
                </figure>
                <figure class="instagram appear-animate" data-animation-options="{
                   'name': 'fadeInUpShorter',
                   'delay': '.3s',
                   'duration': '.8s'
                   }">
                   <a href="#">
                   <img src="{{asset('theme/images/demos/demo29/instagram/6.jpg')}}" alt="Instagram" width="213" height="213">
                   </a>
                </figure>
             </div>
          </div>
       </section>
    </div>
 </main>
@endsection
