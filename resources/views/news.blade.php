@extends('layouts.master')

@section('title', 'Новости')

@section('content')
<h1 class="text-center pt-3">Новости</h1>
<div class="container pt-1">
  @foreach ($news as $item)
  {{-- Новость --}}
  <div class="row py-3">    
    <div class="col p-0">

      <hr class="mt-1 mb-0">

    <h3 class="pl-3 pt-2"><p>{{$item->title}}</p></h3>

      <div class="col-lg-6 px-4">
          {{-- <img class="" src="{{ asset('/img/no-image-available.png') }} " alt="" style="max-width: 100%; float: left; margin-right: 15px;"> --}}

          <img class="img-responsive mb-2" style="max-width: 100%; float: left; margin-right: 15px; margin-bottom: 15px;" src="     
          @if($item->image == null)
          {{ asset('/img/no-image-available.png') }}      
          @else
          {{ Storage::url($item->image) }}
          @endif
          " alt="{{$item->title}}" > 
        </a>
      </div>

      <div class="col px-4">       
        <pre class="news__text">{{$item->text}}</pre>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="px-4 w-100">    
      <hr class="mt-1 mb-0">
      <p class="text-right">{{$item->created_at}}</p>
    </div>
  </div>
  {{-- Новость --}}
  @endforeach
</div>
@endsection