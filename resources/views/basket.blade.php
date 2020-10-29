@extends('layouts.master')

@section('title', 'Корзина')

@section('content')


    <div class="col-12">
        <br>
        <h2>Корзина</h2>
        <p><h4 class="text-center">Оформление заказа</h4></p>
        <div class="panel">
            <table class="table table-stripped bg-light">
                <thead>
                    <tr>
                        <th class="tableCaption align-middle">Название</th>
                        <th class="tableCaption align-middle">Кол-во</th>
                        <th class="tableCaption align-middle">Цена</th>
                        <th class="tableCaption align-middle">Стоимость</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($order->products as $product)
                    <tr>
                        <td class="align-middle">
                            <a href="{{ route('product', [$product->category, $product])}}">
                                <img height="56px" src="
                                @if($product->image == null)
                                {{ asset('/img/no-image-available.png') }}      
                                @else
                                {{ Storage::url($product->image) }}
                                @endif                             
                                ">
                                {{ $product->model }}
                            </a>
                        </td>

                    <td class="align-middle"><span class="badge"><kbd>{{ $product->pivot->count }}</kbd></span>
                            <div class="btn-group form-inline">
                           
                                <form action="{{ route('basket-remove', $product) }}" method="POST">
                                    <button type="submit" class="btn btn-danger"
                                        href=""><span 
                                        class="glyphicon glyphicon-minus" aria-hidden="true"></span></button>
                                    @csrf
                                </form>
                                
                                <form action="{{ route('basket-add', $product) }}" method="POST">
                                    <button type="submit" class="btn btn-outline-primary cardbtn" 
                                        href=""><span 
                                        class="glyphicon glyphicon-plus" aria-hidden="true"></span></button>
                                    @csrf
                                </form>

                               

                            </div>
                        </td>

                        <td class="align-middle">{{ number_format($product->price)}} руб.</td>
                        <td class="align-middle">{{ number_format($product->getPriceForCount())}} руб.</td>
                    </tr>
                    @endforeach

                    <tr>
                        <td colspan="3"  class="tableCaption"><b>Общая стоимость</b></td>
                        <td  class="tableCaption"> {{ number_format($order->getFullPrice())}} руб. с НДС</td>
                    </tr>
                </tbody>
            </table>

            <div class="btn-group pull-left mt-1 mb-4" role="group">
                <a type="button" class="btn btn-outline-primary cardbtn" href="{{ route('basket-place')}}">Оформить заказ</a>
            </div>
        </div>
    </div>



@endsection