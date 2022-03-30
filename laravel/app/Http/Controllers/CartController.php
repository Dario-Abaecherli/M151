<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class CartController extends Controller
{
    public function addCart(Request $request)
    {
        $data = $request->all();

        // dd($data['productId']);
        session()->increment($data['productId'], $data['amount']);

        // dd(session()->get($data['productId']));
        return redirect("products");
    }

    public function removeCart($id)
    {
        if(session()->has($id)) session()->forget($id);
        
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

        $itemList = [];

        foreach($items as $item)
        {
            if($cartItems->has($item['id']))
            {
                $amount = $cartItems->get($item['id']);
                array_push($itemList, ['name' => $item['name'], 'id' => $item['id'], 'amount' => $amount]);
            }
        }

        return view("cart", ['itemList' => $itemList]);
    }
}
