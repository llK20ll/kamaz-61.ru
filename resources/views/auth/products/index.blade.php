@extends('auth.layouts.master')

@section('title', 'Kamaz-61.ru | Админка | Позиции')

@section('content')
<div class="col-md-12">
    <h1>Позиции</h1>
    <table class="table text-center bg-light">
        <tbody>
        <tr>
            <th class="text-left align-middle tableCaption">
                ID
            </th>
            <th class="text-center align-middle tableCaption">
                Фото
            </th>
            <th class="text-center align-middle tableCaption">
                Модель
            </th>
            <th class="text-center align-middle tableCaption">
                Цена
            </th> 
            <th class="text-center align-middle tableCaption">
                Категория
            </th>
            <th class="text-center align-middle tableCaption">
                Действия
            </th>
        </tr>

        @foreach ($products as $product)
        <tr>
            <td class="align-middle">{{ $product->id }}</td>

            <td class="align-middle"> 
                <img style="width: 55px; vertical-align: middle;" src="
                @if($product->image == null)
                {{ asset('/img/no-image-available.png') }}      
                @else
                {{ Storage::url($product->image) }}
                @endif
                    " class="card-img-top" alt="{{ $product->model ?? ''}}">
            </td>

            <td class="align-middle w-20 text-truncate" style="vertical-align: middle;"><a href="{{route('product', [$product->category, $product])}}">{{ $product->model ?? ''}}</a> </td>
            
            
            <td class="align-middle" style="vertical-align: middle;">
                @isset($product->new_price)               
                <span class="badge badge-success" style="font-size: 17px">{{ number_format($product->new_price)}}  руб.</span>
                @else
                <span>{{ number_format( $product->price ?? '' )}} руб.</span>
                @endisset
            </td>


            <td class="align-middle" style="vertical-align: middle;">{{ $product->category->title }}</td>


            <td class="align-middle">
                <div class="btn-group" role="group">
                    <form action=" {{ route('products.destroy', $product) }}" method="POST">
                        <a class="btn btn-primary cardbtn" type="button" href="{{ route('products.show', $product) }}">Открыть</a>
                        <a class="btn btn-success" type="button" href="{{ route('products.edit', $product) }}">Редактировать</a>
                        @csrf
                        @method('DELETE')                        
                        <input class="btn btn-danger" type="submit" value="Удалить">
                    </form>
                </div>
            </td>
        </tr>
        @endforeach

        </tbody>
    </table>
    {{ $products->links('vendor.pagination.bootstrap-4') }}
    <a class="btn btn-primary cardbtn mt-3" type="button" href="{{ route('products.create')}}">Добавить товар</a>
</div>
@endsection