@extends('layouts.app')

@section('content')
    <a href="/"><button>HOME</button></a>
    <br>
    <h1>Create Pizza</h1>
    {!! Form::open(['method'=>'POST', 'action'=>'AdminController@createPizza']) !!}
    <div class="form-group">
        {!! Form::label('p_name', 'Name:') !!}
        {!! Form::text('p_name', null, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('type', 'Veg/Non-veg:') !!}
        {!! Form::select('type', ['v'=>'Veg', 'nv'=>'Non-veg'], null, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('crust', 'Crust:') !!}
        {!! Form::select('crust', ['Crust 1'=>'Crust 1', 'Crust 2'=>'Crust 2'], null, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('cheese', 'Cheese:') !!}
        {!! Form::select('cheese', ['Cheese 1'=>'Cheese 1', 'Cheese 2'=>'Cheese 2'], null, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('mrp', 'MRP:') !!}
        {!! Form::number('mrp', null, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('qty_avail', 'Quantity available:') !!}
        {!! Form::number('qty_avail', 0, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Create Pizza', ['class'=>'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}
    <a href="/admin"><button>Back</button>
@endsection