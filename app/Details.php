<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Details extends Model
{
    protected $guarded = array('id');

    public static $rules = array(
        'product_name' => 'required',
        'order' => 'required',
        'price' => 'required',
    );
    
    public function histories()
    {
        return $this->hasMany('App\History');
    }
}
