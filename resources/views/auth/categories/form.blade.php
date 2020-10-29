@extends('auth.layouts.master')

@isset($category)
    @section('title', 'Редактировать категорию' . $category->title)
@else
    @section('title', 'Создать категорию')
@endisset



@section('content')
<div class="col-md-12 bg-light p-4">
    @isset($category)
        <h1>Редактировать категорию <b>{{ $category->title }}</b></h1>
    @else
        <h1>Добавить категорию</h1>
    @endisset

    <form method="POST" enctype="multipart/form-data"
        @isset($category)
        action="{{ route('categories.update', $category) }}"
        @else   
        action="{{ route('categories.store') }}"
        @endisset
        >
        <div>
            @isset($category) 
                @method('PUT')
            @endisset
            @csrf
            
            @isset($category) 
            <div class="input-group row">
                <label for="id" class="col-sm-2 col-form-label">ID: </label>
                <div class="col-sm-6 pt-2 ml-3">                    
                    @isset($category){{$category->id}} @endisset
                </div>
            </div>
            @endisset


            <br>

            <div class="input-group row">
                <label for="code" class="col-sm-2 col-form-label">Код: </label>
                <div class="col-sm-6">
      
                <input type="text" class="form-control" name="code" id="code" value="{{ old('code', isset($category) ? $category->code : null) }}">  
                    @error('code')
                        <div class="alert-danger">{{ $message }}</div>
                    @enderror  
                </div>
            </div>

            <br>
            <div class="input-group row">
                <label for="title" class="col-sm-2 col-form-label">Название: </label>
                <div class="col-sm-6">                   
                    <input type="text" class="form-control" name="title" id="title" value="@isset($category){{$category->title}} @endisset">
                    @error('title')
                    <div class="alert-danger">{{ $message }}</div>
                    @enderror  
                </div>
            </div>
            <br>

            <div class="input-group row">
                <label for="parent" class="col-sm-2 col-form-label">Родитель: </label>
                <div class="col-sm-6">                   
                    {{-- <input type="text" class="form-control" name="parent" id="parent" value="@isset($category){{$category->parent}} @endisset"> --}}
                    
                    <select name="parent" id="parent" class="form-control">

                    @foreach ($categories as $category)
                        @if($category->parent == null)
                            <option value="{{ $category->id }}"
                                selected
                            >{{ $category->title }}</option>
                        @endif
                    @endforeach

                </select>
                
                </div>
            </div>
            <br>

            
            <div class="input-group row">
                <label for="image" class="col-sm-2 col-form-label">Картинка(400x266): </label>
                <div class="col-sm-10">

                    <label class="btn cardbtn btn-file">
                        Загрузить новую
                        {{-- <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-folder2-open" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M1 3.5A1.5 1.5 0 0 1 2.5 2h2.764c.958 0 1.76.56 2.311 1.184C7.985 3.648 8.48 4 9 4h4.5A1.5 1.5 0 0 1 15 5.5v.64c.57.265.94.876.856 1.546l-.64 5.124A2.5 2.5 0 0 1 12.733 15H3.266a2.5 2.5 0 0 1-2.481-2.19l-.64-5.124A1.5 1.5 0 0 1 1 6.14V3.5zM2 6h12v-.5a.5.5 0 0 0-.5-.5H9c-.964 0-1.71-.629-2.174-1.154C6.374 3.334 5.82 3 5.264 3H2.5a.5.5 0 0 0-.5.5V6zm-.367 1a.5.5 0 0 0-.496.562l.64 5.124A1.5 1.5 0 0 0 3.266 14h9.468a1.5 1.5 0 0 0 1.489-1.314l.64-5.124A.5.5 0 0 0 14.367 7H1.633z"/>
                        </svg> --}}
                        <input type="file" style="display: none;" name="image" id="image">
                    </label>
                   
                </div>
            </div>
            <button class="btn cardbtn">Сохранить</button>
        </div>   
       
    </form>
</div>
@endsection