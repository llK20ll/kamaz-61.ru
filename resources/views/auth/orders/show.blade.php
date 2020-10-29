@extends('auth.layouts.master')

@section('title', 'Заказ' . $order->id)

@section('content')
<div class="col-md-12 bg-light">
                <h1>Заказ #{{$order->id}}</h1>
                <p>Заказчик: <b>{{$order->name}}</b></p>
                <p>Номер телефона: <b>{{$order->phone}}</b></p>
                <table class="table">
                    <thead class="tableCaption">
                        <tr>
                            <th class="align-middle">Название</th>
                            <th class="align-middle">Кол-во</th>
                            <th class="align-middle">Цена</th>
                            <th class="align-middle">Стоимость</th>
                        </tr>                        
                    </thead>
                    <tbody>
                        @foreach ($order->products as $product)
                        <tr>
                            <td class="align-middle">
                                <a href=" {{ route('product', [$product->category, $product]) }}">
                                <img height="56px" src="{{ Storage::url($product->image) }}" alt="{{ $product->model}}">
                                    {{ $product->model}}
                                </a>
                            </td>
                            <td class="align-middle"><span class="badge">{{ $product->pivot->count }}</span></td>
                            <td class="align-middle">{{ number_format( $product->price ) }} руб.</td>
                            <td class="align-middle">{{ number_format( $product->getPriceForCount()) }} руб.</td>
                        </tr>
                        @endforeach

    
                        <tr>
                            <td colspan="3">Общая стоимость</td>
                            <td>{{ number_format( $order->getFullPrice()) }} руб.</td>
                        </tr>
                    </tbody>
                </table>
            </div>
@endsection