<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Products</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body>
        <table>
            <tr>
                <th>Name</th>
                <th>Amount</th>
                <th></th>
            </tr>
            @foreach($items as $item)
                <tr>
                    <td>{{$item['name']}}</td>
                    <td>{{$cartItems->get($item['id'])}}</td>
                    <td><a href="Remove/{{$item['id']}}">Remove</a></td>
                </tr>
            @endforeach
        </table>
    </body>
</html>
