@section('title')
   My | Music
@endsection
@section('music')
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
                        <h2>My Music</h2>
                        <ul>
                            <li><a href="{{ route('/') }}">Home</a></li>
                            <li><span>Music</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- .breadcumb-area end -->
    <!-- about-area start -->
    <div class="about-area ptb-100">
        <div class="container" id="extra-section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Trust The Proccess</h2>
                        <img src="{{ asset('frontend_asset') }}/images/section-title.png" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="{{ asset('frontend_asset/images/about-img/about.jpg') }}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6">

                    <ul style="font-size:18px ;type:number!important " type="number">
                        <li>1. Lorem ipsum dolor sit amet, consectetur adipisicing</li>
                        <li>2.   Lorem ipsum dolor sit amet, consectetur adipisicing</li>
                        <li>3.  Lorem ipsum dolor sit amet, consectetur adipisicing</li>
                        <li>4.  Lorem ipsum dolor sit amet, consectetur adipisicing</li>
                        <li>5. Lorem ipsum dolor sit amet, consectetur adipisicing</li>
                        <li>6.  Lorem ipsum dolor sit amet, consectetur adipisicing</li>
                        <li>7.  Lorem ipsum dolor sit amet, consectetur adipisicing</li>
                        <li>8.  Lorem ipsum dolor sit amet, consectetur adipisicing</li>
                        <li>9.  Lorem ipsum dolor sit amet, consectetur adipisicing</li>
                        <li>10.  Lorem ipsum dolor sit amet, consectetur adipisicing</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- about-area end -->
   <!-- product-area start -->
    <div class="product-area product-area-2">
    </div>
    <!-- product-area end -->
@endsection
