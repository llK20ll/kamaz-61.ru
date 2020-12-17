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
            <td class="text-left" style="max-width: 400px"><p class="news__text">{{$item->text}}</p></td>
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



        {{-- @foreach ($categories as $category)
        @if($category->parent != null)
        <tr>
            <td class="align-middle">
            <img src="
            @if($category->image == null)
            {{ asset('/img/no-image-available.png') }}      
            @else
            {{ Storage::url($category->image) }}
            @endif
            " height="50px" alt="{{$category->model ?? ''}}">
        </td>
            <td class="align-middle">{{ $category->title ?? ''}}</td>
            <td class="align-middle">{{ $category->code ?? '' }}</td>
            <td class="align-middle text-center">{{ $categories[$category->parent - 1 ]->title ?? '' }}</td>


            <td class="text-center align-middle">
                <div class="btn-group py-1" role="group">
                    <form action=" {{ route('categories.destroy', $category) }}" method="POST">
                        <a class="btn btn-primary cardbtn m-1" type="button" href="{{ route('categories.show' , $category) }}">Открыть</a>
                        <a class="btn btn-success m-1" type="button" href="{{ route('categories.edit', $category) }}">Редактировать</a>
                        @csrf
                        @method('DELETE')
                        <input type="hidden" name="_method" value="DELETE">
                        <input class="btn btn-danger m-1" type="submit" value="Удалить">
                    </form>
                </div>
            </td>
        </tr>
        @endif
        @endforeach --}}

        </tbody>
    </table>
    <a class="btn btn-primary cardbtn mt-3" type="button" href="{{route('news.create')}}">Добавить новость</a>
</div>
@endsection