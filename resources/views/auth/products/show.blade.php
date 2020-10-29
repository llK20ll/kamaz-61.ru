@extends('auth.layouts.master')

@section('title', 'Позиция ' . $product->model )

@section('content')

<div class="col-md-12 bg-light">
    <h1>Позиция </h1>
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
            <td>{{ $product->id }}</td>
            </tr>
            <tr>
                <td>Модель</td>
                <td>{{ $product->model }}</td>
            </tr>
            <tr>
                <td>Категория</td>
                <td>{{ $category->title }}</td>
            </tr>
            <tr>
                <td>Цена</td>
                <td>{{ number_format($product->price) }} руб.</td>
            </tr>
            @isset($product->new_price)
            <tr>
                <td>
                    
                    <b style="color: red">СПЕЦПРЕДЛОЖЕНИЕ: </b>
                </td>
                <td>
                    <span class="badge badge-success" style="font-size: 17px">{{ number_format($product->new_price)}} </span> руб.
                   
                </td>
            </tr>
            @endisset
            <tr>
                <td>Картинка</td>
                <td><img src="
                    @if($product->image == null)
                    {{ asset('/img/no-image-available.png') }}      
                    @else
                    {{ Storage::url($product->image) }}
                    @endif
                    " height="240px"></td>
            </tr>

            <tr>
                <td>Параметры карточки:</td>
                <td>{{ $product->card_params }} </td>
            </tr>
            <tr>
                <td>Характеристики автомобиля:</td>
                <td>{{ $product->vehicle_characteristics_params }} </td>
            </tr>       
            <tr>
                <td>Весовые параметры, нагрузки:</td>
                <td>{{ $product->weight_parameters_loads_params }} </td>
            </tr>         
            <tr>
                <td>Двигатель:</td>
                <td>{{ $product->engine_params }} </td>
            </tr>      
            <tr>
                <td>Коробка передач:</td>
                <td>{{ $product->gearbox_params }} </td>
            </tr>
            <tr>
                <td>Кабина:</td>
                <td>{{ $product->cabin_params }} </td>
            </tr>
            <tr>
                <td>Характеристики шасси:</td>
                <td>{{ $product->chassis_characteristics_params }} </td>
            </tr>
            <tr>
                <td>Дополнительно:</td>
                <td>{{ $product->additionally_params }} </td>
            </tr>
            <tr>
                <td>Кабина:</td>
                <td>{{ $product->cabin_params }} </td>
            </tr>
            <tr>
                <td>Характеристики полуприцепа:</td>
                <td>{{ $product->semi_trailer_characteristics_params }} </td>
            </tr>
            <tr>
                <td>Совместимые тягачи:</td>
                <td>{{ $product->compatible_tractors_params }} </td>
            </tr>
            <tr>
                <td>Характеристики прицепа:</td>
                <td>{{ $product->trailer_characteristics_params }} </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection