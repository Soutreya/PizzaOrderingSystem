<a href="/"><button>HOME</button></a>
<br>
    <h1>Order history</h1>
    <table class="table">
        <thread>
            <tr>
                <th>Order ID</th>
                <th>Pizza name</th>
                <th>Quantity</th>
                <th>Cost</th>
            </tr>
        </thread>
        <tbody>
        @if($orders)
            @foreach($orders as $order)
                @if($order->id==$user->id)
                <tr>
                    <td>{{$order->o_id}}</td>
                    <td>{{$pizzas->find($order->p_id)->p_name}}</td>
                    <td>{{$order->qty}}</td>
                    <td>{{$order->cost}}</td>
                </tr>
                @endif
            @endforeach
        @endif
        </tbody>
    </table>
</form>
<a href="/customers"><button>Back</button></a>