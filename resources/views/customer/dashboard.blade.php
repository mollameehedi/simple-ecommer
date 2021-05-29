@section('home')
active
@endsection
@extends('layouts.dashboard_app')
@section('dashboard_content')
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
      <a class="breadcrumb-item" href="{{ route('/') }}">Home</a>
      <span class="breadcrumb-item active">Orders</span>
    </nav>

    <div class="sl-pagebody">
      <div class="sl-page-title">
        <h5>Order Activity</h5>
      </div><!-- sl-page-title -->
      <div class="container">
        <div class="row">
            <div class="col-12  m-auto justify-content-center">
                <div class="card">
                    <div class="card-header">Your Orders

                    </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div class="table-responsive">
                          <table class="table table-striped table-dark">
                              <thead>
                                <tr>
                                  <th>serial no</th>
                                  <th>Date</th>
                                  <th>pament method</th>
                                  <th>pament status</th>
                                  <th>Total Amount</th>
                                  <th>Action</th>
                                </tr>
                              </thead>
                              <tbody>
                                  @foreach ($orders as $order)
                                  <tr>
                                      <td>{{$orders->firstItem() + $loop->index }}</td>
                                      <td>{{ $order->created_at }}</td>
                                      <td>
                                        @if ($order->payment_status == 1)
                                            <span class="badge badge-danger">Unpaid</span>
                                            @else
                                            <span class="badge badge-success">paid</span>

                                        @endif

                                      </td>
                                      <td>
                                        @if ($order->payment_option == 1)

                                            Cart
                                        @else
                                        cash on delevery
                                        @endif

                                      </td>
                                      <td>${{ $order->total }}</td>
                                      <td>
                                        <a href="{{ url('customer/invoice/download') }}/{{ $order->id }}"><i class="fa fa-download"></i> Download Invoice</a>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td colspan="150">
                                        @foreach ($order->order_detail as $order_porduct)
                                            <p>{{ $order_porduct->product->product_name }}</p>
                                        @endforeach
                                      </td>
                                    </tr>
                                  @endforeach
                              </tbody>
                            </table>
                            {{ $orders->links() }}
                        </div>

                      </div>
                </div>
            </div>
        </div>
    </div>
     </div><!-- sl-pagebody -->
    </div><!-- sl-mainpanel -->
@endsection
