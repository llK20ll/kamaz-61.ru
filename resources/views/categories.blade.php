@extends('layouts.master')

@section('title', 'Kamaz-61.кu | ' . 'Категории')

@section('content')

  @foreach ($categories as $category)
    @if($category->parent != null)
    <div class="category-card text-center col-6 col-lg-4 p-2">                                
        @if($category->parent != null)

        <a class="text-center" href="{{ route('category', $category->code) }}">
            
          <img class="card-img-top" src="     
            @if($category->image == null)
            {{ asset('/img/no-image-available.png') }}      
            @else
            {{ Storage::url($category->image) }}
            @endif
            "> {{$category->title}}
          </a>
          

        @else
          <hr>
          <b>{{$category->title}}</b>
          <hr>
        @endif
      
      </div>
    @endif
  @endforeach
@endsection