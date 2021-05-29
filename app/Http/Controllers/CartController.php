<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Cookie;
use App\Cart;
use Carbon\Carbon;

class CartController extends Controller
{

    public function index(){
        return view('frontend.cart');
    }
    public function remove($id){
        Cart::find($id)->delete();
        return back()->with('remove_status', 'Product removed from cart');
    }
    public function cartadd(Request $request){

        if (Cookie::get('cart_id')) {
            $genareted_id = Cookie::get('cart_id');
        }
        else {
        $genareted_id = Str::random(7).rand(3, 1000);
        Cookie::queue('cart_id', $genareted_id , 34200);
        }

        if (Cart::where('genareted_id',$genareted_id)->where('product_id', $request->product_id)->exists()) {
            Cart::where('genareted_id',$genareted_id)->where('product_id', $request->product_id)->increment('product_quantity', $request->product_quantity);
        }
         else {
            Cart::insert([
                'genareted_id' => $genareted_id,
                'product_id' => $request->product_id,
                'product_quantity' => $request->product_quantity,
                'created_at' => Carbon::now(),
            ]);

        }
        return back();

    }
    public function update(Request $request){


        foreach ($request->product_quantity as $cart_id => $cart_quantity) {
            if ($cart_quantity > 0) {
                Cart::find($cart_id)->update([
                    'product_quantity' => $cart_quantity,
                ]);
            }

        }
        return back()->with('updated_status', 'Product updated successfully!');
    }

}
