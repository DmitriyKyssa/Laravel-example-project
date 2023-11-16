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
            <div class="form-group">
                <label for="exampleFormControlSelect1">Brand</label>
                <select class="form-control" name="brand_id" id="exampleFormControlSelect1">
                    @foreach($brands as $brand)
                        <option value="{{$brand->id}}">{{ $brand->title }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="tags">Tags</label>
                <select multiple class="form-control" id="tags" name="tags[]">
                    @foreach($tags as $tag)
                        <option value="{{$tag->id}}">{{$tag->title}}</option>
                    @endforeach
                </select>
            </div>
            <div class="mt-3">
                <button type="submit" class="btn btn-dark">Добавить товар</button>
                <button type="button" class="btn btn-warning"><a class="text-decoration-none text-white" href="{{route('products.index')}}">Назад</a></button>
            </div>
        </form>
    </div>

@endsection
