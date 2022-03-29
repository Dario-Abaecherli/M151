<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class CartController extends Controller
{
    public function addCart(Request $request)
    {
        $data = $request->all();
        if(!session()->has($data['productId']))
        {
            session()->put($data['productId'], 0);
        }

        session()->increment($data['productId'], $data['amount']);
        return redirect("products");
    }

    public function removeCart($id)
    {
        session()->forget($id);
        return redirect("cart");
    }

    public function dropCart()
    {
        $userId = session()->get('userId');
        session()->flush();
        session()->put('userId', $userId);
        return redirect("cart");
    }

    public function cart()
    {
        $cartItems = session();
        $items = Product::all();

        return view("cart", ['cartItems' => $cartItems, 'items' => $items]);
    }
}
