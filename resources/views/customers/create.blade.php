@extends('layouts.app')

@section('content')
    <a href="/"><button>HOME</button></a>
    <br>
    <h1>Create Customer</h1>
    {!! Form::open(['method'=>'POST', 'action'=>'AdminController@createCustomer']) !!}
    <div class="form-group">
        {!! Form::label('c_name', 'Name:') !!}
        {!! Form::text('c_name', null, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('email', 'Email:') !!}
        {!! Form::email('email', null, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('phone', 'Phone:') !!}
        {!! Form::text('phone', null, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('password', 'Password:') !!}
        {!! Form::password('password', ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Create Customer', ['class'=>'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}
@endsection
