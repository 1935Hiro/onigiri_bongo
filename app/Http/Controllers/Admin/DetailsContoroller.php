<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Details extends Model
{
    public function add()
    {
        return view('admin.details.create');
    }
    
    public function index(Request $request)
    {
        $items = Auth::user()->where('product_name',$cond_title)->get();;
        // $cond_title =  Product::all();
        // $posts = Product::where('product_name',$cond_title)->get();
        
        // return view('admin.details.index',['posts' => $posts,'cond_title' =>$cond_title]);
    }
    
    public function create(Request $request)
    {

    }
    
    public function order()
    {
    return $this->belongsTo('App\product');
    }
    
    public function edit(Request $request)
    {
        $details = Details::find($request->id);
        
        if(empty($details)){
            abort(404); 
        }
        return view('admin.details.edit',['product_form'=>$details]);
    }
    
    
    public function delete(Request $request)
    {
        $details = Details::find($request->id);
        $details -> delete();
       
        return redirect('admin/details/');
    }
}
