@extends('layouts.layout')
@section('content')
    <div class="container mt-5">
        <form action="{{route('products.store')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="exampleFormControlInput1">Название продукта</label>
                <input class="form-control" name="title" type="text" placeholder="Название продукта">
            </div>
            <div class="form-group">
                <label>Описание</label>
                <textarea class="form-control" name="description" placeholder="Описание"></textarea>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Цена</label>
                <input class="form-control" name="price" type="number" placeholder="Цена">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Фото</label>
                <input class="form-control" name="image" type="text" placeholder="Фото">
            </div>
            <div class="mt-3">
                <button type="submit" class="btn btn-dark">Добавить товар</button>
                <button type="button" class="btn btn-warning"><a class="text-decoration-none text-white" href="{{route('products.index')}}">Назад</a></button>
            </div>
        </form>
    </div>

@endsection