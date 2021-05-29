@section('register')
    active
@endsection
@section('title')
  Register
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
                        <li><span>Register</span></li>
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
                    <form action="{{ route('customer.register.store') }}" method="POST">
                        @csrf
                    <p>Ueser Name *</p>
                    <input type="text" name="name" required>
                    <p>Email Address *</p>
                    <input type="email" name="email" required>
                    <p>Password *</p>
                    <input type="Password" name="password" required>
                    <p>Confirm Password *</p>
                    <input type="Password" name="password_confirmation">
                    <button type="submit">Register</button>
                </form>
                    <div class="text-center">
                        <a href="{{ route('login') }}">Or Login</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- checkout-area end -->
@endsection
