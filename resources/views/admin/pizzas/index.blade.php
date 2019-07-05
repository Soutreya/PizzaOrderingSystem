<a href="/"><button>HOME</button></a>
<br>
<h1>Pizzas</h1>
<table class="table">
    <thread>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Type</th>
            <th>Crust</th>
            <th>Cheese</th>
            <th>MRP</th>
            <th>Available</th>
        </tr>
    </thread>
    <tbody>
    @if($pizzas)
        @foreach($pizzas as $pizza)
            <tr>
                <td>{{$pizza->p_id}}</td>
                <td>{{$pizza->p_name}}</td>
                <td>{{$pizza->type}}</td>
                <td>{{$pizza->crust}}</td>
                <td>{{$pizza->cheese}}</td>
                <td>{{$pizza->mrp}}</td>
                <td>{{$pizza->qty_avail}}</td>
            </tr>
        @endforeach
    @endif
    </tbody>
</table>
