@extends('content.head')
        <table>
            <tr>
                <th>Name</th>
                <th>Amount</th>
                <th></th>
            </tr>
            @foreach($items as $item)
                @if($cartItems->has($item['id']))
                <tr>
                    <td>{{$item['name']}}</td>
                    <td>{{$cartItems->get($item['id'])}}</td>
                    <td><a href="cart/remove/{{$item['id']}}">Remove</a></td>
                </tr>
                @endif
            @endforeach
        </table>
        <a href="cart/drop">Drop the Cart (clear all)</a>
    </body>
</html>
