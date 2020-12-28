@extends('layouts.master')

@section('meta_description', 'На kamaz-61.ru можно купить ' .  $product->model . ' по самой выгодной цене в Южном Федеральном Округе. Консультации по выбору +7-906-181-50-14')    

@section('title', 'Продажа - ' . $product->category->title . ' КАМАЗ - ' . $product->model . ' - цены, фото, технические характеристики у официального дилера КАМАЗ')

@section('content')

<div class="d-flex row justify-content-between wrapper text-center product__head pr-2">
    
    <div class="col-12 col-sm-12 col-lg-3 align-self-center  py-3">
        <span>Модель: {{ $product->model }}</span>
    </div>

    <div class="col-12 col-sm-12 col-lg-3 col-xs-12 align-self-center py-3">
        Цена:
        <span
        @isset($product->new_price)
        style="text-decoration: line-through;"        
        @endisset         
        >
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

        {{ number_format($product->price)}}</span> руб.
        @endif
    </div>

    @isset($product->new_price)
        <div class="col-12 col-sm-12 col-lg-4 align-self-center py-3">
            <div>
            <b style="color: red">СПЕЦПРЕДЛОЖЕНИЕ: </b>
            <span class="badge badge-success" style="font-size: 17px">{{ number_format($product->new_price)}}</span> руб.
            </div>
        </div>
    @endisset

    <div class="col-12 col-sm-12 col-lg-2 align-self-center py-3 px-4">
        <div class="btn-group" role="group">
        <form action="{{route('basket-add', $product)}}" method="POST">
            <button type="submit" class="btn btn-outline-primary w-100 cardbtn text-center" role="button" title="Купить">
            <span class="align-middle">
            Купить 
            <svg width="1.2em" height="1.2em" viewBox="0 0 16 16" class="bi bi-cart4" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"></path>
            </svg>  
            
            </span>       
            </button> 
        @csrf     
        </form>
        </div>
    </div>    
    
</div>

{{-- таблиц характеристик --}}
<div class="card-body p-0 mt-1">
    <div class="row">

        <div class="col-sm-4 p-1">
            <!-- Модальное окно -->

            <a href="#img1">
                <img src="
                @if($product->image == null)
                {{ asset('/img/no-image-available.png') }}      
                @else
                {{ Storage::url($product->image) }}
                @endif
                " alt="{{$product->model ?? ''}}" class="p-3">
              </a>
              
              <!-- lightbox container hidden with CSS -->
              <a href="#" class="lightbox" id="img1">
                <span style="background-image: url('{{ Storage::url($product->image) }}')"></span>
              </a>

            <div class="row m-0">
                <div class="card m-3 w-100 card-info rg-text">

                    <div class="card-header truckInfoTabHead">Основные параметры</div>
                                        
                    <table  class="main-params-table">    
                        <?php 
                        $params = explode("!", $product->card_params);

                        $array = array_chunk($params, 2);
                        ?>
                        <?php foreach ($array as $items): ?>
                            <tr>
                            <?php foreach ($items as $row): ?>
                                <td><?php echo $row; ?></td>
                            <?php endforeach; ?>
                            </tr>
                        <?php endforeach; ?>
                        
                    </table>
                </div>
            </div>


            {{-- PDF  --}}
                {{-- <div class="row m-0">
                <div class="card m-3 card-info w-100">

                    <div class="card-header truckInfoTabHead"><div>Полезная информация</div></div>

                    <div class="card-body">
                        <table class="width=&quot;100%&quot;">
                            <tbody>
                                <tr>
                                    <td class="text-center">
                                        <a target="_blank" href="#">
                                            <!--<img width="50px" height="auto" class="img-view img-thumbnail" src="../../images/pdf-otts.png">-->
                                            <object height="59" type="image/svg+xml" data="{{ asset('img/pdf-document.svg') }}">
                                                <!--<img src="img/logo.png">-->
                                            </object>
                                        </a>
                                    </td>
                                    <td class="pl-2">
                                        <a target="_blank" href="#">Скачать ОТТС ТС RU К-RU.МТ02.00144.Р3 (с 2018-12-08 по 2021-12-07)</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div> --}}
        </div>

        <div class="col-sm-8">
            <div class="p-3 w-100 h-100" style="margin-left: auto; margin-right: auto;">
                <div class="tbl-content-view bg-light">
                    <table class="table">
                        <tbody>

                            {{-- Характеристики автомобиля --}}
                            @isset($product->vehicle_characteristics_params)                               
                            
                            <tr class="toogle-sh-1 disable-hide bg-nrg-41">
                                <td colspan="2" class="text-center tableCaption">
                                    
                                    <i>Характеристики автомобиля</i>
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-bar-down" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M1 3.5a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13a.5.5 0 0 1-.5-.5zM8 6a.5.5 0 0 1 .5.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 0 1 .708-.708L7.5 12.293V6.5A.5.5 0 0 1 8 6z"/>
                                    </svg>

                                </td>
                            </tr>                           

                            <?php 

                            $string = $product->vehicle_characteristics_params;
                            $separator = "\t\n";
                            
                            $array_words = [];
                            $tok = strtok($string, $separator);
                            
                            while($tok) {
                                $array_words[] = $tok;
                                $tok = strtok($separator);
                            }
                            // var_dump($array_words);
                            $array = array_chunk($array_words, 2); ?>
                                <?php foreach ($array as $items): ?>
                                    <tr>
                                    <?php foreach ($items as $row): ?>
                                        <td class="product__tabel__cell"><?php echo $row; ?></td>
                                    <?php endforeach; ?>
                                    </tr>
                                <?php endforeach; ?>
                            @endisset                          
                            {{-- Характеристики автомобиля --}}
                            

                            {{-- Весовые параметры, нагрузки --}}
                            @isset($product->weight_parameters_loads_params)                               

                            <tr class="toogle-sh-1 disable-hide bg-nrg-41">
                                <td colspan="2" class="text-center tableCaption">
                                    
                                    <i>Весовые параметры, нагрузки</i>
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-bar-down" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M1 3.5a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13a.5.5 0 0 1-.5-.5zM8 6a.5.5 0 0 1 .5.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 0 1 .708-.708L7.5 12.293V6.5A.5.5 0 0 1 8 6z"/>
                                    </svg>

                                </td>
                            </tr>                           

                            <?php
                            $string = $product->weight_parameters_loads_params;
                            $separator = "\t\n";
                            
                            $array_words = [];
                            $tok = strtok($string, $separator);
                            
                            while($tok) {
                                $array_words[] = $tok;
                                $tok = strtok($separator);
                            }
                            // var_dump($array_words);
                            $array = array_chunk($array_words, 2); ?>
                                <?php foreach ($array as $items): ?>
                                    <tr>
                                    <?php foreach ($items as $row): ?>
                                        <td class="product__tabel__cell"><?php echo $row; ?></td>
                                    <?php endforeach; ?>
                                    </tr>
                                <?php endforeach; ?>
                            @endisset                          
                            {{-- Весовые параметры, нагрузки --}}


                            {{-- Двигатель --}}
                            @isset($product->engine_params)                               

                            <tr class="toogle-sh-1 disable-hide bg-nrg-41">
                                <td colspan="2" class="text-center tableCaption">
                                    
                                    <i>Двигатель</i>
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-bar-down" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M1 3.5a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13a.5.5 0 0 1-.5-.5zM8 6a.5.5 0 0 1 .5.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 0 1 .708-.708L7.5 12.293V6.5A.5.5 0 0 1 8 6z"/>
                                    </svg>

                                </td>
                            </tr>                           
                            <?php
                            $string = $product->engine_params;
                            $separator = "\t\n";
                            
                            $array_words = [];
                            $tok = strtok($string, $separator);
                            
                            while($tok) {
                                $array_words[] = $tok;
                                $tok = strtok($separator);
                            }
                            // var_dump($array_words);
                            $array = array_chunk($array_words, 2); ?>
                                <?php foreach ($array as $items): ?>
                                    <tr>
                                    <?php foreach ($items as $row): ?>
                                        <td class="product__tabel__cell"><?php echo $row; ?></td>
                                    <?php endforeach; ?>
                                    </tr>
                                <?php endforeach; ?>
                            @endisset                          
                            {{-- Двигатель --}}

                            {{-- Коробка передач --}}
                            @isset($product->gearbox_params)                               

                            <tr class="toogle-sh-1 disable-hide bg-nrg-41">
                                <td colspan="2" class="text-center tableCaption">
                                    
                                    <i>Коробка передач</i>
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-bar-down" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M1 3.5a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13a.5.5 0 0 1-.5-.5zM8 6a.5.5 0 0 1 .5.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 0 1 .708-.708L7.5 12.293V6.5A.5.5 0 0 1 8 6z"/>
                                    </svg>

                                </td>
                            </tr>                           

                            <?php 

                            $string = $product->gearbox_params;
                            $separator = "\t\n";
                            
                            $array_words = [];
                            $tok = strtok($string, $separator);
                            
                            while($tok) {
                                $array_words[] = $tok;
                                $tok = strtok($separator);
                            }
                            // var_dump($array_words);
                            $array = array_chunk($array_words, 2); ?>
                                <?php foreach ($array as $items): ?>
                                    <tr>
                                    <?php foreach ($items as $row): ?>
                                        <td class="product__tabel__cell"><?php echo $row; ?></td>
                                    <?php endforeach; ?>
                                    </tr>
                                <?php endforeach; ?>
                            @endisset                          
                            {{-- Коробка передач --}}

                            {{-- Кабина --}}
                            @isset($product->cabin_params)                               

                            <tr class="toogle-sh-1 disable-hide bg-nrg-41">
                                <td colspan="2" class="text-center tableCaption">
                                    
                                    <i>Кабина</i>
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-bar-down" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M1 3.5a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13a.5.5 0 0 1-.5-.5zM8 6a.5.5 0 0 1 .5.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 0 1 .708-.708L7.5 12.293V6.5A.5.5 0 0 1 8 6z"/>
                                    </svg>

                                </td>
                            </tr>                           

                            <?php 

                            $string = $product->cabin_params;
                            $separator = "\t\n";
                            
                            $array_words = [];
                            $tok = strtok($string, $separator);
                            
                            while($tok) {
                                $array_words[] = $tok;
                                $tok = strtok($separator);
                            }
                            // var_dump($array_words);
                            $array = array_chunk($array_words, 2); ?>
                                <?php foreach ($array as $items): ?>
                                    <tr>
                                    <?php foreach ($items as $row): ?>
                                        <td class="product__tabel__cell"><?php echo $row; ?></td>
                                    <?php endforeach; ?>
                                    </tr>
                                <?php endforeach; ?>
                            @endisset                          
                            {{-- Кабина --}}

                            {{-- Характеристики шасси --}}
                            @isset($product->chassis_characteristics_params)                               

                            <tr class="toogle-sh-1 disable-hide bg-nrg-41">
                                <td colspan="2" class="text-center tableCaption">
                                    
                                    <i>Характеристики шасси</i>
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-bar-down" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M1 3.5a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13a.5.5 0 0 1-.5-.5zM8 6a.5.5 0 0 1 .5.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 0 1 .708-.708L7.5 12.293V6.5A.5.5 0 0 1 8 6z"/>
                                    </svg>

                                </td>
                            </tr>                           

                            <?php 

                            $string = $product->chassis_characteristics_params;
                            $separator = "\t\n";
                            
                            $array_words = [];
                            $tok = strtok($string, $separator);
                            
                            while($tok) {
                                $array_words[] = $tok;
                                $tok = strtok($separator);
                            }
                            // var_dump($array_words);
                            $array = array_chunk($array_words, 2); ?>
                                <?php foreach ($array as $items): ?>
                                    <tr>
                                    <?php foreach ($items as $row): ?>
                                        <td class="product__tabel__cell"><?php echo $row; ?></td>
                                    <?php endforeach; ?>
                                    </tr>
                                <?php endforeach; ?>
                            @endisset                          
                            {{-- Характеристики шасси --}}

                            {{-- Дополнительно --}}
                            @isset($product->additionally_params)                               

                            <tr class="toogle-sh-1 disable-hide bg-nrg-41">
                                <td colspan="2" class="text-center tableCaption">
                                    
                                    <i>Дополнительно</i>
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-bar-down" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M1 3.5a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13a.5.5 0 0 1-.5-.5zM8 6a.5.5 0 0 1 .5.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 0 1 .708-.708L7.5 12.293V6.5A.5.5 0 0 1 8 6z"/>
                                    </svg>

                                </td>
                            </tr>                           

                            <?php 
                            $string = $product->additionally_params;
                            $separator = "\t\n";
                            
                            $array_words = [];
                            $tok = strtok($string, $separator);
                            
                            while($tok) {
                                $array_words[] = $tok;
                                $tok = strtok($separator);
                            }
                            // var_dump($array_words);
                            $array = array_chunk($array_words, 2); ?>
                                <?php foreach ($array as $items): ?>
                                    <tr>
                                    <?php foreach ($items as $row): ?>
                                        <td class="product__tabel__cell"><?php echo $row; ?></td>
                                    <?php endforeach; ?>
                                    </tr>
                                <?php endforeach; ?>
                            @endisset                          
                            {{-- Дополнительно --}}

                            {{-- Характеристики полуприцепа --}}
                            @isset($product->semi_trailer_characteristics_params)                               

                            <tr class="toogle-sh-1 disable-hide bg-nrg-41">
                                <td colspan="2" class="text-center tableCaption">
                                    
                                    <i>Характеристики полуприцепа</i>
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-bar-down" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M1 3.5a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13a.5.5 0 0 1-.5-.5zM8 6a.5.5 0 0 1 .5.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 0 1 .708-.708L7.5 12.293V6.5A.5.5 0 0 1 8 6z"/>
                                    </svg>

                                </td>
                            </tr>                           

                            <?php 

                            $string = $product->semi_trailer_characteristics_params;
                            $separator = "\t\n";
                            
                            $array_words = [];
                            $tok = strtok($string, $separator);
                            
                            while($tok) {
                                $array_words[] = $tok;
                                $tok = strtok($separator);
                            }
                            // var_dump($array_words);
                            $array = array_chunk($array_words, 2); ?>
                                <?php foreach ($array as $items): ?>
                                    <tr>
                                    <?php foreach ($items as $row): ?>
                                        <td class="product__tabel__cell"><?php echo $row; ?></td>
                                    <?php endforeach; ?>
                                    </tr>
                                <?php endforeach; ?>
                            @endisset                          
                            {{-- Характеристики полуприцепа --}}                            



                            {{-- Характеристики прицепа --}}
                            @isset($product->trailer_characteristics_params)                               

                            <tr class="toogle-sh-1 disable-hide bg-nrg-41">
                                <td colspan="2" class="text-center tableCaption">
                                    
                                    <i>Характеристики прицепа</i>
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-bar-down" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M1 3.5a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13a.5.5 0 0 1-.5-.5zM8 6a.5.5 0 0 1 .5.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 0 1 .708-.708L7.5 12.293V6.5A.5.5 0 0 1 8 6z"/>
                                    </svg>

                                </td>
                            </tr>                           

                            <?php 
                        

                            $string = $product->trailer_characteristics_params;
                            $separator = "\t\n";
                            
                            $array_words = [];
                            $tok = strtok($string, $separator);
                            
                            while($tok) {
                                $array_words[] = $tok;
                                $tok = strtok($separator);
                            }
                            // var_dump($array_words);
                            $array = array_chunk($array_words, 2); ?>
                                <?php foreach ($array as $items): ?>
                                    <tr>
                                    <?php foreach ($items as $row): ?>
                                        <td class="product__tabel__cell"><?php echo $row; ?></td>
                                    <?php endforeach; ?>
                                    </tr>
                                <?php endforeach; ?>
                            @endisset                          
                            {{-- Характеристики прицепа --}}

            

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- таблиц характеристик --}}

@endsection  
