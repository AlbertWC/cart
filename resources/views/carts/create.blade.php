@extends('layouts.app')

@section('content')
    <h3>Create Product</h3>
    {{Form::open(['action' => 'CartController@store', 'method' => 'POST'])}}
        <div class="form-group">
            {{Form::label('title', 'Product Title')}}
            {{Form::text('title', '', ['class'=> 'form-control','placeholder'=> 'Product Title'])}}

        </div>
        <div class="form-group">
            {{Form::label('price', 'Price')}}
            {{Form::text('price', '', ['class'=> 'form-control','placeholder'=> 'Product Price'])}}

        </div>
        <div class="form-group">
            {{Form::label('title', 'Product title')}}
            {{Form::text('title', '', ['class'=> 'form-control','placeholder'=> 'Product title'])}}

        </div>


    {{Form::close()}}
@endsection