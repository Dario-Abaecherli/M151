<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addCart($id)
    {
        // $product = \App\Models\Product::find($id);
        // session()->flush();


        if(session($id)==null)
        {
            session()->put($id, 1);
        }
        session()->increment($id);

        return redirect("products");
    }

    public function cart()
    {
        $cartItems = array();

        $cartItems = session()->all();

        return view("cart", ['cartItems' => $cartItems]);
    }
}
