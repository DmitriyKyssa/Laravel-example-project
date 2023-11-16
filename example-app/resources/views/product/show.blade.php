@extends('layouts/layout')
@section('content')
    <div class="container mt-5">
        <table class="table table-dark">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Навзвание продукта:</th>
                <th scope="col">Описание:</th>
                <th scope="col">Цена:</th>
                <th scope="col">Brand:</th>
            </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">{{$product->id}}</th>
                    <td>{{$product->title}}</td>
                    <td>{{$product->description}}</td>
                    <td>{{$product->price}}$</td>
                    <td>{{$product->brand->title}}</td>
                </tr>
            </tbody>
        </table>
        <button type="button" class="btn btn-dark"><a class="text-decoration-none text-white" href="{{route('products.index')}}">Назад</a></button>
    </div>
@endsection
