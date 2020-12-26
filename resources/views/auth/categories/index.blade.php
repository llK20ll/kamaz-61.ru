@extends('auth.layouts.master')

@section('title', 'Категории')

@section('content')
<div class="col-md-12">
    <h1>Категории</h1>
    <table class="table bg-light">
        <tbody>
        <tr>
            <th class="text-center align-middle tableCaption">
                Картинка
            </th>
            <th class="text-center align-middle tableCaption">
                Название
            </th>
            <th class="text-center align-middle tableCaption">
                Код
            </th> 
            <th class="text-center align-middle tableCaption">
                Родительская категория
            </th>
            <th class="text-center align-middle tableCaption">
                Действия
            </th>
        </tr>
        @foreach ($categories as $category)
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
            <td class="align-middle"><a href="{{ route('category', $category->code) }}">{{ $category->title ?? ''}}</a></td>
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
        @endforeach

        </tbody>
    </table>
    <a class="btn btn-primary cardbtn" type="button"
href="{{ route('categories.create')}}">Добавить категорию</a>
</div>
@endsection