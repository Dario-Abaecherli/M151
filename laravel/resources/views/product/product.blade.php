@extends('content.head')
        <table>
         <tr>
          <th></th>
          <th>Name</th>
          <th>Description</th>
          <th>Price</th>
         </tr>
         <tr>
          <td><img src="{{$product->image}}"></td>
          <td>{{$product->name}}</td>
          <td>{{$product->description}}</td>
          <td>{{$product->price}}</td>
         </tr>
        </table>
    </body>
</html>
