@extends('layouts.master')

@section('title',' | Результаты поиска по запросу')

@section('content')

  

    <h1 class="py-2">Результаты поиска</h1>

  
    @include('inc.search')
 

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
                    <div class="serchresult__img">
                        <a href="{{route('product', [$product->category, $product])}}">
                            <img src="
                            @if($product->image == null)
                            {{ asset('/img/no-image-available.png') }}      
                            @else
                            {{ Storage::url($product->image) }}
                            @endif
                            " alt="{{$product->model ?? ''}}">
                        </a>
                    </div>
                </td>
                <td class="align-middle">
                    <a class=" text-center" href="{{ route('category', $product->category->code) }}">{{$product->category->title}}</a>

                </td>
                
                

                <td class="align-middle">
                    <a href="{{route('product', [$product->category, $product])}}">{{$product->model}}</a>
                </td>
                
                <td class="align-middle">
                    <div class="block__item">
                        @isset($product->new_price)
                        
                        <span class="badge badge-success" style="font-size: 17px">{{ number_format($product->new_price)}}</span> руб.
                        @else
                        <span>

                                    {{-- Форма обратной связи на "Узнать цену" --}}
        @if($product->price == 1)   
        <span class="price__request" data-toggle="modal" data-target="#exapleModal">Узнать цену... </span>  
        <div class="modal fade" id="exapleModal" tabindex="-1" role="dialog" aria-labelledby="exapleModal" aria-hidden="true">
          <div class="modal-dialog" role="document">
              <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title" id="exapleModalLabel">Отправить заявку</h5>
                      <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                  <div class="modal-body">
                      <form action="{{ route('contact-form') }}" class="form" id="contactform" name="form" method="POST">
                              @csrf
                              <div class="form-group">
                                  <label for="name">Имя<span class="redStar">*</span>:</label><br>
                                  <input id="name" type="text" class="form-control" name="name" placeholder="Ваше имя">
                              </div>
      
                                  {{-- --- --}}
                                  <input id="lastname" style="display: none" type="text" class="form-control" name="lastname" value="" placeholder="Фамилия">
                                  {{-- --- --}}
      
                              <div class="form-group">
                                  <label for="phone">Телефон<span class="redStar">*</span>:</label><br>
                                  <input id="phone" type="text" class="form-control" name="phone" placeholder="Номер телефона">
                              </div>
                              <div class="form-group">
                                  <label for="msg">Сообщение:</label><br>
                                  <textarea id="msg" class="form-control" name="msg" placeholder="Ваше сообщение"></textarea> 
                              </div>
                              <div class="form-group">
                                  <button type="submit" class="btn cardbtn"><span class="text-button">Отправить</span></button>
                                  <button class="btn btn-secondary" data-dismiss="modal" aria-label="Close">Закрыть</button>
                              </div>
                              <div>
                              Нажимая кнопку "отправить" вы соглашаетесь с <a class="privacy_link" href="{{route('privacy')}}">условиями</a> обработки персональных данных.
                              </div>
                          </form>
                  </div>
                  {{-- <div class="modal-footer">
      
                     
                  </div> --}}
              </div>
          </div>
        </div>
        @else
        {{-- Форма обратной связи на "Узнать цену" --}}


                            {{ number_format($product->price)}} руб.
                            @endif
                        </span>
                        @endisset
                    </div>
                </td>

                <td class="align-middle">
                    <form action="{{route('basket-add', $product)}}" method="POST">
                        <button type="submit" class="btn cardbtn mb-0" role="button" title="Купить">
                            Купить
                            <svg width="1.2em" height="1.2em" viewBox="0 0 16 16" class="bi bi-cart4" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"></path>
                            </svg>                           
                        </button> 

                        @admin                        
                          <a class="btn btn-secondary mb-0" href="{{ route('products.edit', $product) }}" >
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-wrench" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                              <path fill-rule="evenodd" d="M.102 2.223A3.004 3.004 0 0 0 3.78 5.897l6.341 6.252A3.003 3.003 0 0 0 13 16a3 3 0 1 0-.851-5.878L5.897 3.781A3.004 3.004 0 0 0 2.223.1l2.141 2.142L4 4l-1.757.364L.102 2.223zm13.37 9.019L13 11l-.471.242-.529.026-.287.445-.445.287-.026.529L11 13l.242.471.026.529.445.287.287.445.529.026L13 15l.471-.242.529-.026.287-.445.445-.287.026-.529L15 13l-.242-.471-.026-.529-.445-.287-.287-.445-.529-.026z"/>
                            </svg> 
                          </a>                         
                        @endadmin

                        @csrf     
                    </form>              
                </td>

            </tr>
        @endforeach
        </tbody>
    </table>
@endsection