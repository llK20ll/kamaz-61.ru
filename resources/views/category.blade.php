@extends('layouts.master')

@section('title', $category->title)

@section('content')


{{-- панель категорий< --}}  
@include('inc.category_panel')
{{-- >панель категорий --}}



<div class="container mt-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('index')}}">Главная </a></li>
            <li class="breadcrumb-item active" aria-current="page">

             {{ $category->title }} ({{ $category->products->count() }})

        </ol>
    </nav>
</div> 

{{-- фильтр --}}
{{-- <form method="GET" action="{{ route('category') }}">
    <div class="filters row">
        <div class="col-sm-6 col-md-3">
            <label for="price_from">Цена от
                <input type="text" name="price_from" id="price_from" size="6">
            </label>
            <label for="price_from">Цена до
                <input type="text" name="price_to" id="price_to" size="6">
            </label>
        </div> 
        <div class="col-sm-3 col-md-6">
            <label for="new_price">
                <input type="checkbox" name="new_price" id="new_price">СПЕЦПРЕДЛОЖЕНИЕ
            </label>
        </div>
        <div class="col-sm-3 col-md-3">
            <button type="submit" class="btn cardbtn">Фильтр</button>
        </div>
        
    </div>
</form> --}}
{{-- фильтр --}}

<div class="container p-0">
  <div class="row justify-content-around">
      
    {{-- @foreach ($category->products as $product)
    @include('layouts.card', ['category' => $category])
    @endforeach --}}
    @foreach ($products as $product)
    @include('layouts.card', ['category' => $category])
    @endforeach
    </div>
</div>   

<div class="row justify-content-center">
    <div class="col-6">
        {{ $products->links('vendor.pagination.bootstrap-4')}}
    </div>    
</div>      
@endsection