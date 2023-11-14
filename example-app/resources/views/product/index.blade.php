@extends('layouts.layout')
@section('content')
    <div class="container mt-5">
            <table class="table table-dark">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Навзвание продукта:</th>
                    <th scope="col">Описание:</th>
                    <th scope="col">Цена:</th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($product as $item)
                <tr>
                    <th scope="row">{{$item->id}}</th>
                    <td>{{$item->title}}</td>
                    <td>{{$item->description}}</td>
                    <td>{{$item->price}}$</td>
                    <td>
                        <a href="{{route('products.show', $item->id)}}"><img class="text-white bg-dark" style="width: 30px" src="{{asset('img/info.png')}}" alt="Watch details"></a>
                        <a class="m-1" href="{{route('products.edit', $item->id)}}"><img class="text-white bg-dark" style="width: 30px" src="{{asset('img/edit.png')}}" alt="Edit product"></a>
                    </td>
                    <td>
                        <form action="{{route('products.destroy', $item->id)}}" method="post">
                            @csrf
                            @method('delete')
                            <input class="btn btn-danger" type="submit" value="Удалить продукт">
                        </form>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        <button type="button" class="btn btn-primary"><a class="text-decoration-none text-white" href="{{route('products.create')}}">Добавить новый товар</a></button>
    </div>

@endsection
