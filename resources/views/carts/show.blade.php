@extends('layouts.app')

@section('content')
Product list
    @if (count($cart) > 0)
        @foreach ($cart as $cartlist)
            Product{{$cartlist->id}} : {{$cartlist->product_title}}
            Price : {{$cartlist->price}}
            Description: {{$cartlist->description}}
        @endforeach

    @else
    No post yet
    @endif
   
@endsection