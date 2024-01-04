@extends('layouts.admin')

@section('content')
    <div class="container mt-5">
        <div class="btn-group pb-3 pt-3" role="group" aria-label="Basic example">
            <a href="{{url('/export')}}"><button type="button" class="btn btn-primary">Export Excel</button></a>
        </div>
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
            @foreach($shop as $item)
                <tr>
                    <th scope="row">{{$item->id}}</th>
                    <td>{{$item->shop_name}}</td>
                    <td>{{$item->city->city_name}}</td>
                    <td>{{$item->address}}</td>
                    <td>
                        <a href="{{route('admin.shop.show', $item->id)}}"><img class="text-white bg-dark" style="width: 30px" src="{{asset('img/info.png')}}" alt="Watch details"></a>
                        <a class="m-1" href="{{route('admin.shop.edit', $item->id)}}"><img class="text-white bg-dark" style="width: 30px" src="{{asset('img/edit.png')}}" alt="Edit product"></a>
                    </td>
                    <td>
                        <form action="{{route('admin.shop.destroy', $item->id)}}" method="post">
                            @csrf
                            @method('delete')
                            <input class="btn btn-danger" type="submit" value="Удалить магазин">
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
{{--        {{ $shop->links() }}--}}
        <button type="button" class="btn btn-primary"><a class="text-decoration-none text-white" href="{{route('admin.shop.create')}}">Добавить новый магазин</a></button>
    </div>
@endsection
