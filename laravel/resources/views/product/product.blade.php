<x-layout>
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
    @if(session()->has('userId'))
    <form method="POST" action="/cart/add">
        @csrf
        <label for="amount">Quantity</label>
        <input type="number" class="numberInput " name="amount" min="1" max="20">
        <input type="hidden" name="productId" value="{{$product->id}}">
        <button type="submit" class="addBtn">Add</button>
    </form>
    @else
    <a href="/login">Login</a> to add items to cart
    @endif
    <br><a href="/products">Return</a>

</x-layout>