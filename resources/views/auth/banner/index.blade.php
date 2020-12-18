@extends('auth.layouts.master')

@section('title', 'Баннер')

@section('content')
<div class="col-md-12">
    <h1>Баннеры</h1>
    <table class="table bg-light">
        <tbody>
            <tr>
     
                <th class="text-center align-middle tableCaption">
                    Баннер
                </th>
                <th class="text-center align-middle tableCaption" style="max-width: 400px">
                    Ссылка
                </th> 
                <th class="text-right align-middle tableCaption" style="min-width: 120px">
                    Дата создания
                </th>
                <th class="text-center align-middle tableCaption">
                    Действия
                </th>            
            </tr>
        
            @foreach ($banners as $banner)
            <tr>

           

            <td class="text-center align-middle" style="width: 45%"> 
                <img class="w-100" style="vertical-align: middle;" src="
                @if($banner->image == null)
                {{ asset('/img/no-image-available.png') }}      
                @else
                {{ Storage::url($banner->image) }}
                @endif
                    " class="card-img-top">
            </td>

            <td class="text-center align-middle" style="width: 27%">{{ $banner->link ?? ''}}</td>

            <td class="text-right align-middle" style="max-width: 100px">{{$banner->created_at}}</td>

            <td class="text-center align-middle" style="width: 100px">
                <div class="btn-group" role="group">
                    <form action=" {{ route('banner.destroy', $banner) }}" method="POST">                     
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
    <a class="btn btn-primary cardbtn mt-3" type="button" href="{{route('banner.create')}}">Добавить баннер</a>
</div>
@endsection