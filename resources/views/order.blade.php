@extends('layouts.master')

@section('title', 'Оформить заказ')

@section('content')
    
    <div class="col-12 pt-3"></div>
        <h1>Подтвердите заказ</h1>
            
        <div class="container">         
            <div class="row justify-content-center">
                    
            <form action="{{ route('basket-confirm') }}" method="POST">
                <p class="p-1">Общая стоимость заказа: <b>{{ number_format($order->getFullPrice())}} руб. с НДС</b></p>  
                <p class="p-1">Укажите свой номер телефона, чтобы наш менеджер мог с вами связаться:</p>
                    
                    <div class="container col-12">
                        <div class="form-gorup">
                            <label for="name" class="control-label col-4"><b>Имя: </b></label>
                            <div class="col-12">
                                <input type="text" name="name" id="name" value="" class="form-control">
                            </div>
                        </div>
                        <br>
                        <div class="form-gorup">
                            <label for="phone" class="control-label col-4"><b>Номер телефона: </b></label>
                            <div class="col-12">
                                <input type="text" name="phone" id="phone" value="" class="form-control">
                            </div>
                        </div>
                        <br>
                        @csrf
                        <div class="text-center">
                            <input type="submit" class="btn btn-outline-default cardbtn text-center" value="Подтвердить заказ">
                        </div>
                    </div>
                
            </form>
            </div>
        </div>
    </div>

@endsection