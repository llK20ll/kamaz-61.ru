@extends('layouts.master')

@section('title', 'Запчасти')

@section('content')
 


<!--слайдер-->
{{-- @include('inc.slider')     --}}
<!--слайдер-->


{{-- панель категорий< --}}  
{{-- @include('inc.category_panel') --}}
{{-- >панель категорий --}}



    <h1 class="text-center">Запчасти</h1>

    <p>Наша компания предлагает самый широкий ассортимент запчастей КАМАЗ в регионе: более 10000 наименований грузовых запчастей КАМАЗ. Поставка запчастей КАМАЗ производится с заводов КамАЗа практически без посредников, поэтому мы гарантируем Вам высокое качество товара и невысокие приемлимые цены на запчасти КАМАЗ.</p>

<!--Accordion wrapper-->
<div class="accordion md-accordion accordion-3 z-depth-1-half w-s" id="accordionEx194" role="tablist"
  aria-multiselectable="true">

  <hr class="mb-0">

    <!-- Accordion card -->
    <div class="ml-5">

        <!-- Card header -->
        <div class="card-header" role="tab" id="heading4">
        <a data-toggle="collapse" data-parent="#accordionEx194" href="#collapse4" aria-expanded="true"
            aria-controls="collapse4">
            <h3 class="mb-0">
            Силовой агрегат <i class="fa fa-angle-down rotate-icon fa-1x"></i>
            </h3>
        </a>
        </div>

        <!-- Card body -->
        <div id="collapse4" class="collapse" role="tabpanel" aria-labelledby="heading4"
        data-parent="#accordionEx194">
            <div class="card-body pt-4">
                <a class="dropdown-item" href="parts/Engine_parts1"> • Детали двигателя</a>
                <a class="dropdown-item" href="parts/Engine_power_system"> • Система питания двигателя</a>
                <a class="dropdown-item" href="parts/Engine_cooling_system"> • Система охлажления двигателя</a>                
                <a class="dropdown-item" href="parts/Gearbox_aiming"> • Сцеление коробки передач</a>
                <a class="dropdown-item" href="parts/Transmission1"> • Коробка передач</a>
                <a class="dropdown-item" href="parts/Splitter_gearbox1"> • Коробка передач с делителем</a>
                <a class="dropdown-item" href="parts/Steering1"> • Рулевое управление</a>
                <a class="dropdown-item" href="parts/Brake_system1"> • Тормозная система</a>
                <a class="dropdown-item" href="parts/Electrical_equipment1"> • Электрооборудование</a>
                <a class="dropdown-item" href="parts/Appliances"> • Приборы</a>
            </div>
        </div>
    </div>
    <!-- Accordion card -->

    <!-- Accordion card -->
    <div class="ml-5">

        <!-- Card header -->
        <div class="card-header" role="tab" id="heading5">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx194" href="#collapse5"
            aria-expanded="false" aria-controls="collapse5">
            <h3 class="mb-0">
                Детали автомобиля <i class="fa fa-angle-down rotate-icon fa-1x"></i>
            </h3>
        </a>
        </div>

        <!-- Card body -->
        <div id="collapse5" class="collapse" role="tabpanel" aria-labelledby="heading5"
        data-parent="#accordionEx194">
            <div class="card-body pt-4">
                <a class="dropdown-item" href="parts/Engine_parts2"> • Детали двигателя</a>
                <a class="dropdown-item" href="parts/Supply_system"> • Система питания</a>
                <a class="dropdown-item" href="parts/Gas_release_system"> • Система выпуска газа</a>
                <a class="dropdown-item" href="parts/Cooling_system"> • Система охлажления</a>
                <a class="dropdown-item" href="parts/Healing"> • Сцеление</a>
                <a class="dropdown-item" href="parts/Transmission2"> • Коробка передач</a>
                <a class="dropdown-item" href="parts/Transfer_case"> • Раздаточная коробка</a>
                <a class="dropdown-item" href="parts/Cardan_shaft"> • Карданный вал</a>
                <a class="dropdown-item" href="parts/Front_axle2"> • Передний мост</a>
                <a class="dropdown-item" href="parts/Rear_axle"> • Задний мост</a>
                <a class="dropdown-item" href="parts/Middle_bridge"> • Средний мост</a>
                <a class="dropdown-item" href="parts/Fifth_wheel_coupling"> • Устпройство седельно-сцепное</a>
                <a class="dropdown-item" href="parts/Frame"> • Рама</a>
                <a class="dropdown-item" href="parts/Balance_suspension"> • Балансирная подвеска</a>
                <a class="dropdown-item" href="parts/Front_axle22"> • Передний мост</a>
                <a class="dropdown-item" href="parts/Wheel"> • Колесо</a>
                <a class="dropdown-item" href="parts/Steering2"> • Рулевое управление</a>
                <a class="dropdown-item" href="parts/Brake_system2"> • Тормозная система</a>
                <a class="dropdown-item" href="parts/Electrical_equipment2"> • Электрооборудование</a>
                <a class="dropdown-item" href="parts/Devices"> • Приборы</a>
                <a class="dropdown-item" href="parts/Inventions"> • Инсипументы</a>
                <a class="dropdown-item" href="parts/Power_take_off"> • Коробка отбора мощности</a>
                <a class="dropdown-item" href="parts/Winch"> • Лебедка</a>
                <a class="dropdown-item" href="parts/Cab"> • Кабина</a>
                <a class="dropdown-item" href="parts/Cab_base"> • Основание кабины</a>
                <a class="dropdown-item" href="parts/Front_of_the_cab"> • Передок кабины</a>
                <a class="dropdown-item" href="parts/Cab_sidewall"> • Боковина кабины</a>
                <a class="dropdown-item" href="parts/Rear_cab"> • Задок кабины</a>
                <a class="dropdown-item" href="parts/Cab_roof"> • Крыша кабины</a>
                <a class="dropdown-item" href="parts/Cab_doors"> • Двери кабины</a>
                <a class="dropdown-item" href="parts/Seats"> • Сидения</a>
                <a class="dropdown-item" href="parts/Ventilation_heating"> • Вентиляция, отопление</a>
                <a class="dropdown-item" href="parts/Cabin_accessories"> • Принадлежности кабины</a>
                <a class="dropdown-item" href="parts/Plumage_of_the_cabin"> • Оперение кабины</a>
                <a class="dropdown-item" href="parts/Platform"> • Платформа</a>
            </div>
        </div>
    </div>
    <!-- Accordion card -->

    <!-- Accordion card -->
    <div class="ml-5">

        <!-- Card header -->
        <div class="card-header" role="tab" id="heading6">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx194" href="#collapse6"
            aria-expanded="false" aria-controls="collapse6">
            <h3 class="mb-0">
                <a href="parts/Normals">Нормали</a>

            </h3>
        </a>
        </div>

        <!-- Card body -->

    </div>
    <!-- Accordion card -->
    </div>
    <!--/.Accordion wrapper-->



    <p class="mt-3">Будьте внимательны при приобретении запасных частей. Все оригинальные&nbsp; запасные части&nbsp; содержат код ДЗЧ. Большинство альтернативных и контрафактных производителей заменяют этот номер на другой, для избегания юридической ответственности за производство поддельной продукции. Обратите внимание в нашем каталоге запасных частей на код ДЗЧ необходимой Вам запасной части и не приобретайте запасную часть с иным кодом.</p>
    
    <div class="container">
        <div class="row h-100 py-3 align-items-center justify-content-center">
          
            <div class="col-12">
                <img class="mt-3" src="{{ asset('img/spares/kontrafakt.jpg') }}" alt="kontrafakt">
            
                <img class="mt-3" src="{{ asset('img/spares/kontrafakt1.jpg') }}" alt="kontrafakt">
            </div>
        </div>
    </div>

@endsection