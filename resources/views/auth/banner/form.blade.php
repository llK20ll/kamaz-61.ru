@extends('auth.layouts.master')

@isset($banner)
    @section('title', 'Редактировать баннер' . $banner->link)
@else
    @section('title', 'Создать баннер')
@endisset


@section('content')

<div class="container">
    @isset($banner)
    <h1>Редактировать баннер</h1>
    @else
    <h1>Создать баннер</h1>
    @endisset
    

    <form method="POST" enctype="multipart/form-data"
        @isset($banner)
        action="{{route('banner.update', $banner)}}" 
        @else
        action="{{route('banner.store')}}"
        @endisset
        >
        <div>
            @isset($banner)
                @method('PUT')
            @endisset
            @csrf
            @admin
            <div class="input-group row">
                <label for="link" class="col-sm-2 col-form-label">Ссылка:</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="link" id="link" value="{{ old('card_params', isset($banner) ? $banner->link : '#') }}">
                </div>
            </div>

            <br>

            <div class="input-group row">
                <label for="image" class="col-sm-2 col-form-label">Загруть баннер .jpg (950x413): </label>
                <div class="col-sm-10 align-self-center">
                    <label class="btn">
                        
                        <input type="file" name="image" id="image">
                    </label>
                </div>
            </div>
            
            <br>

            <button class="btn cardbtn">Сохранить</button>
            @endadmin
        </div>
    </form>
    


   
</div>

@endsection