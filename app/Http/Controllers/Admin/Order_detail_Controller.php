<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Order_detail;
use App\Order;
use Carbon\Carbon;
use App\Product;

class Order_detail extends Controller
{
public function add()
    {
        return view('admin.order.create');
    }
    
    public function create(Request $request)
    {
        $products = Product::all();
        return view('order_detail.create', compact('products'));
    }
    
    
    public function index(Request $request)
    {
        $order_details = Order_detail::all();
        return view('order_detail.index', compact('order_detail'));
    }
    
    public function store(Request $request)
    {
        Order_detail::create($request->all());
        return redirect()->route('order_detail.index');
    }
    
    public function edit(Request $request)
    {
        $products = Product::all();
        $order_detail = Order_detail::find($id);
        return view('order_detail.edit', compact('order_detail', 'products'));
    }
    
    
    public function update(Request $request)
    {
        $update = [
            'product_name' => $request->product_name,
            'price' => $request->age,
            'id' => $request->product_id,
            'image_path' => $request->image_path
        ];
        Order_detail::where('id', $id)->update($update);
        return back();
    }
}
