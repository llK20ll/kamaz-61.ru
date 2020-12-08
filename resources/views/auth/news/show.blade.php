@extends('auth.layouts.master')

@section('title', 'Новость ' . $news->title)

@section('content')
<div class="col-md-12 bg-light">
    <h1>Категория {{ $news->title }}</h1>
    <table class="table">
        <tbody>
            <tr>
                <th>
                    Поле
                </th>
                <th>
                    Значение
                </th>
            </tr>
            <tr>
                <td>ID:</td>
                <td>{{$news->id}}</td>
            </tr>
            <tr>
                <td>Заголовок:</td>
                <td>{{$news->title}}</td>
            </tr>
            <tr>
                <td>Текст:</td>
                <td>{{$news->text}}</td>
            </tr>
            <tr>
                <td>Картинка:</td>
                <td><img src="
                    @if($news->image == null)
                    {{ asset('/img/no-image-available.png') }}      
                    @else
                    {{ Storage::url($news->image) }}" height="240px"
                    @endif 
                    >
                </td>
            </tr>
            {{-- <tr>
                <td>Кол-во новостей</td>
                <td>{{ $news->count() }}</td>
            </tr> --}}
        </tbody>
    </table>
</div>
@endsection