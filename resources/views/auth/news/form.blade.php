@extends('auth.layouts.master')
@isset($news)
@section('title', 'Редактировать новость - ' . $news->title)
@else    
@section('title', 'Создать новость')
@endisset


@section('content')

<div class="col-md-12">
    @isset($news)
        <h1>Редактировать новость <b>{{$news->title}}</b></h1>
    @else    
        <h1>Добавить новость</h1>
    @endisset
    


    <form method="POST" enctype="multipart/form-data"
    @isset($news)
    action="{{route('news.update', $news)}}"
    @else   
    action="{{route('news.store')}}"
    @endisset
    >
        <div>
            @isset($news)
            
            @method('PUT')
            
            @endisset

            @csrf

            <div class="input-group row">
                <label for="title" class="col-sm-2 col-form-label">Заголовок:</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="title" id="title" value="@isset($news){{$news->title}} @endisset">
                </div>
            </div>
            <br>
            <div class="input-group row">
                <label for="text" class="col-sm-2 col-form-label">Текст новости:</label>
                <div class="col-sm-6">
                    <textarea type="text" class="form-control" name="text" id="text" cols="30" rows="10">@isset($news){{$news->text}} @endisset</textarea>
                </div>
            </div>
            
                        <br>


                        <div class="input-group row">
                            <label for="new_price" class="col-sm-2 col-form-label">Картинка: </label>
                            <div class="col-sm-6">        
                                
                                <img src="
                                @isset($news)
                                    @if($news->image == null)
                                        {{ asset('/img/no-image-available.png') }}      
                                    @else
                                        {{ Storage::url($news->image) }}
                                    @endif
                                        
                                @else
                                {{ asset('/img/no-image-available.png') }} 
                                @endisset
                                " alt=" {{$news->title ?? ''}} ">                   
                            </div>
                        </div>
                        <br>

            <div class="input-group row">
                <label for="image" class="col-sm-2 col-form-label">Новая картинка: </label>
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