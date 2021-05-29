@section('title')
    Shop
@endsection
@section('shope')
    active
@endsection
@extends('layouts.frontend_app')
@section('frontend_content')
    <!-- .breadcumb-area start -->
    <div class="breadcumb-area bg-img-4 ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcumb-wrap text-center">
                        <h2>Shop</h2>
                        <ul>
                            <li><a href="{{ route('/') }}">Home</a></li>
                            <li><span>Shop</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- .breadcumb-area end -->
    <!-- about-area start -->

    <!-- about-area end -->
   <!-- product-area start -->
    <div class="product-area product-area-2">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2>All Product</h2>
                        <img src="{{ asset('frontend_asset') }}/images/section-title.png" alt="">
                    </div>
                </div>
            </div>
            @include('frontend.include.product')
        </div>
    </div>
    <!-- product-area end -->
@endsection
