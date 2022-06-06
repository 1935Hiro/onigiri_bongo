<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\Details;
use App\User;
use App\History;
use App\Subsc;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
        {
            $this->middleware('auth');
        }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
        {
            return view('mypage');
        }
    
    public function mypage()
        {
            return view('mypage');
        }
    
    public function store(Request $request)
        {
            $data = $request->all();
            $order_id = Index::insertGetId(['user_id' => $data['user_id'], 'product_id' => $product_id,'product']);
            
            return redirect() -> route('order',compact('user,order_id'));
        }
    
    public function order()
        {
            return view('order');
        }
    
    public function details()
        {
            return view('details');
        }
    
    public function history()
        {
            return view('history');
        }
        
    public function subsc()
        {
            return view('subsc');
        }
        
     public function upload(Request $request)
    {
        $dir = 'sample';
        $request->file('image')->store('public/' . $dir);

        return redirect('/');
    }
}
