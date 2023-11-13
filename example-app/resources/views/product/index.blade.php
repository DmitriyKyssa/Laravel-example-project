@extends('layouts.layout')
@section('content')
    @foreach($product as $item)
        <div>Навзание продукта: {{$item -> title}}</div>
    @endforeach
@endsection
