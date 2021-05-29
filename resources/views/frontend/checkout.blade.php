@section('checkout')
    active
@endsection
@section('title')
  checkout
@endsection
@extends('layouts.frontend_app')
@section('frontend_content')
         <!-- .breadcumb-area start -->
    <div class="breadcumb-area bg-img-4 ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcumb-wrap text-center">
                        <h2>Checkout</h2>
                        <ul>
                            <li><a href="{{ route('/') }}">Home</a></li>
                            <li><span>Checkout</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- .breadcumb-area end -->
    <!-- checkout-area start -->
    <div class="checkout-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </div>
                    @endif
                    <div class="checkout-form form-style">
                        <h3>Billing Details</h3>
                        <form action="{{ route('checkout.store') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class=" col-12">
                                    <p>First Name *</p>
                                    <input type="text" name="name" value="{{ user_name() }}" required>
                                </div>
                                <div class="col-sm-6 col-12">
                                    <p>Email Address *</p>
                                    <input type="email" name="email" value="{{ user_email() }}">
                                </div>
                                <div class="col-sm-6 col-12">
                                    <p>Phone No. *</p>
                                    <input type="text" name="phon_number" required>
                                </div>

                                <div class="col-12">
                                    <p>Your Address *</p>
                                    <input type="text" name="address" required>
                                </div>
                                <div class="col-12">
                                    <p>Country *</p>
                                    <input type="text" name="country" required>
                                </div>

                                <div class="col-sm-6 col-12">
                                    <p>Postcode/ZIP</p>
                                    <input type="text" name="zip_code" required>
                                </div>
                                <div class="col-sm-6 col-12">
                                    <p>Town/City *</p>
                                    <input type="text" name="city" required>
                                </div>
                                <div class="col-12">
                                    <input id="toggle2" type="checkbox" name="shipping_status" value="1">
                                    <label class="fontsize" for="toggle2">Ship to a different address?</label>
                                    <div class="row" id="open2">

                                        <div class=" col-12">
                                            <p> Name</p>
                                            <input id="s_f_name" type="text" name="shipping_name" />
                                        </div>
                                        <div class="col-12">
                                            <p>Email Address</p>
                                            <input id="s_c_name" type="text" name="shipping_email" />
                                        </div>
                                        <div class="col-12">
                                            <p>Phone No.  </p>
                                            <input id="s_phone" type="text" name="shipping_phon_number" Number />
                                        </div>
                                        <div class="col-12">
                                            <p>Your Address</p>
                                            <input type="text" name="shipping_address"/>
                                        </div>
                                        <div class="col-12">
                                            <p>State / County </p>
                                            <input id="s_county" type="text" name="shipping_country"/>
                                        </div>
                                        <div class="col-12">
                                            <p>Postcode / Zip </p>
                                            <input id="s_zip" type="text" name="shipping_zip_code" />
                                        </div>
                                        <div class="col-12">
                                            <p>Town / City </p>
                                            <input id="s_city" type="text" name="shipping_city" />
                                        </div>

                                    </div>
                                </div>
                                <div class="col-12">
                                    <p>Order Notes </p>
                                    <textarea name="notes" placeholder="Notes about Your Order, e.g.Special Note for Delivery"></textarea>
                                </div>
                            </div>

                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="order-area">
                        <h3>Your Order</h3>
                        <ul class="total-cost">
                            @php
                                $subtotal = 0;
                             @endphp
                            @foreach (cart_item() as $cart_item)
                            <li>{{ $cart_item->product->product_name }} <span class="pull-right">${{ $cart_item->product_quantity  * $cart_item->product->product_price }}</span></li>
                            @php
                                  $subtotal += $cart_item->product->product_price * $cart_item->product_quantity
                              @endphp
                            @endforeach

                            <li>Total<span class="pull-right">${{ $subtotal }}</span></li>
                            @php
                                session(['total_amount' => $subtotal ]);
                            @endphp
                        </ul>
                        <ul class="payment-method">

                            <li>
                                <input id="card" type="radio" name="payment_option" value="1">
                                <label for="card">Credit Card</label>
                            </li>
                            <li>
                                <input id="delivery" type="radio"  name="payment_option" value="2">
                                <label for="delivery">Cash on Delivery</label>
                            </li>
                        </ul>
                        <button type="submit">Place Order</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    </div>
    <!-- checkout-area end -->
@endsection
