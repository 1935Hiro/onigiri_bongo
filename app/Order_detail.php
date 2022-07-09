<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order_detail extends Model
{
    protected $guarded = array('id');

    public static $rules = array(
        'order' => 'required',
        'price' => 'required',
    );
}
