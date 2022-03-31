<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Order_detail;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function loginView()
    {
        if (session()->has('userId')) return redirect('products');
        return view("user/user-login");
    }

    public function registerView()
    {
        return view("user/user-register");
    }

    public function logout()
    {
        if (session()->has('userId')) {
            $userID = session()->get('userId');

            $order = Order::create([
                'order_date' => date("Y-m-d"),
                'description' => 'bestellung',
                'user_id' => $userID
            ]);

            $products = Product::all();

            foreach ($products as $product) {
                if (session()->has('product' . $product->id)) {
                    Order_detail::create([
                        'amount' => session()->get('product' . $product->id),
                        'product_id' => $product->id,
                        'order_id' => $order->id
                    ]);
                }
            }
        }
        session()->flush();
        return redirect('/login');
    }

    public function register(Request $request)
    {
        $data = $request->all();

        // PASSWORT Verschlüsseln
        $password = password_hash($data['password'], PASSWORD_DEFAULT);

        if (User::where('email', '=', $data['email'])->first() === null) {
            // INSERT USER
            $user = User::create([
                'surname' => $data['surname'],
                'name' => $data['firstname'],
                'email' => $data['email'],
                'password' => $password,
                'adress' => $data['street'],
                'house_number' => $data['house_number'],
                'town_id' => 1,
            ]);
            session()->put('userId', $user->id);
            $this->loadCartFromDB();
            return redirect('/products');
        } else {
            return redirect('/login');
        }
    }

    public function login(Request $request)
    {
        $data = $request->all();

        // Check for user
        $user = User::where('email', $data['email'])->first();

        if ($user) {
            if (password_verify($data['password'], $user->password)) {
                session()->put('userId', $user->id);
                $this->loadCartFromDB();
                return redirect('/products');
            } else {
                return redirect('/login');
            }
        } else {
            return redirect('/register');
        }
    }

    private function loadCartFromDB()
    {
        // Load Cart from DB
    }
}
