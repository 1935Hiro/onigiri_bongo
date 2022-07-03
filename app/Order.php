<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $guarded = array('id');

    public static $rules = array(
        'recipient_name' => 'required',
        'reserve' => 'required',
        'price_total' => 'required',
    );
   
    public function orders_detail(){
       return $this->belongsTo(Orders_detail::class);
   }
    
}
