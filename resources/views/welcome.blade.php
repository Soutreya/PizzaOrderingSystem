@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome to Pizza Ordering!</div>

                <div class="panel-body">
                    New customer? <a href="/customers/create"><button>Click here</button></a>
                    Existing customer? <a href="/customers/login"><button>Click here</button></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
