<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Products</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">

</head>


<body>

    <nav>
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/products">Products</a></li>
            @if(session()->has('userId'))
            <li><a href="/cart">Cart</a></li>
            <li style="float:right"><a class="active" href="/logout">Logout</a></li>
            @else
            <li style="float:right"><a class="active" href="/login">Login</a></li>
            @endif
        </ul>
    </nav>


    {{ $slot }}
</body>