
<h1>Customer invoice </h1>


<div class="table-responsive">
    <table class="table table-bordered" id="product_table">
        <thead class="bg-prima">
          <th></th>
        </thead>
        <tbody>
          <tr>
            <td></td>
          </tr>
          <tr>
            <td> <strong>Order Id : </strong> {{  $order->id }}</td>
          </tr>
          <tr>
            <td> <strong>created_at : </strong> {{ $order->created_at }}</td>
          </tr>
          <tr>
            <td> <strong>Payment Status : </strong> @if ($order->payment_status == 1)
                <span class="badge badge-danger">Unpaid</span>
                @else
                <span class="badge badge-success">paid</span>

            @endif</td>
          </tr>
          <tr>
            <td> <strong>Paymetn Method : </strong>  @if ($order->payment_option == 1)
                cash on delevery
            @else
                Cart
            @endif</td>
          </tr>
          <tr>
            <td> <strong>Total Amount : </strong> {{ $order->total }}</td>
          </tr>

        </tbody>
      </table>
  </div>

