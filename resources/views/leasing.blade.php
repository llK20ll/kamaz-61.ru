@extends('layouts.master')

@section('meta_description', 'На kamaz-61.ru купить в лизинг автомобили КАМАЗ по самой выгодной цене в Южном Федеральном Округе. Консультации по выбору +7-906-181-50-14')   

@section('title', 'Лизинг')

@section('content')
 


<!--слайдер-->
{{-- @include('inc.slider')     --}}
<!--слайдер-->


{{-- панель категорий< --}}  
{{-- @include('inc.category_panel') --}}
{{-- >панель категорий --}}
<div class="container pt-4">
    <div class="leazing__wrapper p-3">
        <h1 class="text-center">Лизинг</h1>

        <p>Наша компания реализует грузовики, коммунальную, дорожно-строительную и другую спецтехнику в лизинг. Заключая договор лизинга, вы берете технику в финансовую аренду, что позволяет использовать машину сразу после оформления документов и выплаты первого взноса. Выплачивая стоимость постепенно, вы экономите активы предприятия, а также выигрываете, получая полный зачет НДС-платежей по лизинговому договору.</p>

        <p>Мы сотрудничаем с рядом надежных лизинговых компаний. Они предлагают широкий выбор лизинговых планов, как для предприятий, так и для индивидуальных клиентов.</p>

        <h2 class="text-center">Официальные партнеры:</h2>
        <div class="leasing__wrapper">
            <div class="row leasing__row">
                <div class="col">    
                    <a href="https://kamazleasing.ru/"> 
                        <img class="leasing__img" src="{{ asset('img/leasing/kamazleasing.png') }}" alt="kamazleasing">
                    </a>
                </div>
                <div class="col">
                    <a href="https://www.sberleasing.ru/"> 
                        <img class="leasing__img" src="{{ asset('img/leasing/sber.png') }}" alt="sber">
                    </a>
                </div>
                <div class="col">
                    <a href="https://www.vtb-leasing.ru/"> 
                        <img class="leasing__img" src="{{ asset('img/leasing/vtb-leasing.png') }}" alt="vtb-leasing">
                    </a>            
                </div>
            </div>

            <div class="row leasing__row">
                <div class="col">
                    <a href="https://baltlease.ru/"> 
                        <img class="leasing__img" src="{{ asset('img/leasing/balt_lizing.png') }}" alt="balt_lizing">
                    </a>                  
                </div>
                <div class="col">
                    <a href="https://www.resoleasing.com/"> 
                        <img class="leasing__img" src="{{ asset('img/leasing/reso.png') }}" alt="reso">
                    </a>             
                </div>
                <div class="col">
                    <a href="https://europlan.ru/"> 
                        <img class="leasing__img" src="{{ asset('img/leasing/europlan.png') }}" alt="europlan">
                    </a>            
                </div>
            </div>

            <div class="row leasing__row">
                <div class="col">
                    <a href="https://sobileasing.ru/"> 
                        <img class="leasing__img" src="{{ asset('img/leasing/sobi.png') }}" alt="sobi">
                    </a>            
                </div>
                <div class="col">
                    <a href="https://alfaleasing.ru/"> 
                        <img class="leasing__img" src="{{ asset('img/leasing/alfa.png') }}" alt="alfa">
                    </a>            
                </div>
                <div class="col">
                    <a href="https://www.gazprombank.ru/corporate/leasing/"> 
                        <img class="leasing__img" src="{{ asset('img/leasing/gazprom.png') }}" alt="gazprom">
                    </a>            
                </div>
            </div>

            <div class="row leasing__row">
                <div class="col">
                    <a href="http://www.alliance-leasing.ru/"> 
                        <img class="leasing__img" src="{{ asset('img/leasing/aliance.png') }}" alt="aliance">
                    </a>            
                </div>
                <div class="col">
                    <a href="https://www.rosbank-leasing.ru/"> 
                        <img class="leasing__img" src="{{ asset('img/leasing/rosbank.png') }}" alt="rosbank">
                    </a>            
                </div>
                <div class="col">
                    <a href="https://www.raiffeisen-leasing.ru/"> 
                        <img class="leasing__img" src="{{ asset('img/leasing/raif.png') }}" alt="raif">
                    </a>            
                </div>
            </div>
        </div>
    </div>
</div>
@endsection