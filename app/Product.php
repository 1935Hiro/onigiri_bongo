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
    
    public function histories()
    {
        return $this->hasMany('App\History');
    }
}
