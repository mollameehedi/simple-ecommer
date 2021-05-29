<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order_detail extends Model
{
    protected $fillable = ['stars','review'];

   function product(){
      return $this->belongsTo('App\product');
   }


}
