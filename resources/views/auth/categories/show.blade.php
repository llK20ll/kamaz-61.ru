@extends('auth.layouts.master')

@section('title', 'Категория ' . $category->title)

@section('content')
<div class="col-md-12 bg-light">
    <h1>Категория {{ $category->title }}</h1>
    <table class="table">
        <tbody>
            <tr>
                <th>
                    Поле
                </th>
                <th>
                    Значение
                </th>
            </tr>
            <tr>
                <td>ID</td>
                <td>{{$category->id}}</td>
            </tr>
            <tr>
                <td>Код</td>
                <td>{{$category->code}}</td>
            </tr>
            <tr>
                <td>Название</td>
                <td>{{$category->title}}</td>
            </tr>
            <tr>
                <td>Картинка</td>
                <td><img src="
                    @if($category->image == null)
                    {{ asset('/img/no-image-available.png') }}      
                    @else
                    {{ Storage::url($category->image) }}" height="240px"
                    @endif 
                    >
                </td>
            </tr>
            <tr>
                <td>Кол-во товаров</td>
                <td>{{ $category->products->count() }}</td>
            </tr>
        </tbody>
    </table>
</div>
@endsection