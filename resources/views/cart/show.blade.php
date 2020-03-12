@extends('layouts.app')

@section('content')
Product list

    @foreach ($cart as $cartlist)
        Product{{$cartlist->id}} : {{$cartlist->product_title}}
        Price : {{$cartlist->price}}
        Description: {{$cartlist->description}}
    @endforeach
@endsection