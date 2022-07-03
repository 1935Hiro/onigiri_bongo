<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $guarded = array('id');

    public static $rules = array(
        'product_name' => 'required',
        'price' => 'required',
        'category' => 'required',
    );
    
    public function orders_details()
    {
        return $this->hasMany(Order_details::class);
    }
}
