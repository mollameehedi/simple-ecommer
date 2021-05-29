<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $guarded = [''];

    function order_detail(){
        return $this->hasMany('App\Order_detail');
     }
    function billing(){
        return $this->belongsTo('App\Billing');
     }
    function shipping(){
        return $this->belongsTo('App\Shipping');
     }


}
