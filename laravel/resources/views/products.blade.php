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
          <th>Price</th>
          <th>Details</th>
          <th>Add to Cart</th>
         </tr>
            @foreach($products as $product)
             <tr>
              <td>{{$product->name}}</td>
              <td>{{$product->price}}</td>
              <td><a href="/product/{{$product->id}}">Link</a></td>
              <td><a href="/cart/add/{{$product->id}}">Add Product to Cart</a></td>
             </tr>
            @endforeach
        </table>
    </body>
</html>
