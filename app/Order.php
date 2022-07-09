<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $guarded = array('id');

    public static $rules = array(
        'product_id' => 'required',
        'product_name' => 'required',
        'price_total' => 'required',
    );
   
    public function product(){
       return $this->belongsTo('App\Product');
   }
}
