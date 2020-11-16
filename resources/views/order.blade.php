@extends('layouts.master')

@section('title', 'Оформить заказ')

@section('content')
    
    <div class="container pt-4">
        <h1 class="text-center">Подтвердите заказ</h1>
        <form action="{{ route('basket-confirm') }}" method="POST">
            <p class="px-3" style="text-indent: 1.5em; text-align: justify;">Общая стоимость заказа: <b>{{ number_format($order->getFullPrice())}} руб. с НДС</b></p>  
            <p class="px-3"  style="text-indent: 1.5em; text-align: justify;">Укажите свой номер телефона и адрес электронной почты, чтобы наш менеджер мог с вами связаться:</p>
                
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
                @guest
                <div class="form-gorup">
                    <label for="email" class="control-label col-4"><b>Email: </b></label>
                    <div class="col-12">
                        <input type="text" name="email" id="email" value="" class="form-control">
                    </div>
                </div>
                @endguest
                <br>
                @csrf
                <div class="text-center">
                    <input type="submit" class="btn btn-outline-default cardbtn text-center" value="Подтвердить заказ">
                </div>
            </div>
            
        </form>]
            
       
    </div>

@endsection