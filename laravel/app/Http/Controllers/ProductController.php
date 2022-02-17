<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function product($id)
    {
        dd($id);
    }

    public function products()
    {
        $products = \App\Models\Product::all();
        dd($products);
    }
}
