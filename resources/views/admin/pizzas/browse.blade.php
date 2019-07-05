<a href="/"><button>HOME</button></a>
<br>
<h1>Select pizza</h1>
<table class="table">
    <thread>
        <tr>
            <th>Name</th>
            <th>Type</th>
            <th>Crust</th>
            <th>Cheese</th>
            <th>MRP</th>
        </tr>
    </thread>
    <tbody>
    @if($pizzas)
        @foreach($pizzas as $pizza)
            <tr>
                <td>{{$pizza->p_name}}</td>
                <td>{{$pizza->type}}</td>
                <td>{{$pizza->crust}}</td>
                <td>{{$pizza->cheese}}</td>
                <td>{{$pizza->mrp}}</td>
                <td>
                <form method="POST" action="{{route('browse', $pizza->p_id)}}">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <input type="number" class="form-control" name="qty">
                    </div>
                    <button type="submit" class="btn btn-primary">Place order</button>
                </form>
                </td>
            </tr>
        @endforeach
    @endif
    </tbody>
</table>



{{--<form method="POST" action="{{route('browse')}}">--}}
{{--    {{ csrf_field() }}--}}
{{--<a href="/"><button>HOME</button></a>--}}
{{--<br>--}}
{{--<h1>Select pizza</h1>--}}
{{--<table class="table">--}}
{{--    <thread>--}}
{{--        <tr>--}}
{{--            <th>Name</th>--}}
{{--            <th>Type</th>--}}
{{--            <th>Crust</th>--}}
{{--            <th>Cheese</th>--}}
{{--            <th>MRP</th>--}}
{{--        </tr>--}}
{{--    </thread>--}}
{{--    <tbody>--}}
{{--    @if($pizzas)--}}
{{--        @foreach($pizzas as $pizza)--}}
{{--            <tr>--}}
{{--                <td>{{$pizza->p_name}}</td>--}}
{{--                <td>{{$pizza->type}}</td>--}}
{{--                <td>{{$pizza->crust}}</td>--}}
{{--                <td>{{$pizza->cheese}}</td>--}}
{{--                <td>{{$pizza->mrp}}</td>--}}
{{--                <td>--}}
{{--                    <div class="form-group">--}}
{{--                        <input type="number" class="form-control" name={{$pizza->p_id}}>--}}
{{--                    </div>--}}
{{--                </td>--}}
{{--            </tr>--}}
{{--        @endforeach--}}
{{--    @endif--}}
{{--    </tbody>--}}
{{--</table>--}}
{{--<button type="submit" class="btn btn-primary">Place order</button>--}}
{{--</form>--}}