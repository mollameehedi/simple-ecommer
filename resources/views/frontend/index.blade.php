@section('home')
    active
@endsection
@section('title')
  Home
@endsection
@extends('layouts.frontend_app')
@section('frontend_content')
    <!-- slider-area start -->
    <div class="slider-area">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide overlay">
                    <div class="single-slider slide-inner slide-inner1">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12 col-lg-9 col-12">
                                    <div class="slider-content">
                                        <div class="slider-shape">
                                            <h2 data-swiper-parallax="-500">Street style</h2>
                                            <p data-swiper-parallax="-400">Style, Match, Mix!</p>
                                            <a href="{{ route('shope') }}" data-swiper-parallax="-300">Shop Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="slide-inner slide-inner7">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12 col-lg-9 col-12">
                                    <div class="slider-content">
                                        <div class="slider-shape">
                                            <h2 data-swiper-parallax="-500">BIG SALE!</h2>
                                            <p data-swiper-parallax="-400">Best price, best selection</p>
                                            <a href="{{ route('shope') }}" data-swiper-parallax="-300">Shop Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
    <!-- slider-area end -->
    <!-- featured-area start -->
    {{-- <div class="featured-area featured-area2">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="featured-active2 owl-carousel next-prev-style">
                        <div class="featured-wrap">
                            <div class="featured-img">
                                <img src="{{ asset('frontend_asset') }}/images/featured/6.jpg" alt="">
                                <div class="featured-content">
                                    <a href="shop.html">Pure Honey</a>
                                </div>
                            </div>
                        </div>
                        <div class="featured-wrap">
                            <div class="featured-img">
                                <img src="{{ asset('frontend_asset') }}/images/featured/7.jpg" alt="">
                                <div class="featured-content">
                                    <a href="shop.html">Mustard Oil</a>
                                </div>
                            </div>
                        </div>
                        <div class="featured-wrap">
                            <div class="featured-img">
                                <img src="{{ asset('frontend_asset') }}/images/featured/8.jpg" alt="">
                                <div class="featured-content">
                                    <a href="shop.html">Olive Oil</a>
                                </div>
                            </div>
                        </div>
                        <div class="featured-wrap">
                            <div class="featured-img">
                                <img src="{{ asset('frontend_asset') }}/images/featured/6.jpg" alt="">
                                <div class="featured-content">
                                    <a href="shop.html">Pure Honey</a>
                                </div>
                            </div>
                        </div>
                        <div class="featured-wrap">
                            <div class="featured-img">
                                <img src="{{ asset('frontend_asset') }}/images/featured/8.jpg" alt="">
                                <div class="featured-content">
                                    <a href="shop.html">Olive Oil</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- featured-area end -->
    {{-- <!-- start count-down-section -->
    <div class="count-down-area count-down-area-sub">
        <section class="count-down-section section-padding parallax" data-speed="7">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-12 text-center">
                        <h2 class="big">Deal Of the Day <span>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin</span></h2>
                    </div>
                    {{-- <div class="col-12 col-lg-12 text-center">
                        <div class="count-down-clock text-center">
                            <div id="clock">
                            </div>
                        </div>
                    </div> --}}
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </section>
    {{-- </div> --}}
    <!-- end count-down-section -->
    <!-- product-area start -->
    <div class="product-area product-area-2">
        <div class="fluid-container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2>Best Seller</h2>
                        <img src="{{ asset('frontend_asset') }}/images/section-title.png" alt="">
                    </div>
                </div>
            </div>
            @include('frontend.include.product')
        </div>
    </div>
    <!-- product-area end -->
  <!-- start count-down-section -->
  <div class="count-down-area count-down-area-sub">
    <section class="count-down-section section-padding parallax" data-speed="7">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-12 text-center">
                    <h2 class="big">Deal Of the Day <span>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin</span></h2>
                </div>
                {{-- <div class="col-12 col-lg-12 text-center">
                    <div class="count-down-clock text-center">
                        <div id="clock">
                        </div>
                    </div>
                </div> --}}
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
</div>
<!-- end count-down-section -->

    <!-- product-area start -->
    <div class="product-area">
        <div class="fluid-container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2>Our Latest Product</h2>
                        <img src="{{ asset('frontend_asset') }}/images/section-title.png" alt="">
                    </div>
                </div>
            </div>
            @include('frontend.include.product')
        </div>
    </div>
    <!-- product-area end -->
    <!-- testmonial-area start -->
    <div class="testmonial-area testmonial-area2 bg-img-2 m-auto">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="test-title text-center">
                        <h2>What Our client Says</h2>
                    </div>
                </div>
            </div>

        </div>
            <div class="row">
                <div class="col-md-10 m-auto offset-md-1 col-12">
                    <video width="100%" style="
                    display: list-item;
                    margin: 0 auto;
                " controls  class="m-auto">
                        <source src="{{ asset('frontend_asset/video/hasib.mp4') }}" type="video/mp4">
                        <source src="mov_bbb.ogg" type="video/ogg">
                        Your browser does not support HTML video.
                      </video>
                </div>
            </div>
        </div>

    <!-- testmonial-area end -->
@endsection
