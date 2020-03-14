@extends('layouts.app')

@section('content')
Product list
    <br>
    
    <a href="/carts/create" class="btn btn-info">Create Product</a>
    @if (count($cart) > 0)
        @foreach ($cart as $cartlist)
        <div class="well">
            <h4> Product {{$cartlist->id}} : {{$cartlist->product_title}}</h4>
            <h5> 
                Price : RM {{$cartlist->product_price}}
            </h5>
            <h5>
            Description: {{$cartlist->product_description}}
            </h5>
            <a href="/carts/{{$cartlist->id}}/edit" class="btn btn-default">Edit</a>
            {{Form::open(['action' => ['CartController@destroy', $cartlist->id], 'method' => 'POST'])}}
                {{Form::hidden('_method','DELETE')}}
                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
            {{Form::close()}}
        </div>
           
        @endforeach

    @else
    No post yet
    @endif
   
@endsection