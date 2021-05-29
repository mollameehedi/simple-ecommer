@section('login')
    active
@endsection
@section('title')
  Login
@endsection
@extends('layouts.frontend_app')
@section('frontend_content')

    <!-- .breadcumb-area start -->
    <div class="breadcumb-area bg-img-4 ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcumb-wrap text-center">
                        <h2>Account</h2>
                        <ul>
                            <li><a href="{{ route('/') }}">Home</a></li>
                            <li><span>Login</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- .breadcumb-area end -->
    <!-- checkout-area start -->
    <div class="account-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-12">
                    <div class="account-form form-style">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                        <p>Email Address *</p>
                        <input type="email" class="form-control  @error('email') is-invalid @enderror" placeholder="Enter your username" name="email" required value="{{ old('email') }}">
                        <p>Password *</p>
                        <input  type="password" class="form-control  @error('password') is-invalid @enderror" placeholder="Enter your password" name="password" required>
                        <div class="row">
                            {{-- <div class="col-lg-6">
                                <input id="password" type="checkbox">
                                <label for="password">Save Password</label>
                            </div> --}}
                            <div class="col-lg-6 text-right">
                                <a href="{{ route('password.request') }}">Forget Your Password?</a>
                            </div>
                        </div>
                        <button>SIGN IN</button>
                    </form>
                        <div class="text-center">
                            <a href="{{ route('customer.register') }}">Or Creat an Account</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- checkout-area end -->

    <!-- .footer-area start -->

@endsection
