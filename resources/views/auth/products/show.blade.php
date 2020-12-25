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
                <td class="product__tabel__caption__admin">Параметры карточки:</td>
                <td class="product__tabel__cell__admin"><span class="product__tabel__cell__text">{{ $product->card_params }}</span></td>
            </tr>
            <tr>
                <td class="product__tabel__caption__admin">Характеристики автомобиля:</td>
                <td class="product__tabel__cell__admin"><span class="product__tabel__cell__text">{{ $product->vehicle_characteristics_params }}</span> </td>
            </tr>       
            <tr>
                <td class="product__tabel__caption__admin">Весовые параметры, нагрузки:</td>
                <td class="product__tabel__cell__admin"><span class="product__tabel__cell__text">{{ $product->weight_parameters_loads_params }} </span></td>
            </tr>         
            <tr>
                <td class="product__tabel__caption__admin">Двигатель:</td>
                <td class="product__tabel__cell__admin"><span class="product__tabel__cell__text">{{ $product->engine_params }}</span> </td>
            </tr>      
            <tr>
                <td class="product__tabel__caption__admin">Коробка передач:</td>
                <td class="product__tabel__cell__admin"><span class="product__tabel__cell__text">{{ $product->gearbox_params }} </span></td>
            </tr>
            <tr>
                <td class="product__tabel__caption__admin">Кабина:</td>
                <td class="product__tabel__cell__admin"><span class="product__tabel__cell__text">{{ $product->cabin_params }}</span> </td>
            </tr>
            <tr>
                <td class="product__tabel__caption__admin">Характеристики шасси:</td>
                <td class="product__tabel__cell__admin"><span class="product__tabel__cell__text">{{ $product->chassis_characteristics_params }}</span> </td>
            </tr>
            <tr>
                <td class="product__tabel__caption__admin">Дополнительно:</td>
                <td class="product__tabel__cell__admin"><span class="product__tabel__cell__text">{{ $product->additionally_params }}</span> </td>
            </tr>
            <tr>
                <td class="product__tabel__caption__admin">Кабина:</td>
                <td class="product__tabel__cell__admin"><span class="product__tabel__cell__text">{{ $product->cabin_params }}</span> </td>
            </tr>
            <tr>
                <td class="product__tabel__caption__admin">Характеристики полуприцепа:</td>
                <td class="product__tabel__cell__admin"><span class="product__tabel__cell__text">{{ $product->semi_trailer_characteristics_params }}</span> </td>
            </tr>
            <tr>
                <td class="product__tabel__caption__admin">Совместимые тягачи:</td>
                <td class="product__tabel__cell__admin"><span class="product__tabel__cell__text">{{ $product->compatible_tractors_params }} </span></td>
            </tr>
            <tr>
                <td class="product__tabel__caption__admin">Характеристики прицепа:</td>
                <td class="product__tabel__cell__admin"><span class="product__tabel__cell__text">{{ $product->trailer_characteristics_params }} </span></td>
            </tr>
        </tbody>
    </table>
</div>
@endsection