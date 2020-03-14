@extends('layouts.app')

@section('content')
    <h3>Edit Product</h3>
    {{Form::open(['action' => ['CartController@update', $cart->id], 'method' => 'PUT'])}}
        <div class="form-group">
            {{Form::label('title', 'Product Title')}}
            {{Form::text('title', $cart->product_title, ['class'=> 'form-control','placeholder'=> 'Product Title'])}}

        </div>
        
        <div class="form-group">
            {{Form::label('price', 'Price')}}
            {{Form::text('price', $cart->product_price, ['class'=> 'form-control','placeholder'=> 'Product Price'])}}

        </div>
        <div class="form-group">
            {{Form::label('description', 'Product Description')}}
            {{Form::text('description', $cart->product_description, ['class'=> 'form-control','placeholder'=> 'Product Description'])}}
        </div>

        {{Form::submit('Submit' ,['class'=> 'btn btn-primary'])}}


    {{Form::close()}}
@endsection