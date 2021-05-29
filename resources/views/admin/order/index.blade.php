
@extends('layouts.dashboard_app')
@section('order')
active
@endsection
@section('title')
   deshboard | order
@endsection
@section('dashboard_content')
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
      <a class="breadcrumb-item" href="{{ url('home') }}">Home</a>
      <span class="breadcrumb-item active">order</span>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        list order(active)
                    </div>
                    <div class="card-body">
                           <div class="table-responsive">
                               @if (session('order_cencel_status'))
                                   <div class="alert alert-warning">
                                      <li>{{ session('order_cencel_status') }}</li>
                                   </div>
                               @endif
                               @if (session('paid_status'))
                                   <div class="alert alert-success">
                                      <li>{{ session('paid_status') }}</li>
                                   </div>
                               @endif
                            <table class="table table-border" id="order_table">
                                <thead>
                                  <tr>
                                    <th>serial no</th>
                                    <th>Order ID</th>
                                    <th>Order at</th>
                                    <th>Order by</th>
                                    <th>pament type</th>
                                    <th>pament status</th>
                                    <th>Total Amount</th>
                                    <th>Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                    @forelse ($orders as $order)
                                    <tr>
                                        <td>{{  $orders->firstItem() + $loop->index }}</td>
                                        <td>{{$order->id }}</td>
                                        <td>{{ $order->created_at }}</td>
                                        <td>{{ App\User::find($order->user_id)->name }}</td>
                                        <td>
                                          @if ($order->payment_status == 1)
                                              <span class="badge badge-warning text-white">Unpaid</span>
                                              @elseif($order->payment_status == 2)
                                              <span class="badge badge-success">paid</span>

                                              @else
                                              <span class="badge badge-danger">Cancel</span>

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
                                        <td class="p-0 text-right">

                                            @if ($order->payment_status == 1)
                                            <div class="btn-group" role="group" aria-label="Basic example">

                                            <form action="{{ route('order.update',$order->id) }}" method="post">
                                                @csrf
                                                @method('PUT')
                                            <button type="submit" class="btn btn-success btn-sm">paid</button>
                                        </form>
                                        <a href="{{ route('order.cancel',$order->id) }}" class="btn btn-danger btn-sm">cancel</a>
                                        <a href="{{ route('order.show',$order->id) }}" class="btn btn-primary btn-sm">view</a>
                                    </div>
                                        @elseif ($order->payment_status == 2 )

                                        <span class="btn"><i class="fas fa-check text-success" ></i></span>
                                        <a href="{{ route('order.show',$order->id) }}" class="btn btn-primary btn-sm ml-3">view</a>
                                            @elseif ($order->payment_status == 3 )
                                            <span style="font-size: 30px"><i class="fad fa-exclamation-triangle text-warning "></i></span>
                                            <a href="{{ route('order.show',$order->id) }}" class="btn btn-primary  ml-3 btn-sm">view</a>
                                            @endif
                                        </td>
                                      </tr>
                                      @empty
                                      <tr>
                                          <td colspan="50" class="text-center text-danger">no data available</td>
                                      </tr>
                                    @endforelse
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
