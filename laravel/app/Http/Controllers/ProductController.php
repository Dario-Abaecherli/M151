<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function product($id)
    {
        $product = \App\Models\Product::find($id);

        return view("product/product", ['product' => $product]);
    }

    public function products()
    {
        $products = \App\Models\Product::all();

        return view("product/products", ['products' => $products]);
    }
}
