@extends('layouts.admin')

@section('content')
    <div class="container mt-5">
        <table class="table table-dark">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Навзвание магазина:</th>
                <th scope="col">Город:</th>
                <th scope="col">Адрес:</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">{{$shop->id}}</th>
                <td>{{$shop->shop_name}}</td>
                <td>{{$shop->city->city_name}}</td>
                <td>{{$shop->address}}</td>
            </tr>
            </tbody>
        </table>
        <button type="button" class="btn btn-dark"><a class="text-decoration-none text-white"
                                                      href="{{route('admin.shop.index')}}">Назад</a></button>
    </div>
@endsection
