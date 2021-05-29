<?php

namespace App\Http\Controllers;

use Auth;
use App\Order;
use App\Billing;
use App\Product;
use App\Shipping;
use Carbon\Carbon;
use App\Order_detail;
use Illuminate\Http\Request;
use App\Mail\PurchaseConfirm;
use Illuminate\Support\Facades\Mail;

class CheckoutController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


   public function index(){
    if (session('total_amount') === 0) {

        return back()->with('slect_produt', 'Please Select a product');
    }
    else{
        return view('frontend.checkout');

    }

   }
   public function store(Request $request){

    if ($request->shipping_status == 1) {
        $request->validate([
            'shipping_name' => 'required',
            'shipping_email' => 'required | email',
            'shipping_phon_number' => 'required',
            'shipping_country' => 'required',
            'shipping_zip_code' => 'required',
            'shipping_city' => 'required',
            'shipping_address' => 'required',
           ]);
           $shipping_id =  Shipping::insertGetId([
                'shipping_name' =>  $request->shipping_name,
                'shipping_email' =>  $request->shipping_email,
                'shipping_phon_number' =>  $request->shipping_phon_number,
                'shipping_country' =>  $request->shipping_country,
                'shipping_zip_code' =>  $request->shipping_zip_code,
                'shipping_city' =>  $request->shipping_city,
                'shipping_address' =>  $request->shipping_address,
                'created_at' => Carbon::now(),
            ]);

       }
        else {
            $shipping_id = Shipping::insertGetId([
            'shipping_name' =>  $request->name,
            'shipping_email' =>  $request->email,
            'shipping_phon_number' =>  $request->phon_number,
            'shipping_country' =>  $request->country,
            'shipping_zip_code' =>  $request->zip_code,
            'shipping_city' =>  $request->city,
            'shipping_address' =>  $request->address,
            'created_at' => Carbon::now(),
        ]);
       }
       $request->validate([
        'name' => 'required',
        'email' => 'required | email',
        'phon_number' => 'required',
        'country' => 'required',
        'zip_code' => 'required',
        'city' => 'required',
        'address' => 'required',
        'notes' => 'required',
        'payment_option' => 'required',
       ]);
       $billing_id = Billing::insertGetId([
        'name' =>  $request->name,
        'email' =>  $request->email,
        'phon_number' =>  $request->phon_number,
        'country' =>  $request->country,
        'zip_code' =>  $request->zip_code,
        'city' =>  $request->city,
        'address' =>  $request->address,
        'notes' =>  $request->notes,
        'created_at' => Carbon::now(),
    ]);

    $order_id = Order::insertGetId([
        'user_id' => Auth::id(),
        'total' => (session('total_amount')),
        'payment_option' => $request->payment_option,
        'billing_id' => $billing_id,
        'shipping_id' => $shipping_id,
        'created_at' => Carbon::now()
   ]);


   foreach (cart_item() as $cart_item) {
    Order_detail::insert([
        'order_id' => $order_id,
        'user_id' => Auth::id(),
        'product_id' => $cart_item->product_id,
        'product_quantity' => $cart_item->product_quantity,
        'product_price' => $cart_item->product->product_price,
        'created_at' => Carbon::now()
       ]);
    //    cart item deleted
       $cart_item->forceDelete();
};

$order_detail = Order_detail::where('order_id',$order_id)->get();
        Mail::to($request->email)->send(new PurchaseConfirm($order_detail));
        if ($request->payment_option == 1) {
            session(['order_id_from_checkour_page' => $order_id]);
            return redirect('stripe');
        }
        else {
            return redirect('cart')->with('purchase_status', 'Purchase Complete Successfully!');
        }

   }
}
