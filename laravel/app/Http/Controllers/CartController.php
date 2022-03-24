<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class CartController extends Controller
{
    public function addCart($id)
    {
        session()->increment($id);
       
        return redirect("products");
    }

    public function cart()
    {
        $cartItems = session();
        $items = Product::all();

        return view("cart", ['cartItems' => $cartItems, 'items' => $items]);
    }
}
