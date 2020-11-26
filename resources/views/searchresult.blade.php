@extends('layouts.master')

@section('title',' | Результаты поиска по запросу')

@section('content')

    <h1 class="py-1">Результаты поиска</h1>

    <table  class="table text-center bg-light">

        <tbody>

            <tr>
                <th class="text-center align-middle tableCaption">
                    Фото
                </th>
                <th class="text-center align-middle tableCaption">
                    Категория
                </th>
                <th class="text-center align-middle tableCaption">
                    Модель
                </th>
                <th class="text-center align-middle tableCaption">
                    Цена
                </th>
                <th class="text-center align-middle tableCaption">
                    Действие
                </th> 
               
            </tr>

        @foreach ($products as $product)
            <tr>
                <td class="align-middle">
                    <img class="serchresult__img" src="
                    @if($product->image == null)
                    {{ asset('/img/no-image-available.png') }}      
                    @else
                    {{ Storage::url($product->image) }}
                    @endif
                    " alt="{{$product->model ?? ''}}">
                </td>
                <td class="align-middle">

                    {{$product->category->title}}

                </td>
                
                

                <td class="align-middle">
                    {{$product->model}}
                </td>
                
                <td class="align-middle">
                    <div class="block__item">
                        @isset($product->new_price)
                        
                        <span class="badge badge-success" style="font-size: 17px">{{ number_format($product->new_price)}}</span> руб.
                        @else
                        <span>{{ number_format($product->price)}}</span> руб.
                        @endisset
                    </div>
                </td>

                <td class="align-middle">
                    <button type="submit" class="btn btn-outline-primary w-100 cardbtn text-center" role="button" title="Поместить в корзину">
                        <span class="align-middle">
                        В корзину 
                        <svg width="1.2em" height="1.2em" viewBox="0 0 16 16" class="bi bi-cart4" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"></path>
                        </svg>       
                        </span>       
                    </button>                
                </td>

            </tr>
        @endforeach
        </tbody>
    </table>
@endsection