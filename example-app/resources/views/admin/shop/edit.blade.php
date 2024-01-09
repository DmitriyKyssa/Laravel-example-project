@extends('layouts.admin')

@section('content')
    <div class="container mt-5">
        <form action="{{route('admin.shop.update', $shop->id)}}" method="post">
            @csrf
            @method('patch')
            <div class="form-group">
                <label for="exampleFormControlInput1">Название магазина</label>
                <input class="form-control" name="shop_name" type="text" placeholder="Название продукта" value="{{$shop->shop_name}}">
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Город</label>
                <select class="form-control" name="city_id" id="exampleFormControlSelect1">
                    @foreach($cities as $city)
                        <option value="{{$city->id}}" {{$city->id === $shop->city->id ? 'selected' : ''}}>{{ $city->city_name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Адрес</label>
                <input class="form-control" name="address" type="text" placeholder="Адрес" value="{{$shop->address}}">
            </div>
            <div class="mt-3">
                <button type="submit" class="btn btn-dark">Сохранить</button>
                <button type="button" class="btn btn-warning"><a class="text-decoration-none text-white" href="{{route('admin.shop.index')}}">Назад</a></button>
            </div>
        </form>
    </div>
@endsection
