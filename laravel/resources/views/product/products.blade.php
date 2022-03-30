@extends('content.head')
        <table>
         <tr>
          <th>Name</th>
          <th>Price</th>
          <th>Details</th>
          <th># added to Cart</th>
          <th>Add to Cart</th>
         </tr>
            @foreach($products as $product)
             <tr>
              <td>{{$product->name}}</td>
              <td>{{$product->price}}</td>
              <td><a href="/product/{{$product->id}}">Details</a></td>
              <td>
                <form method="POST" action="/cart/add">
                    @csrf

                    <input type="number" class="numberInput " name="amount" min="1" max="20">
              </td>
              <td>
                    <input type="hidden" name="productId" value="{{$product->id}}">
                    <button type="submit" class="addBtn">+</button>
                </form>
              </td>
             </tr>
            @endforeach
        </table>
    </body>
</html>
