@extends('layouts.app')

@section('content')
    <a href="/"><button>HOME</button></a>
    <br>
    <h1>Order confirmed</h1>
    <h1>Bill amount: Rs. {{$cost}}</h1>
@endsection