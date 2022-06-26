<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\History;
use Carbon\Carbon;

class ProductController extends Controller
{
    public function add()
    {
        return view('admin.product.create');
    }
    
    public function create(Request $request)
    {
        $this->validate($request, Product::$rules);
        $product = new Product();
        $form = $request->all();
    
        if (isset($form['image'])) {
            $path = $request->file('image')->store('public/image');
            $product->image_path = basename($path);
        } else {
            $product->image_path = null;
        }
    
        unset($form['_token']);
        unset($form['image']);
    
        $product->fill($form);
        $product->save();
    
        return redirect('admin/product/create');
    }
    
    
    public function index(Request $request)
    {
        $cond_title = $request->cond_title;
        if($cond_title !=''){
            $posts = Product::where('product_name',$cond_title)->get();
        }else{
            $posts = Product::all();
        }
        
        return view('admin.product.index',['posts' => $posts,'cond_title' =>$cond_title]);
    }
    
    public function order()
    {
    return $this->hasManyThrough('admin/details');
    }
    
    
    public function edit(Request $request)
    {
        $product = Product::find($request->id);
        
        if(empty($product)){
            abort(404); 
        }
        return view('admin.product.edit',['product_form'=>$product]);
    }
    
    
    public function update(Request $request)
    {
        $this -> validate($request,Product::$rules);
        $product = Product::find($request->id);
        $product_form = $request->all();
        
        if($request -> remove == 'ture'){
            $product_form['image_path']=null;
        }elseif ($request->file('image')){
            $path = $request->file('image')->store('public/image');
            $product_form['image_path'] = basename($path);
        }else{
            $product_form['image_path'] = $product->image_path;
        }
        
        unset($product_form['image']);
        unset($product_form['remove']);
        unset($product_form['_token']);
        $product -> fill($product_form) -> save();
        
        $history = new History();
        $history-> product_id = $product->id;
        $history-> edited_at = Carbon::now();
        $history-> save();
        
        return redirect('admin/product/');
    }
    
    
    public function delete(Request $request)
    {
        $product = Product::find($request->id);
        $product -> delete();
       
        return redirect('admin/product/');
    }
}
