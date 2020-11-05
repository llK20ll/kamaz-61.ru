@extends('layouts.master')

@section('title', 'Главная страница')

@section('content')
 


<!--слайдер-->
@include('inc.slider')    
<!--слайдер-->


{{-- панель категорий< --}}  
{{-- @include('inc.category_panel') --}}
{{-- >панель категорий --}}



<!-- контент -->
<div class="container pt-4">

    <div class="row justify-content-around">
        
        @foreach ($categories as $category)
        @if($category->parent != null)
        @include('layouts.category_card', compact('category'))
        @endif
        @endforeach



        <div class="col col-11 mb-5">
        <br>
        <hr>
            <span style="margin-left: 40px;">Наша компания предлагает широкий ассортимент грузовой, строительной и специальной автотехники на шасси КАМАЗ. Мы предлагаем клиентам кредитные и <a href="#" class="non-underline-link">лизинговые программы</a>, а также
            <a href="#" class="non-underline-link">гарантийное и послегарантийное обслуживание</a>. Кроме того, у нас Вы всегда можете воспользоваться специальными предложениями и приобрести автомобиль с существенной скидкой.
            </span>
            Грузовые автомобили КАМАЗ зарекомендовали себя как надежные, качественные машины, которым не страшны ни экстремальные условия крайнего севера, ни жара пустынь, ни плохие дороги, ни круглосуточные нагрузки. Они способны справиться с любой задачей. Немаловажным достоинством является доступные цены на КАМАЗ и низкие эксплуатационные расходы.
            <br><span style="margin-left: 40px;">А так же наша компания предлагает практически безграничный выбор </span><a href="#" class="non-underline-link"><span>специальной техники</span></a><span>, построенной на шасси КАМАЗ.</span>
            <h5 style="margin-left: 40px; margin-top: 30px;">Продажа автомобилей КАМАЗ</h5>
            <span style="margin-left: 40px;">Ассортимент предлагаемых автомобилей КАМАЗ включает:</span>
            — <a href="#" class="non-underline-link">самосвалы</a> грузоподъемностью от 7 до 25 тонн;
            — <a href="#" class="non-underline-link">бортовые автомобили КАМАЗ</a> грузоподъемностью от 5 до 14 тонн;
            — <a href="#" class="non-underline-link">тягачи</a> с нагрузкой на седло от 8 до 25 тонн;
            — шасси различного назначения;
            — <a href="#" class="non-underline-link">автокраны</a> грузоподъемностью от 14 до 50 тонн;
            — крановые манипуляторы;
            — <a href="#" class="non-underline-link">бетоносмесители</a> емкостью от 6 до 10 куб. м;
            — фургоны на шасси КАМАЗ.
            <h5 style="margin-left: 40px; margin-top: 30px;">Самосвалы</h5>
            <a href="#" class="non-underline-link">Самосвалы КАМАЗ</a> являются наиболее востребованными грузовиками на российском рынке. ПАО «КАМАЗ» выпускает самосвалы строительного назначения для перевозки песка, щебня, а также других сыпучих материалов, а также сельскохозяйственного назначения. <a href="#" class="non-underline-link">Самосвалы КАМАЗ</a> могут использоваться для работы в составе автопоезда с самосвальными прицепами, что приводит к улучшению рентабельности перевозок.
            <h5 style="margin-left: 40px; margin-top: 30px;">Бортовые автомобили</h5>
            <a href="#" class="non-underline-link">Бортовые автомобили КАМАЗ</a> предназначены для перевозки различных грузов. Они подойдут в качестве городского развозного автомобиля для доставки продуктов питания, в качестве грузовика сельскохозяйственного назначения для перевозки зерна и других сельскохозяйственных грузов.
            <h5 style="margin-left: 40px; margin-top: 30px;">Седельные тягачи</h5>
            <a href="#" class="non-underline-link">Седельные тягачи КАМАЗ</a> получили широкое распространение среди потребителей благодаря своей доступности и надежности. ПАО «КАМАЗ» выпускает <a href="#" class="non-underline-link">тягачи</a>, способные везти в составе автопоезда полуприцепы любого назначения — бортовые тентованные полуприцепы для перевозки товаров, <a href="#" class="non-underline-link">самосвальные полуприцепы</a> для перевозки сыпучих грузов, тяжеловозные <a href="#" class="non-underline-link">прицепы</a> для перевозки бульдозеров, экскаваторов и т.п.
            <h5 style="margin-left: 40px; margin-top: 30px;">О производителе</h5>
            КАМАЗ занимает лидирующие позиции на рынке грузовой автомобильной техники в России и СНГ. Легендарные грузовики КАМАЗ регулярно побеждают как на международных выставках и форумах, так и во всемирно известных ралли-рейдах серии ДАКАР. КАМАЗ – многократный лауреат всевозможных премий.
            Трудно назвать производителя <a href="#" class="non-underline-link">специальной техники</a>, который не выпускает продукцию на шасси КАМАЗ. ПАО «КАМАЗ» предлагает огромный ассортимент шасси различной грузоподъемности, монтажной длинны рамы, исполнения кабины и т.д., способный удовлетворить самого взыскательного потребителя.
    
        </div>
    </div>
</div>
  
@endsection