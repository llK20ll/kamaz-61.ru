<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"><!-- mazimum-scale=1.0 user-scalable=0-->
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="description" content="Ростовствкий автоцентр КАМАЗ"/>
        <meta name="keywords" content="КАМАЗ Ростов, техника КАМАЗ, КАМАЗ самосвал, КАМАЗ бортовой, спецтехника КАМАЗ, КАМАЗ цена , КАМАЗ евро, КАМАЗ с прицепом, КАМАЗ тягач, КАМАЗ кран, дилеры КАМАЗ, продажа КАМАЗ, купить КАМАЗ, сервис КАМАЗ, официальный дилер КАМАЗ, КАМАЗ, Автоцентр КАМАЗ, КАМАЗТЕХОБСЛУЖИВАНИЕ, КАМАЗ 65117, КАМАЗ Манипулятор, КАМАЗ 43118, КАМАЗ 4308, КАМАЗ 53215, КАМАЗ зерновоз КАМАЗ 6520, КАМАЗ 45143, КАМАЗ 65201, КАМАЗ 65116, КАМАЗ 5490, КАМАЗ 65115, КАМАЗ фото, kamaz-61.ru, КАМАЗ61, КАМАЗ-61, КАМАЗ видео, новинки КАМАЗа, КАМАЗ мастер, Грузовые шины, запчасти КАМАЗ, каталог запчастей, КАМАЗ бензовоз, прицеп бортовой, грузовые прицепы, прицеп самосвал, продам прицеп, прицеп для автомобиля, автобус НЕФАЗ, продажа автобусов, КДМ, снегоуборочная машина, щука, мусоровоз, пожарные автомобили, Автобетоносмеситель, АБС-7, АБС-9, АБС, Автогидроподъемник, АГП-18, АГП-22, АГП, автовышка купить, Купить КМУ, КАМАЗ с КМУ, КМУ, продажа манипуляторов, Утилизация, КАМАЗ Лизинг, Авто в лизинг, купить в лизинг, лизинг автомобилей, Программа субсидирования, государственное субсидирование, прицеп цистерна, полуприцеп цистерна, продажа прицепов, КАМАЗ на метане, полуприцеп, КАМАЗ официальный сайт, КАМАЗ центр, Магазин запчастей КАМАЗ"/>
        
        <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" >
        <!-- CSS only -->
        <link href="{{asset('/css/bootstrap.css')}}" rel="stylesheet">

        {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous"> --}}
        <link rel="stylesheet" href="{{asset('css/font-glyphicons.css')}}">
        <link rel="stylesheet" href="{{asset('css/phone.css')}}" media="screen" type="text/css" />
        <link rel="stylesheet" href="{{asset('css/whatsapp.css')}}" media="screen" type="text/css">
        
       
    
    <title>
      Kamaz-61.ru | @yield('title')
    </title>
        
    </head>
    <body>
        <div class="page">
            @include('inc/whatsup')
            @include('inc/callback')
           

            <nav class="navbar navbar-expand-lg navbar-light">

                <a href="{{route('index')}}" class="navbar-brand">
                    <div class="logo-static-vts">
                        <img src="{{ asset('img/vts.png') }}" width="88px" alt="kamaz-61.ru"> 
                    </div>       
                </a>

                <a href="{{route('index')}}" class="navbar-brand">
                    <div class="logo">
                        <img src="{{ asset('img/konik.png') }}" width="48px" alt="kamaz-61.ru"> 
                    </div>       
                </a>
                
                <a href="{{route('index')}}" class="navbar-brand">
                    <div class="logo-ac">
                        <img src="{{ asset('img/acKamaz.png') }}" width="126px" alt="kamaz-61.ru"> 
                    </div>       
                </a>

                <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="collapsibleNavId">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <li class="nav-item text-center" @routeactive('index')>
                                <a class="nav-link" href="{{route('index')}}">Автотехника</a>
                            </li>
                            {{-- <li class="nav-item" @routeactive('categor*')>
                                <a class="nav-link" href="{{route('categories')}}">Категории</a>
                            </li> --}}
                            <li class="nav-item text-center" @routeactive('leasing')>
                                <a class="nav-link" href="{{route('leasing')}}">Лизинг</a>
                            </li>
                            <li class="nav-item text-center" @routeactive('spares')>
                                <a class="nav-link" href="{{route('spares')}}">Запчасти</a>
                            </li>
                            <li class="nav-item text-center" @routeactive('service')>
                                <a class="nav-link" href="{{route('service')}}">Сервис</a>
                            </li>
                            <li class="nav-item text-center" @routeactive('contacts')>
                                <a class="nav-link" href="{{route('contacts')}}">Контакты</a>
                            </li>

                            @guest
                                <li class="nav-item text-center"><a class="nav-link" href="{{route('login')}}">Войти</a></li>
                            @endguest

                            @auth
                                @admin
                                    <li class="nav-item text-center"><a class="nav-link" href="{{route('home')}}">Админка</a></li>
                                @else
                                    <li class="nav-item text-center"><a class="nav-link" href="{{route('person.orders.index')}}">Мои заказы</a></li>
                                @endadmin
                                    <li class="nav-item text-center"><a class="nav-link" href="{{route('get-logout')}}">Выйти</a></li>
                            @endauth                            
                        </ul>
                </div>    
                <div class="header-phone mr-1">
                    <a @routeactive('basket*') href="{{route('basket')}}">
                        <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-cart4" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
                        </svg>
                    
                
                    (0)
                    </a>
                </div>

                <div class="header-phone">
                    <a class="phoneMy" href="tel:+79061812014">
                        
                        <span class="text-truncate">  <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-telephone" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                    </svg> +7-906-181-50-14</span></a>

                    <a class="callbackPhone" href="mailto:kamaz-rnd@yandex.ru">
                        
                        <span class="text-truncate">   <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-envelope" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383l-4.758 2.855L15 11.114v-5.73zm-.034 6.878L9.271 8.82 8 9.583 6.728 8.82l-5.694 3.44A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.739zM1 11.114l4.758-2.876L1 5.383v5.73z"/>
                    </svg><span class="text-truncate"> Kamaz-RND@yandex.ru</span></a>
                </div>
                
            </nav>

                @if(session()->has('success'))
                <p class="alert alert-success mt-4 text-center">{{ session()->get('success')}} </p>
                @endif
                @if(session()->has('warning'))
                <p class="alert alert-warning mt-4 text-center">{{ session()->get('warning')}} </p>
                @endif
                
                @yield('slider')

            <div class="container p-0">    
                <div class="row justify-content-around">
                
                    {{-- content --}}
                    @yield('content')

                </div>
            </div>
            
            <footer class="footer">
                <div class="d-flex justify-content-center">
                    <div class="footer-center">
                        <div class="col social wow">
                            <a href="https://vk.com/kamaz61"><i class="fa fa-vk"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>                
                            <a href="#"><i class="fa fa-instagram"></i></a>                
                            <a href="#"><i class="fa fa-youtube"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                        </div>
                
                        <hr class="my-0">
                
                        <div class="footer-copyrhit py-1 text-center"><span class="text-muted">2020 © <a href="https://vk.com/k_2_0"><i class="fa fa-vk" aria-hidden="true"></i> K20 Studio</a></span>
                        </div>                
                    </div>            
                </div>
            </footer>
        </div>

         <!-- JS, Popper.js, and jQuery -->
         <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
         <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
         <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
         <script src="https://kit.fontawesome.com/b3f91edb93.js" crossorigin="anonymous"></script>
    </body>
</html>