@extends('layouts.master')

@section('title', $cat->title . ' | КАМАЗ - ' . $item->model . ' - продажа, цены, фото, технические характеристики у официального дилера КАМАЗ')

@section('content')

        <div class="wrapper p-4">
            <div class="row">
                <div class="block__item">
                    <div>Модель: {{ $item->model }}</div>
                </div>

                <div class= "block__item">
                   
                        Цена:
                    <span
                    @isset($item->new_price)
                    style="text-decoration: line-through;"
                    @else
                    @endisset 
                      
                      >{{ number_format($item->price)}}</span> руб.
                    </div>

                    <div class="block__item">
                      @isset($item->new_price)
                      <b style="color: red">СПЕЦПРЕДЛОЖЕНИЕ: </b>
                      <span class="badge badge-success" style="font-size: 17px">{{ number_format($item->new_price)}}</span> руб.
                      
                      @endisset
                    </div>
                
                
                <div class="block__item">
                    <form action="{{route('basket-add', $item)}}" method="POST">
                        <button type="submit" class="btn btn-primary mb-0 block__btn" role="button" title="Поместить в корзину">
                            В корзину 
                            <svg width="1.2em" height="1.2em" viewBox="0 0 16 16" class="bi bi-cart4" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"></path>
                            </svg>
                        </button> 
                            @csrf     
                    </form>
                </div>
            </div>
        </div>


    
 
                {{-- <div class="col-md-auto">Модель: {{ $item->model }}</div>
                <div class="col-md-auto">Цена: {{ number_format($item->price) }} руб. с НДС</div>
                <div class="col-md-auto">
                    <form action="{{route('basket-add', $item)}}" method="POST">
                        <button type="submit" class="btn btn-outline-primary cardbtn" role="button" title="Поместить в корзину">
                            В корзину 
                            <svg width="1.2em" height="1.2em" viewBox="0 0 16 16" class="bi bi-cart4" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"></path>
                            </svg>
                        </button> 
                        @csrf     
                    </form>
                </div> 
   --}}

{{-- таблиц характеристик --}}
    <div class="card-body p-0 mt-1">
        <div class="row">

            <div class="col-sm-4 p-1">

                    {{-- <img src="
                    {{ Storage::url($item->image) }}
                    " alt="{{ $item->model }}" class="p-3" style="width: 477px; position: relative; left: 0px; top: 0px; z-index: 1; opacity: 1; ">
                
 --}}


                    <!-- Кнопка, открывающее модальное окно -->
                    <div data-toggle="modal" data-target="#myModal">
                        <img src="
                        {{ Storage::url($item->image) }}
                        " alt="{{ $item->model }}" class="p-3" style="width: 477px; position: relative; left: 0px; top: 0px; z-index: 1; opacity: 1; ">    
                    </div>
                    
                    <!-- Модальное окно -->
                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="myModalLabel">Модель: {{ $item->model }}</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Закрыть">
                                <span aria-hidden="true">×</span>
                            </button>
                            
                            </div>
                            <div class="modal-body">
                                <img class="product__img" src="
                                {{ Storage::url($item->image) }}
                                " alt="{{ $item->model }}">
                            </div>
                            {{-- <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
                            <button type="button" class="btn btn-primary">Сохранить изменения</button>
                            </div> --}}
                        </div>
                        </div>
                    </div>  






                <div class="row m-0">
                    <div class="card m-3 w-100 card-info rg-text">

                        <div class="card-header truckInfoTabHead">Основные параметры</div>
                                           

                        <table  class="main-params-table">    
                            <?php 
                            $params = explode("!", $item->card_params);

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
                                @isset($item->vehicle_characteristics_params)                               
                                
                                <tr class="toogle-sh-1 disable-hide bg-nrg-41">
                                    <td colspan="2" class="text-center tableCaption">
                                        
                                        <i>Характеристики автомобиля</i>
                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-bar-down" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M1 3.5a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13a.5.5 0 0 1-.5-.5zM8 6a.5.5 0 0 1 .5.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 0 1 .708-.708L7.5 12.293V6.5A.5.5 0 0 1 8 6z"/>
                                        </svg>

                                    </td>
                                </tr>                           

                                <?php 

                                $string = $item->vehicle_characteristics_params;
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
                                            <td><?php echo $row; ?></td>
                                        <?php endforeach; ?>
                                        </tr>
                                    <?php endforeach; ?>
                                @endisset                          
                                {{-- Характеристики автомобиля --}}
                                

                                {{-- Весовые параметры, нагрузки --}}
                                @isset($item->weight_parameters_loads_params)                               

                                <tr class="toogle-sh-1 disable-hide bg-nrg-41">
                                    <td colspan="2" class="text-center tableCaption">
                                        
                                        <i>Весовые параметры, нагрузки</i>
                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-bar-down" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M1 3.5a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13a.5.5 0 0 1-.5-.5zM8 6a.5.5 0 0 1 .5.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 0 1 .708-.708L7.5 12.293V6.5A.5.5 0 0 1 8 6z"/>
                                        </svg>

                                    </td>
                                </tr>                           

                                <?php
                                $string = $item->weight_parameters_loads_params;
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
                                            <td><?php echo $row; ?></td>
                                        <?php endforeach; ?>
                                        </tr>
                                    <?php endforeach; ?>
                                @endisset                          
                                {{-- Весовые параметры, нагрузки --}}


                                {{-- Двигатель --}}
                                @isset($item->engine_params)                               

                                <tr class="toogle-sh-1 disable-hide bg-nrg-41">
                                    <td colspan="2" class="text-center tableCaption">
                                        
                                        <i>Двигатель</i>
                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-bar-down" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M1 3.5a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13a.5.5 0 0 1-.5-.5zM8 6a.5.5 0 0 1 .5.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 0 1 .708-.708L7.5 12.293V6.5A.5.5 0 0 1 8 6z"/>
                                        </svg>

                                    </td>
                                </tr>                           
                                <?php
                                $string = $item->engine_params;
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
                                            <td><?php echo $row; ?></td>
                                        <?php endforeach; ?>
                                        </tr>
                                    <?php endforeach; ?>
                                @endisset                          
                                {{-- Двигатель --}}

                                {{-- Коробка передач --}}
                                @isset($item->gearbox_params)                               

                                <tr class="toogle-sh-1 disable-hide bg-nrg-41">
                                    <td colspan="2" class="text-center tableCaption">
                                        
                                        <i>Коробка передач</i>
                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-bar-down" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M1 3.5a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13a.5.5 0 0 1-.5-.5zM8 6a.5.5 0 0 1 .5.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 0 1 .708-.708L7.5 12.293V6.5A.5.5 0 0 1 8 6z"/>
                                        </svg>

                                    </td>
                                </tr>                           

                                <?php 
    
                                $string = $item->gearbox_params;
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
                                            <td><?php echo $row; ?></td>
                                        <?php endforeach; ?>
                                        </tr>
                                    <?php endforeach; ?>
                                @endisset                          
                                {{-- Коробка передач --}}

                                {{-- Кабина --}}
                                @isset($item->cabin_params)                               

                                <tr class="toogle-sh-1 disable-hide bg-nrg-41">
                                    <td colspan="2" class="text-center tableCaption">
                                        
                                        <i>Кабина</i>
                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-bar-down" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M1 3.5a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13a.5.5 0 0 1-.5-.5zM8 6a.5.5 0 0 1 .5.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 0 1 .708-.708L7.5 12.293V6.5A.5.5 0 0 1 8 6z"/>
                                        </svg>

                                    </td>
                                </tr>                           

                                <?php 

                                $string = $item->cabin_params;
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
                                            <td><?php echo $row; ?></td>
                                        <?php endforeach; ?>
                                        </tr>
                                    <?php endforeach; ?>
                                @endisset                          
                                {{-- Кабина --}}

                                {{-- Характеристики шасси --}}
                                @isset($item->chassis_characteristics_params)                               

                                <tr class="toogle-sh-1 disable-hide bg-nrg-41">
                                    <td colspan="2" class="text-center tableCaption">
                                        
                                        <i>Характеристики шасси</i>
                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-bar-down" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M1 3.5a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13a.5.5 0 0 1-.5-.5zM8 6a.5.5 0 0 1 .5.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 0 1 .708-.708L7.5 12.293V6.5A.5.5 0 0 1 8 6z"/>
                                        </svg>

                                    </td>
                                </tr>                           

                                <?php 

                                $string = $item->chassis_characteristics_params;
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
                                            <td><?php echo $row; ?></td>
                                        <?php endforeach; ?>
                                        </tr>
                                    <?php endforeach; ?>
                                @endisset                          
                                {{-- Характеристики шасси --}}

                                {{-- Дополнительно --}}
                                @isset($item->additionally_params)                               

                                <tr class="toogle-sh-1 disable-hide bg-nrg-41">
                                    <td colspan="2" class="text-center tableCaption">
                                        
                                        <i>Дополнительно</i>
                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-bar-down" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M1 3.5a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13a.5.5 0 0 1-.5-.5zM8 6a.5.5 0 0 1 .5.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 0 1 .708-.708L7.5 12.293V6.5A.5.5 0 0 1 8 6z"/>
                                        </svg>

                                    </td>
                                </tr>                           

                                <?php 
                                $string = $item->additionally_params;
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
                                            <td><?php echo $row; ?></td>
                                        <?php endforeach; ?>
                                        </tr>
                                    <?php endforeach; ?>
                                @endisset                          
                                {{-- Дополнительно --}}

                                {{-- Характеристики полуприцепа --}}
                                @isset($item->semi_trailer_characteristics_params)                               

                                <tr class="toogle-sh-1 disable-hide bg-nrg-41">
                                    <td colspan="2" class="text-center tableCaption">
                                        
                                        <i>Характеристики полуприцепа</i>
                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-bar-down" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M1 3.5a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13a.5.5 0 0 1-.5-.5zM8 6a.5.5 0 0 1 .5.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 0 1 .708-.708L7.5 12.293V6.5A.5.5 0 0 1 8 6z"/>
                                        </svg>

                                    </td>
                                </tr>                           

                                <?php 

                                $string = $item->semi_trailer_characteristics_params;
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
                                            <td><?php echo $row; ?></td>
                                        <?php endforeach; ?>
                                        </tr>
                                    <?php endforeach; ?>
                                @endisset                          
                                {{-- Характеристики полуприцепа --}}                            



                                {{-- Характеристики прицепа --}}
                                @isset($item->trailer_characteristics_params)                               

                                <tr class="toogle-sh-1 disable-hide bg-nrg-41">
                                    <td colspan="2" class="text-center tableCaption">
                                        
                                        <i>Характеристики прицепа</i>
                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-bar-down" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M1 3.5a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13a.5.5 0 0 1-.5-.5zM8 6a.5.5 0 0 1 .5.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 0 1 .708-.708L7.5 12.293V6.5A.5.5 0 0 1 8 6z"/>
                                        </svg>

                                    </td>
                                </tr>                           

                                <?php 
                            

                                $string = $item->trailer_characteristics_params;
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
                                            <td><?php echo $row; ?></td>
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
