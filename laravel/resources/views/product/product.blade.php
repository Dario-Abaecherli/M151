@extends('content.head')
        <img width="20%" src="{{asset($product->imagePath)}}">
        <table>
         <tr>
          <th>Name</th>
          <th>Description</th>
          <th>Price</th>
         </tr>
         <tr>
          <td>{{$product->name}}</td>
          <td>{{$product->description}}</td>
          <td>{{$product->price}}</td>
         </tr>
        </table>
        <a href="/products">Return</a>
    </body>
</html>
