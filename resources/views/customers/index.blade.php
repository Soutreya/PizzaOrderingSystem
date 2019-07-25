@extends('layouts.app')

@section('content')
    <a href="/"><button>HOME</button></a>
    <br>
    <h1>Hello Customer!</h1>
    <a href="/customers/order"><button>Order pizza</button></a>
    <a href="/customers/history"><button>Order history</button></a>
@endsection