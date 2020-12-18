@extends('auth.layouts.master')

@section('title', 'Новости')

@section('content')
<div class="col-md-12">
    <h1>Новости</h1>
    <table class="table bg-light">
        <tbody>
        <tr>
            {{-- <th class="text-center align-middle tableCaption">
                id
            </th> --}}
            <th class="text-center align-middle tableCaption">
                Картинка
            </th>
            <th class="text-left align-middle tableCaption">
                Заголовок
            </th>
            <th class="text-left align-middle tableCaption" style="max-width: 400px">
                Текст
            </th> 
            <th class="text-right align-middle tableCaption" style="min-width: 120px">
                Дата/Время
            </th>
            <th class="text-center align-middle tableCaption">
                Действия
            </th>
            
        </tr>

        @foreach ($news as $item)
        <tr>
            {{-- <td class="text-center">{{$item->id}}</td> --}}

            <td> 
                <img style="width: 89px; vertical-align: middle;" src="
                @if($item->image == null)
                {{ asset('/img/no-image-available.png') }}      
                @else
                {{ Storage::url($item->image) }}
                @endif
                    " class="card-img-top" alt="{{ $item->title ?? ''}}">
            </td>

            <td class="text-left" style="max-width: 200px">{{$item->title}}</td>
            <td class="text-left" style="max-width: 400px"> <pre class="news__text">     {{$item->text}}</pre></td>
            <td class="text-right" style="max-width: 100px">{{$item->created_at}}</td>

            <td class="text-center" style="width: 100px">
                <div class="btn-group" role="group">
                    <form action=" {{ route('news.destroy', $item) }}" method="POST">
                        <a class="btn btn-primary cardbtn"  style="width: 100px" type="button" href="{{ route('news.show', $item) }}">Открыть</a>
                        <a class="btn btn-success" type="button" style="width: 100px" href="{{ route('news.edit', $item) }}">Редактир.</a>
                        @csrf
                        @method('DELETE')                        
                        <input class="btn btn-danger" style="width: 100px" type="submit" value="Удалить">
                    </form>
                </div>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
    <a class="btn btn-primary cardbtn mt-3" type="button" href="{{route('news.create')}}">Добавить новость</a>
</div>
@endsection