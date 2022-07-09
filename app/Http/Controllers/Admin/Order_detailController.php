<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Order_detail;
use App\Order;
use Carbon\Carbon;
use App\Product;

class Order_detailController extends Controller
{
    public function add()
    {
        return view('admin.order_detail.create');
    }
    
    public function create(Request $request)
    {
        $this->validate($request, Order_detail::$rules);
        $order_detail = new Orderdetail();
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
    
        return redirect('admin/order_detail/create');
    }
    
    
    public function index(Request $request)
    {
        $cond_title = $request->cond_title;
        if($cond_title !=''){
            $posts = Order_detail::where('user_id',$cond_title)->get();
        }else{
            $posts = Order_detail::all();
        }
        
        return view('admin.product_detail.index',['posts' => $posts,'cond_title' =>$cond_title]);
    }
    
    public function store(Request $request)
    {
        Order_detail::create($request->all());
        return redirect()->route('order_detail.index');
    }
    
    public function edit(Request $request)
    {
        $order_detail = Order::find($request->id);
        
        if(empty($order)){
            abort(404); 
        }
        return view('admin.order_detail.edit',['order_detail_form'=>$order_detail]);
    }
    
    
    public function update(Request $request)
    {
        $this -> validate($request,Order_detail::$rules);
        $order_detail = Order_detail::find($request->id);
        $order_form = $request->all();
        
        if($request -> remove == 'ture'){
            $order_detail_form['image_path']=null;
        }elseif ($request->file('image')){
            $path = $request->file('image')->store('public/image');
            $order_detail_form['image_path'] = basename($path);
        }else{
            $order_detail_form['image_path'] = $order_detail->image_path;
        }
        
        unset($order_detail_form['image']);
        unset($porder_detail_form['remove']);
        unset($order_detail_form['_token']);
        $order_detail -> fill($orde_detail_form) -> save();
        
        return redirect('admin/order_detail/');
    }
    
    public function delete(Request $request)
    {
        $order_detail = Order_detail::find($request->id);
        $order_detail -> delete();
       
        return redirect('admin/order_detail/');
    }
}
