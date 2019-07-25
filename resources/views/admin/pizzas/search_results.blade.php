@extends('layouts.app')

@section('content')
    <a href="/"><button>HOME</button></a>
    <br>
    <h1>Search results</h1>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Pizza</th>
            <th>Crust</th>
            <th>Cheese</th>
        </tr>
        </thead>
        <tbody>
        @foreach($details as $pizza)
            <tr>
                <td>{{$pizza->p_name}}</td>
                <td>{{$pizza->crust}}</td>
                <td>{{$pizza->cheese}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection