@extends('content.head')
        <table>
            <tr>
                <th>Name</th>
                <th>Amount</th>
                <th></th>
            </tr>
            @foreach($itemList as $item)
                <tr>
                    <td>{{$item['name']}}</td>
                    <td>{{$item['amount']}}</td>
                    <td><a href="cart/remove/{{$item['id']}}">Remove</a></td>
                </tr>
            @endforeach
        </table>
        <a href="cart/drop">Drop the Cart (clear all)</a>
    </body>
</html>
