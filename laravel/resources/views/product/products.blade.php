<x-layout>
    <table>
        <tr>   
            <th></th>
            <th>Name</th>
            <th>Price</th>
            <th>Details</th>
        </tr>
        @foreach($products as $product)
        <tr>
            <td><img height="40px" width="auto" src="{{asset($product->imagePath)}}" alt="product Image: {{$product->name}}"></td>
            <td>{{$product->name}}</td>
            <td>{{$product->price}}</td>
            <td><a href="/product/{{$product->id}}">Details</a></td>
            </td>
        </tr>
        @endforeach
    </table>
</x-layout>