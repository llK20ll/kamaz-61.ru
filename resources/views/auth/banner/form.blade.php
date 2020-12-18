@extends('auth.layouts.master')


@section('title', 'Создать баннер')


@section('content')

<div class="col-md-12">
    
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
                <label for="image" class="col-sm-2 col-form-label">Новая картинка(950x413): </label>
                <div class="col-sm-10">
                    <label class="btn cardbtn btn-file">
                        Загрузить
                        <input type="file" style="display: none;" name="image" id="image">
                    </label>
                </div>
            </div>
            
            <br>

            <button class="btn cardbtn">Сохранить</button>
        </div>
    </form>
    


   
</div>

@endsection