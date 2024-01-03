@extends('layouts.admin')

@section('content')
    <div class="container mt-5">
        <form action="{{route('admin.shop.store')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="shop_name">Название магазина</label>
                <input class="form-control" name="shop_name" type="text" placeholder="Название продукта" value="{{old('shop_name')}}">
                @error('shop_name')
                <p class="alert alert-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="form-group">
                <label for="city_id">Город</label>
                <select class="form-control" name="city_id" id="city_id">
                    @foreach($cities as $city)
                        <option
                            {{old('city_id') == $city->id ? 'selected' : ''}}
                            value="{{$city->id}}">{{ $city->city_name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="address">Адрес</label>
                <textarea class="form-control" name="address" placeholder="Адрес">{{old('address')}}</textarea>
                @error('address')
                <p class="alert alert-danger">{{$message}}</p>
                @enderror
            </div>
{{--            <div class="form-group">--}}
{{--                <label for="price">Цена</label>--}}
{{--                <input class="form-control" name="price" type="number" placeholder="Цена" value="{{old('price')}}">--}}
{{--                @error('price')--}}
{{--                <p class="alert alert-danger">{{$message}}</p>--}}
{{--                @enderror--}}
{{--            </div>--}}
{{--            <div class="form-group">--}}
{{--                <label for="image">Фото</label>--}}
{{--                <input class="form-control" name="image" type="text" placeholder="Фото" value="{{old('image')}}">--}}
{{--                @error('image')--}}
{{--                <p class="alert alert-danger">{{$message}}</p>--}}
{{--                @enderror--}}
{{--            </div>--}}

{{--            <div class="form-group">--}}
{{--                <label for="tags">Tags</label>--}}
{{--                <select multiple class="form-control" id="tags" name="tags[]">--}}
{{--                    @foreach($tags as $tag)--}}
{{--                        <option--}}
{{--                            {{old('tags') != null && in_array($tag->id, old('tags')) ? 'selected' : ''}}--}}
{{--                            value="{{$tag->id}}">{{$tag->title}}</option>--}}
{{--                    @endforeach--}}
{{--                </select>--}}
{{--            </div>--}}
            <div class="mt-3">
                <button type="submit" class="btn btn-dark">Добавить магазин</button>
                <button type="button" class="btn btn-warning"><a class="text-decoration-none text-white"
                                                                 href="{{route('admin.shop.index')}}">Назад</a></button>
            </div>
        </form>
    </div>

@endsection
