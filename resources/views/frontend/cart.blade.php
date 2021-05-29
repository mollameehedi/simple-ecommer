@section('cart')
    active
@endsection
@section('title')
   Cart
@endsection
@extends('layouts.frontend_app')
@section('frontend_content')
     <!-- .breadcumb-area start -->
     <div class="breadcumb-area bg-img-4 ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcumb-wrap text-center">
                        <h2>Shopping Cart</h2>
                        <ul>
                            <li><a href="{{ route('/') }}">Home</a></li>
                            <li><span>Shopping Cart</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- .breadcumb-area end -->
    <!-- cart-area start -->
    <div class="cart-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <form action="{{ route('cart.update') }}" method="POST">
                        @csrf
                        <table class="table-responsive cart-wrap">


                            @if (session('remove_status'))
                                <div class="alert alert-warning">
                                    {{ session('remove_status') }}
                                </div>
                            @endif
                            @if (session('slect_produt'))
                                <div class="alert alert-warning">
                                    {{ session('slect_produt') }}
                                </div>
                            @endif
                            @if (session('updated_status'))
                                <div class="alert alert-success">
                                    {{ session('updated_status') }}
                                </div>
                            @endif
                            @if (session('purchase_status'))
                                <div class="alert alert-success">
                                    {{ session('purchase_status') }}
                                </div>
                            @endif
                            @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                            <thead>
                                <tr>
                                    <th class="images">Image</th>
                                    <th class="product">Product</th>
                                    <th class="ptice">Price</th>
                                    <th class="quantity">Quantity</th>
                                    <th class="total">Total</th>
                                    <th class="remove">Remove</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $subtotal = 0;
                             @endphp
                             @forelse (cart_item() as $cart_item)

                                <tr>
                                    <td class="images"><img src="{{ asset('frontend_asset') }}/images/product/{{ $cart_item->product->product_thambnaill_photo }}" alt=""></td>
                                    <td class="product"><a href="{{ route('product.details',$cart_item->product->slug_link) }}">{{ $cart_item->product->product_name }}</a></td>
                                    <td class="ptice">${{ $cart_item->product->product_price }}</td>
                                    <td class="quantity cart-plus-minus">
                                        <input type="text" value="{{ $cart_item->product_quantity }}" name="product_quantity[{{ $cart_item->id }}]"/>
                                    </td>
                                    <td class="total">${{ $cart_item->product->product_price * $cart_item->product_quantity  }}</td>
                                    @php
                                              $subtotal += $cart_item->product->product_price * $cart_item->product_quantity
                                          @endphp
                                    <td class="remove">
                                        <a href="{{ route('cart.remove',$cart_item->id) }}" class="btn btn-danger"><i class="fa fa-times"></i></a>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="50" class="text-danger">No Product to Show</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                        <div class="row mt-60">
                            <div class="col-xl-4 col-lg-5 col-md-6 ">
                                <div class="cartcupon-wrap">
                                    <ul class="d-flex">
                                        <li>
                                            <button type="sbmit">Update Cart</button>
                                        </li>
                                    </form>
                                        <li><a href="{{ route('shope') }}">Continue Shopping</a></li>
                                    </ul>
                                    {{-- <h3>Cupon</h3>
                                    <p>Enter Your Cupon Code if You Have One</p>
                                    <div class="cupon-wrap">
                                        <input type="text" placeholder="Cupon Code">
                                        <button>Apply Cupon</button>
                                    </div> --}}
                                    @php
                                    session(['total_amount' => $subtotal ]);
                                @endphp
                                </div>
                            </div>
                            <div class="col-xl-3 offset-xl-5 col-lg-4 offset-lg-3 col-md-6">
                                <div class="cart-total text-right">
                                    <h3>Cart Totals</h3>
                                    <ul>
                                        {{-- <li><span class="pull-left">Subtotal </span>${{ $subtotal }}</li> --}}
                                        <li><span class="pull-left"> Total </span> ${{ $subtotal }}</li>
                                    </ul>
                                    <a href= "{{ route('checkout.index') }}">Proceed to Checkout</a>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
    <!-- cart-area end -->
@endsection
