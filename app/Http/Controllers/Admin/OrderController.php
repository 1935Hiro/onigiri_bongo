<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Order;
use Carbon\Carbon;
use App\Product;

class OrderController extends Controller
{
    public function add()
    {
        return view('admin.order.create');
    }
    
    public function create(Request $request)
    {
        $this->validate($request, Order::$rules);
        $product = new Order();
        $form = $request->all();
    
        if (isset($form['image'])) {
            $path = $request->file('image')->store('public/image');
            $order->image_path = basename($path);
        } else {
            $order->image_path = null;
        }
    
        unset($form['_token']);
        unset($form['image']);
    
        $order->fill($form);
        $order->save();
    
        return redirect('admin/order/create');
    }
    
    
    public function index(Request $request)
    {
        $cond_title = $request->cond_title;
        if($cond_title !=''){
            $posts = Order::where('user_id',$cond_title)->get();
        }else{
            $posts = Order::all();
        }
        
        return view('admin.order.index',['posts' => $posts,'cond_title' =>$cond_title]);
    }
    
    public function edit(Request $request)
    {
        $product = Order::find($request->id);
        
        if(empty($order)){
            abort(404); 
        }
        return view('admin.order.edit',['order_form'=>$order]);
    }
    
    
    public function update(Request $request)
    {
        $this -> validate($request,Order::$rules);
        $order = Order::find($request->id);
        $order_form = $request->all();
        
        if($request -> remove == 'ture'){
            $order_form['image_path']=null;
        }elseif ($request->file('image')){
            $path = $request->file('image')->store('public/image');
            $order_form['image_path'] = basename($path);
        }else{
            $order_form['image_path'] = $order->image_path;
        }
        
        unset($order_form['image']);
        unset($porder_form['remove']);
        unset($order_form['_token']);
        $order -> fill($order_form) -> save();
        
        return redirect('admin/order/');
    }
    
    
    public function delete(Request $request)
    {
        $order = Order::find($request->id);
        $order -> delete();
       
        return redirect('admin/order/');
    }
}
