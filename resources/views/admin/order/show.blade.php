@section('order')
active
@endsection
@section('title')
   deshboard | Order | details
@endsection
@extends('layouts.dashboard_app')
@section('dashboard_content')
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
      <a class="breadcrumb-item " href="{{ url('home') }}">Home</a>
      <a class="breadcrumb-item " href="{{ route('order.index') }}">Order</a>
      <a class="breadcrumb-item active">Order Details view</a>
      {{-- <span class="breadcrumb-item active">Blank Page</span> --}}
    </nav>

    <div class="sl-pagebody">
      <div class="sl-page-title">
        <h5>Order Details </h5>
      </div><!-- sl-page-title -->
      <div class="container">
          <div class="row">
              <div class="col-lg-12">
                <table class="table table-bordered" id="product_table">
                    <thead class="bg-prima">
                      <th> Oreder Details</th>
                    </thead>
                    <tbody>
                      <tr>
                        <td> <strong>Total price : </strong> ${{ $order->total }}</td>
                      </tr>
                      <tr>
                        <td> <strong>Order Id : </strong> {{ $order->id }}</td>
                      </tr>
                      <tr>
                        <td> <strong>Created At : </strong> {{ $order->created_at }}</td>
                      </tr>
                    </tbody>
                  </table>

              </div>
              <div class="col-lg-12">
                <table class="table table-bordered" id="product_table">
                    <thead class="bg-prima">
                      <th> Oreder billing Addres</th>
                    </thead>
                    <tbody>
                      <tr>
                        <td> <strong>Name : </strong> {{ $order->billing->name }}</td>
                      </tr>
                      <tr>
                        <td> <strong>Email : </strong> {{ $order->billing->email }}</td>
                      </tr>
                      <tr>
                        <td> <strong>Subject : </strong> {{ $order->billing->phon_number }}</td>
                      </tr>
                      <tr>
                        <td> <strong>Country : </strong> {{ $order->billing->country }}</td>
                      </tr>
                      <tr>
                        <td> <strong>City : </strong> {{ $order->billing->city }}</td>
                      </tr>
                      <tr>
                        <td> <strong>Address : </strong> {{ $order->billing->address }}</td>
                      </tr>
                      <tr>
                        <td> <strong>Zip code : </strong> {{ $order->billing->zip_code }}</td>
                      </tr>
                      <tr>
                        <td> <strong>Notes : </strong> {{ $order->billing->notes }}</td>
                      </tr>
                      <tr>
                        <td> <strong>Created at : </strong> {{ $order->billing->created_at }}</td>
                      </tr>
                    </tbody>
                  </table>

              </div>
              <div class="col-lg-12">
                <table class="table table-bordered" id="product_table">
                    <thead class="bg-prima">
                      <th> Oreder Shipping Addres</th>
                    </thead>
                    <tbody>
                      <tr>
                        <td> <strong>Name : </strong> {{ $order->shipping->shipping_name }}</td>
                      </tr>
                      <tr>
                        <td> <strong>Email : </strong> {{ $order->shipping->shipping_email }}</td>
                      </tr>
                      <tr>
                        <td> <strong>Subject : </strong> {{ $order->shipping->shipping_phon_number }}</td>
                      </tr>
                      <tr>
                        <td> <strong>Country : </strong> {{ $order->shipping->shipping_country }}</td>
                      </tr>
                      <tr>
                        <td> <strong>City : </strong> {{ $order->shipping->shipping_city }}</td>
                      </tr>
                      <tr>
                        <td> <strong>Address : </strong> {{ $order->shipping->shipping_address }}</td>
                      </tr>
                      <tr>
                        <td> <strong>Zip code : </strong> {{ $order->shipping->shipping_zip_code }}</td>
                      </tr>
                      <tr>
                        <td> <strong>Created at : </strong> {{ $order->shipping->created_at }}</td>
                      </tr>
                    </tbody>
                  </table>

              </div>
          </div>
      </div>
    </div><!-- sl-pagebody -->
  </div><!-- sl-mainpanel -->
  <!-- ########## END: MAIN PANEL ########## -->
@endsection
