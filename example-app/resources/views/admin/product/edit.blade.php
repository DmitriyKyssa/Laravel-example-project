@extends('layouts.admin')

@section('content')
    <div class="container mt-5">
        <form action="{{route('admin.product.update', $product->id)}}" method="post">
            @csrf
            @method('patch')
            <div class="form-group">
                <label for="exampleFormControlInput1">Название продукта</label>
                <input class="form-control" name="title" type="text" placeholder="Название продукта" value="{{$product->title}}">
            </div>
            <div class="form-group">
                <label>Описание</label>
                <textarea class="form-control" name="description" placeholder="Описание">{{$product->description}}</textarea>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Цена</label>
                <input class="form-control" name="price" type="number" placeholder="Цена" value="{{$product->price}}">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Фото</label>
                <input class="form-control" name="image" type="text" placeholder="Фото" value="{{$product->image}}">
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Brand</label>
                <select class="form-control" name="brand_id" id="exampleFormControlSelect1">
                    @foreach($brands as $brand)
                        <option value="{{$brand->id}}" {{$brand->id === $product->brand->id ? 'selected' : ''}}>{{ $brand->title }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="tags">Tags</label>
                <select multiple class="form-control" id="tags" name="tags[]">
                    @foreach($tags as $tag)
                        <option
                            @foreach($product->tags as $productTag)
                                {{$tag->id === $productTag->id ? 'selected' : ''}}
                            @endforeach
                            value="{{$tag->id}}"

                        >
                            {{$tag->title}}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="mt-3">
                <button type="submit" class="btn btn-dark">Сохранить</button>
                <button type="button" class="btn btn-warning"><a class="text-decoration-none text-white" href="{{route('admin.product.index')}}">Назад</a></button>
            </div>
        </form>
    </div>
@endsection
