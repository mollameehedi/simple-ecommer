<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;
use Session;
use Stripe;
class StripePaymentController extends Controller
{
    public function stripe()

    {
        if (session('order_id_from_checkour_page')) {

            return view('payment.stripe');
        }
        else{
            abort(404);
        }

    }
    public function stripePost(Request $request)

    {
       $amount = session('total_amount');
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

        Stripe\Charge::create ([

                "amount" => $amount * 100,

                "currency" => "usd",

                "source" => $request->stripeToken,

                "description" => "Payment order ID : ".session('order_id_from_checkour_page')

        ]);



        Session::flash('success', 'Payment successful!');

        Order::find(session('order_id_from_checkour_page'))->update([
            'payment_status' => 2
        ]);
          session([
            'cart_subtotal' => '',
            'order_id_from_checkour_page' => ''
          ]);

        return redirect('cart');

    }
}
