<?php

namespace App\Http\Controllers;

use App\User;
use App\Product;
use Carbon\Carbon;
use App\Order_detail;


use App\Contactmessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;



class FrontendController extends Controller
{
   public function index(){
       return view('frontend.index',[
           'products' => Product::get(),
       ]);
   }
   public function about(){
       return view('frontend.about',[
        'products' => Product::get(),
       ]);
   }
   public function music(){
       return view('frontend.music',[
        'products' => Product::get(),
       ]);
   }
   public function shop(){
       return view('frontend.shop',[
        'products' => Product::get(),
       ]);
   }
   public function productdetails($slug_link){

    $product_info = Product::where('slug_link', $slug_link)->firstOrFail();
    $show_review_from = 0;
    if (Order_detail::where('user_id',Auth::id())->where('product_id',$product_info->id)->whereNull('review')->exists()) {
        $order_detail_id = Order_detail::where('user_id',Auth::id())->where('product_id',$product_info->id)->whereNull('review')->first()->id;
        $show_review_from = 1;
    }
    else {
        $show_review_from = 2;
        $order_detail_id = 0;
    }
    $reviews = Order_detail::where('product_id',$product_info->id)->whereNotNull('review')->get();

       return view('frontend.productdetails',[
        'productdetails' => Product::where('slug_link',$slug_link)->first(),
        'products' => Product::get(),
        'order_detail_id' => $order_detail_id,
        'show_review_from' => $show_review_from,
        'reviews' => $reviews,
        'product_info' => $product_info
       ]);
   }
   public function customerlogin(){
       return view('frontend.login');
   }
   public function customerregister(){
       return view('frontend.register');
   }
   public function contact(){
       return view('frontend.contact');
   }

   public function contactstore(Request $request, Contactmessage $Contactmessage){
    $request->validate([
        'name' => 'required',
        'email' =>  ['required', 'string', 'email', 'unique:users'],
        'subject' => 'required',
        'message' => 'required',
       ]);
    $Contactmessage->insert($request->except('_token') + [
        "created_at" => Carbon::now(),
    ]);
    return back()->with('success_status', 'Message sent Successfully !');
   }

 public function customerregisterstore(Request $request){

    User::insert([
        'name' => $request->name,
        'email' => $request->email,
        'role' => 2,
        'password' => Hash::make($request->password),
        'created_at' => Carbon::now(),
    ]);
    if (Auth::attempt(['email' => $request->email,'password' => $request->password ])) {

        if (cart_count() > 0) {
            return redirect('checkout');
        } else {
            return redirect('/');
        }
    }
 }
 function reviewpost(Request $request){
    Order_detail::find($request->product_detail_id)->update([
        'stars' => $request->stars,
        'review' => $request->review
    ]);
    return back();
 }


}
