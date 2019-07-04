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
                        <input type="number" class="form-control" id="qty" name="qty">
                    </div>
                    <button type="submit" class="btn btn-primary">Place order</button>
                </form>
                </td>
            </tr>
        @endforeach
    @endif
    </tbody>
</table>



{{--{!! Form::open(['method'=>'POST', 'action'=>'AdminController@createOrder']) !!}--}}
{{--<div class="form-group">--}}
{{--    {!! Form::number('qty', 0, ['class'=>'form-control']) !!}--}}
{{--</div>--}}
{{--<div class="form-group">--}}
{{--    {!! Form::submit('Place order', ['class'=>'btn btn-primary']) !!}--}}
{{--</div>--}}
{{--{!! Form::close() !!}--}}