@extends('layouts.app')

@section('content')
    <a href="/"><button>HOME</button></a>
    <br>
    <h1>Welcome Admin!</h1>
    <a href="/admin/customers"><button>Customers</button></a>
    <a href="/admin/pizzas/create"><button>Create pizza</button></a>
    <a href="/admin/orders"><button>View orders</button></a>
@endsection