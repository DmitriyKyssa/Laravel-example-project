@extends('layouts.admin')

@section('content')
    <div class="container mt-5">
        <form action="{{route('admin.product.store')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="title">Название продукта</label>
                <input class="form-control" name="title" type="text" placeholder="Название продукта" value="{{old('title')}}">
                @error('title')
                <p class="alert alert-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="form-group">
                <label for="description">Описание</label>
                <textarea class="form-control" name="description" placeholder="Описание">{{old('description')}}</textarea>
                @error('description')
                <p class="alert alert-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="form-group">
                <label for="price">Цена</label>
                <input class="form-control" name="price" type="number" placeholder="Цена" value="{{old('price')}}">
                @error('price')
                <p class="alert alert-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="form-group">
                <label for="image">Фото</label>
                <input class="form-control" name="image" type="text" placeholder="Фото" value="{{old('image')}}">
                @error('image')
                <p class="alert alert-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="form-group">
                <label for="brand_id">Brand</label>
                <select class="form-control" name="brand_id" id="brand_id">
                    @foreach($brands as $brand)
                        <option
                            {{old('brand_id') == $brand->id ? 'selected' : ''}}
                            value="{{$brand->id}}">{{ $brand->title }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="tags">Tags</label>
                <select multiple class="form-control" id="tags" name="tags[]">
                    @foreach($tags as $tag)
                        <option
                            {{old('tags') != null && in_array($tag->id, old('tags')) ? 'selected' : ''}}
                            value="{{$tag->id}}">{{$tag->title}}</option>
                    @endforeach
                </select>
            </div>
            <div class="mt-3">
                <button type="submit" class="btn btn-dark">Добавить товар</button>
                <button type="button" class="btn btn-warning"><a class="text-decoration-none text-white"
                                                                 href="{{route('admin.product.index')}}">Назад</a></button>
            </div>
        </form>
    </div>

@endsection
