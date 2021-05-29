
  <!doctype html>
  <html lang="en">
    <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <title>Product Purchase Confirm!</title>
      <style>
          tr{
              width: 100%;
              text-align: center;
          }
          tr td{
              border: 1px soid rgb(80, 70, 70);
          }

      </style>
    </head>
    <body>
        <h2 class="text-danger text-center m-5">Product Purchase Confirm</h2>
        <table>
              <tr>
                  <th style="width: 20%" >SL NO.</th>
                  <th style="width: 55%">Product ID</th>
                  <th style="width: 25%">Product Price</th>
                </tr>
              @foreach ($final_order_detail as $order_detail)
              <tr>
                  <td style="width: 20%">{{ $loop->index + 1 }}</td>
                  <td style="width: 55%">{{ $order_detail->product->product_name }}</td>
                  <td style="width: 25%">{{ $order_detail->product_price }}</td>
                </tr>
              @endforeach
        </table>

      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
     </body>
  </html>
