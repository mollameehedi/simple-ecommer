<?php
function user_name(){
    echo Auth::User()->name;
}
function user_email(){
    echo Auth::User()->email;
}

function cart_count(){
   return  App\Cart::where('genareted_id', Cookie::get('cart_id'))->count();
}
function cart_item(){
   return  App\Cart::where('genareted_id', Cookie::get('cart_id'))->get();
}
function review_customer_count($product_id){
    return App\Order_detail::where('product_id',$product_id)->whereNotNull('review')->count();

   }

   function average_stars($product_id){
    $count_amount = App\Order_detail::where('product_id',$product_id)->whereNotNull('review')->count();
   $sum_amount = App\Order_detail::where('product_id',$product_id)->whereNotNull('review')->sum('stars');
   if ($sum_amount == 0) {
     $sum_amount = 0;
   } else {
     return round($sum_amount/$count_amount);
   }

   }

