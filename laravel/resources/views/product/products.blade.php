<x-layout>
    <table>
        <tr>
            <th>Name</th>
            <th>Price</th>
            <th>Details</th>
        </tr>
        @foreach($products as $product)
        <tr>
            <td>{{$product->name}}</td>
            <td>{{$product->price}}</td>
            <td><a href="/product/{{$product->id}}">Details</a></td>
            </td>
        </tr>
        @endforeach
    </table>
</x-layout>