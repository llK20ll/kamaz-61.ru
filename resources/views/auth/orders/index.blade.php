@extends('auth.layouts.master')

@section('title', 'Заказы')

@section('content')
    <div class="col-md-12 w-100 bg-light">
        <h1>Заказы</h1>
        <table class="table">
            <tbody>
            <tr class="tableCaption">
                <th class="align-middle">
                    #
                </th>
                <th class="align-middle">
                    Имя
                </th>
                <th class="align-middle">
                    Телефон
                </th>
                <th class="align-middle">
                    Когда отправлен
                </th>
                <th class="align-middle">
                    Сумма
                </th>
                <th class="align-middle text-center">
                    Действия
                </th>
            </tr>
            @foreach ($orders as $order)
                
            <tr>
                <td class="text-center align-middle">{{ $order->id }}</td>
                <td class="align-middle">{{ $order->name }}</td>
                <td class="align-middle">{{ $order->phone }}</td>
                <td class="align-middle">{{ $order->created_at->format('H:i d/m/Y') }}</td>
                <td class="align-middle">{{ number_format($order->getFullPrice())}} руб.</td>
               
                <td class="align-middle text-center">
                    <form action="{{ route('orderDelete', ['order' => $order->id]) }}" method="POST">
                        @csrf
                        <div class="btn-group" role="group">
                            <a class="btn btn-primary" type="button"
                            @admin
                            href="{{ route('orders.show', $order)}}"                                   
                            @else
                            href="{{ route('person.orders.show', $order)}}"    
                            @endadmin
                            >Открыть</a>   
                        </div>  
                            @admin                      
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger ml-1">Удалить</button>  
                            @endadmin                      
                    </form>
                </td>
            
            </tr>
            
            @endforeach
            </tbody>
        </table>
    </div>
@endsection