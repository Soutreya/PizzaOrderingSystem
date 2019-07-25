@extends('layouts.app')

@section('content')
    <a href="/"><button>HOME</button></a>
    <br>
    <h1>Orders</h1>
    <table class="table">
        <thread>
            <tr>
                <th>ID</th>
                <th>Customer ID</th>
                <th>Customer name</th>
                <th>Pizza</th>
                <th>Quantity</th>
                <th>Cost</th>
                <th>Created</th>
                <th>Updated</th>
            </tr>
        </thread>
        <tbody>
        @if($orders)
            @foreach($orders as $order)
                <tr>
                    <td>{{$order->o_id}}</td>
                    <td>{{$order->id}}</td>
                    <td>{{$order->name}}</td>
                    @foreach($pizzas as $pizza)
                        @if($pizza->p_id==$order->p_id)
                            <td>{{$pizza->p_name}}</td>
                        @endif
                    @endforeach
                    <td>{{$order->qty}}</td>
                    <td>{{$order->cost}}</td>
                    <td>{{$order->created_at->diffForHumans()}}</td>
                    <td>{{$order->updated_at->diffForHumans()}}</td>
                </tr>
            @endforeach
        @endif
        </tbody>
    </table>
    <a href="/admin"><button>Back</button></a>
@endsection