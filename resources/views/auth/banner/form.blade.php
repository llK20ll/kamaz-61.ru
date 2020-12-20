@extends('auth.layouts.master')


@section('title', 'Создать баннер')


@section('content')

<div class="container">
    
    <h1>Создать баннер</h1>

    <form method="POST" enctype="multipart/form-data" action="{{route('banner.store')}}">
        <div>
            @csrf

            <div class="input-group row">
                <label for="link" class="col-sm-2 col-form-label">Ссылка:</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="link" id="link" value="#">
                </div>
            </div>

            <br>

            <div class="input-group row">
                <label for="image" class="col-sm-2 col-form-label">Загруть баннер .jpg (950x413): </label>
                <div class="col-sm-10 align-self-center">
                    <label class="btn">
                        
                        <input type="file"  name="image" id="image">
                    </label>
                </div>
            </div>
            
            <br>

            <button class="btn cardbtn">Сохранить</button>
        </div>
    </form>
    


   
</div>

@endsection