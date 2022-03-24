<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function loginView()
    {
        return view("user/user-login");
    }

    public function registerView()
    {
        return view("user/user-register");
    }

    public function logoutView($id)
    {

    }

    public function register(Request $request)
    {
        $data = $request->all();

        // PASSWORT Verschlüsseln
        $password = password_hash($data['password'], PASSWORD_DEFAULT);


        var_dump($data['surname']);
        // INSERT USER
        User::create([
            'surname' => $data['surname'],
            'name' => $data['prename'],
            'email' => $data['email'],
            'password' => $password,
            'salt' => '1234567890',
            'adress' => $data['street'],
            'house_number' => $data['house_number'],
            'town_id' => 1,
        ]);

        return redirect('/user/login');
    }

    public function login(Request $request)
    {
        $data = $request->all();

        // Check for user
        $user = User::where('email', $data['email'])->first();

        if($user)
        {
            if (password_verify($data['password'], $user->password)) {
                session()->put('userId', $user->id);
                return redirect('/products');
            }
            else
            {
                return redirect('/user/login');
            }
        }
        else
        {
            return redirect('/user/register');
        }
    }
}
