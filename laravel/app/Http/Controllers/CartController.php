<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class CartController extends Controller
{
    public function addCart(Request $request)
    {
        $data = $request->all();
        session()->increment('product' . $data['productId'], $data['amount']);
        return redirect("products");
    }

    public function removeCart($id)
    {
        if (session()->has('product' . $id)) session()->forget('product' . $id);

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

        foreach ($items as $item) {
            if ($cartItems->has('product' . $item['id'])) {
                $amount = $cartItems->get('product' . $item['id']);
                array_push($itemList, ['name' => $item['name'], 'id' => $item['id'], 'amount' => $amount]);
            }
        }

        return view("cart", ['itemList' => $itemList]);
    }
}
