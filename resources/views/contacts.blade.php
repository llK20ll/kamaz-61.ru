@extends('layouts.master')

@section('title', 'Контакты')

@section('content')
 


<!--слайдер-->
{{-- @include('inc.slider')     --}}
<!--слайдер-->


{{-- панель категорий< --}}  
{{-- @include('inc.category_panel') --}}
{{-- >панель категорий --}}
<div class="container">
    <div class="contacts__container">
        <h1 class="contacts__caption">Контакты</h1>

        {{-- график --}}
   

        <div class="col-12">
        
            {{-- <div class="schedule__row"> --}}
                <div class="schedule__column">
                    <div class="schedule__cap">
                    <img src="{{ asset('img/autocenter-kamaz.png') }}" alt="">
                    {{-- Ростовский автоцентр
                    "КАМАЗ" --}}
                    </div>
                </div>
            {{-- </div> --}}

            {{-- <div class="schedule__row"> --}}
                <div class="schedule__column">
                    <div class="schedule__item">
                        Адрес: Россия, г. Ростов-на-Дону, ул. Доватора, 156/2 / стоянка 154 Б<br>
                    </div>
                    <div class="schedule__item">
                        Телефон для связи: <a class="contacts__a" href="tel:+79061815014">+7 (906) 181-50-14</a><br>
                    </div>
                    <div class="schedule__item">
                        Email: <a class="contacts__a" href="mailto:kamaz-rnd@yandex.ru">kamaz-RND@yandex.ru</a>
                    </div>
                </div>
            {{-- </div> --}}

            {{-- <div class="schedule__row"> --}}
                <div class="schedule__columnweek">
                    <div class="schedule__row">
                        <div class="schedule__column">
                            <div class="schedule__cap">
                                График работы
                            </div>
                        </div>
                    </div>

                    <div class="schedule__rowweekcap">
                        <div class="schedule__column">
                            <div class="schedule__weekitem">
                                Пн
                            </div>
                        </div>
                        <div class="schedule__column">
                            <div class="schedule__weekitem">
                                Вт
                            </div>
                        </div>
                        <div class="schedule__column">
                            <div class="schedule__weekitem">
                                Ср
                            </div>
                        </div>
                        <div class="schedule__column">
                            <div class="schedule__weekitem">
                                Чт
                            </div>
                        </div>
                        <div class="schedule__column">
                            <div class="schedule__weekitem">
                                Пт
                            </div>
                        </div>
                        <div class="schedule__column">
                            <div class="schedule__weekitem">
                                Сб
                            </div>
                        </div>
                        <div class="schedule__column">
                            <div class="schedule__weekitem">
                                Вс
                            </div>
                        </div>
                    </div>

                    <div class="schedule__rowweekhours">

                        <div class="schedule__column">

                            <div class="schedule__weekitem">
                                08:00
                            </div>
                            <div class="schedule__weekitem">
                                12:00
                            </div>
                            <div class="schedule__weekitem">
                                -
                            </div>
                            <div class="schedule__weekitem">
                                13:00
                            </div>
                            <div class="schedule__weekitem">
                                17:00
                            </div>
                            
                        </div>

                        <div class="schedule__column">

                            <div class="schedule__weekitem">
                                08:00
                            </div>
                            <div class="schedule__weekitem">
                                12:00
                            </div>
                            <div class="schedule__weekitem">
                                -
                            </div>
                            <div class="schedule__weekitem">
                                13:00
                            </div>
                            <div class="schedule__weekitem">
                                17:00
                            </div>
                        </div>

                        <div class="schedule__column">

                            <div class="schedule__weekitem">
                                08:00
                            </div>
                            <div class="schedule__weekitem">
                                12:00
                            </div>
                            <div class="schedule__weekitem">
                                -
                            </div>
                            <div class="schedule__weekitem">
                                13:00
                            </div>
                            <div class="schedule__weekitem">
                                17:00
                            </div>
                        </div>

                        <div class="schedule__column">

                            <div class="schedule__weekitem">
                                08:00
                            </div>
                            <div class="schedule__weekitem">
                                12:00
                            </div>
                            <div class="schedule__weekitem">
                                -
                            </div>
                            <div class="schedule__weekitem">
                                13:00
                            </div>
                            <div class="schedule__weekitem">
                                17:00
                            </div>
                        </div>

                        <div class="schedule__column">

                            <div class="schedule__weekitem">
                                08:00
                            </div>
                            <div class="schedule__weekitem">
                                12:00
                            </div>
                            <div class="schedule__weekitem">
                                -
                            </div>
                            <div class="schedule__weekitem">
                                13:00
                            </div>
                            <div class="schedule__weekitem">
                                17:00
                            </div>
                        </div>

                        <div class="schedule__column">

                            <div class="schedule__weekitem">
                                -
                            </div>
                            
                        </div>
                        
                        <div class="schedule__column">

                            <div class="schedule__weekitem">
                                -
                            </div>
                        
                        </div>
                    </div>
                </div>
            {{-- </div> --}}
        </div>
                
        <div class="col-12">
            {{-- <div class="schedule__row">                 --}}
                    <div class="schedule__map">
                        <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Af0c1f682fefd61be4df02190e4935a75ab593b5c2cf83b6c3576aa28a9e1a097&amp;width=100%25&amp;height=500&amp;lang=ru_RU&amp;scroll=true"></script>
                    </div>                
            {{-- </div> --}}
        </div>
    </div>
</div>
       
        {{-- график --}}

@endsection