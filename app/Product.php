<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = array('id');

    public static $rules = array(
        'product_name' => 'required',
        'price' => 'required',
        'category' => 'required',
    );
    
    public function orders()
    {
        return $this->hasMany('App\Order');
    }
}
