<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\HTML;
use App\Product;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $posts = Product::all()->sortBy('updated_at');
        
        return view('product.index', ['posts' => $posts]);
    }
}

