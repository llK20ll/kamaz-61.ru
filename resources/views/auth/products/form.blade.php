@extends('auth.layouts.master')

@isset($product)
    @section('title', 'Редактировать позицию ' . $product->model)
@else
    @section('title', 'Добавить товар')
@endisset



@section('content')
<div class="col-md-12 bg-light p-4">
    @isset($product)
        <h1>Редактировать позицию <b>{{ $product->model }}</b></h1>
    @else
        <h1>Добавить позицию</h1>
    @endisset
        
    @include('auth.products.inc.help')

    <form method="POST" enctype="multipart/form-data"
        @isset($product)
        action="{{ route('products.update', $product) }}"
        @else   
        action="{{ route('products.store') }}"
        @endisset
        >
        <div>
            @isset($product) 
                @method('PUT')
            @endisset
            @csrf
            
            @isset($product) 
            <div class="input-group row">
                <label for="id" class="col-sm-2 col-form-label">ID: </label>
                <div class="col-sm-6 pt-2 ml-3">                    
                    @isset($product){{$product->id}} @endisset
                </div>
            </div>
            @endisset
            <br>
            
            <div class="input-group row">
                <label for="category_id" class="col-sm-2 col-form-label">Категория: </label>
                <div class="col-sm-6">                   
                    <select name="category_id" id="category_id" class="form-control">

                        @foreach ($categories as $category)
                            @if($category->parent != null)        
                                <option value="{{ $category->id }}"
                                @isset($product)
                                    @if($product->category_id == $category->id)
                                        selected
                                    @endif                                    
                                @endisset
                                >{{ $category->title }}</option>
                            @endif
                        @endforeach

                    </select>
                </div>
            </div>
            <br>
            <div class="input-group row">
                <label for="model" class="col-sm-2 col-form-label">Модель: </label>
                <div class="col-sm-6">   
                <input type="text" class="form-control" name="model" id="model" value="{{ old('model', isset($product) ?  $product->model : null)}}">
                @error('model')
                <div class="alert-danger">{{ $message }}</div>
                @enderror  
                    {{-- <input type="text" class="form-control" name="model" id="model" value="@isset($product){{$product->model}} @endisset"> --}}
                </div>
            </div>
            <br>

            <div class="input-group row">
                <label for="card_params" class="col-sm-2 col-form-label">Параметры карточки:</label>
                <div class="col-sm-6">                    
                    {{-- <input type="text" class="form-control" name="card_params" id="card_params" value="@isset($product){{$product->card_params}} @endisset"> --}}
                    <textarea class="form-control" name="card_params" id="card_params" cols="30" rows="10">@isset($product){{ $product->card_params }}@endisset</textarea>
                </div>
            </div>
            <br>

            <div class="input-group row">
                <label for="vehicle_characteristics_params" class="col-sm-2 col-form-label">Характеристики автомобиля:</label>
                <div class="col-sm-6">                    
                    {{-- <input type="text" class="form-control" name="card_params" id="card_params" value="@isset($product){{$product->card_params}} @endisset"> --}}
                    <textarea class="form-control" name="vehicle_characteristics_params" id="vehicle_characteristics_params" cols="30" rows="10">@isset($product){{ $product->vehicle_characteristics_params }}@endisset</textarea>
                </div>
            </div>
            <br>

            <div class="input-group row">
                <label for="weight_parameters_loads_params" class="col-sm-2 col-form-label">Весовые параметры, нагрузки:</label>
                <div class="col-sm-6">                    
                    {{-- <input type="text" class="form-control" name="card_params" id="card_params" value="@isset($product){{$product->card_params}} @endisset"> --}}
                    <textarea class="form-control" name="weight_parameters_loads_params" id="weight_parameters_loads_params" cols="30" rows="10">@isset($product){{ $product->weight_parameters_loads_params }}@endisset</textarea>
                </div>
            </div>
            <br>

            <div class="input-group row">
                <label for="engine_params" class="col-sm-2 col-form-label">Двигатель:</label>
                <div class="col-sm-6">                    
                    {{-- <input type="text" class="form-control" name="card_params" id="card_params" value="@isset($product){{$product->card_params}} @endisset"> --}}
                    <textarea class="form-control" name="engine_params" id="engine_params" cols="30" rows="10">@isset($product){{ $product->engine_params }}@endisset</textarea>
                </div>
            </div>
            <br>

            <div class="input-group row">
                <label for="gearbox_params" class="col-sm-2 col-form-label">Коробка передач:</label>
                <div class="col-sm-6">                    
                    {{-- <input type="text" class="form-control" name="card_params" id="card_params" value="@isset($product){{$product->card_params}} @endisset"> --}}
                    <textarea class="form-control" name="gearbox_params" id="gearbox_params" cols="30" rows="10">@isset($product){{ $product->gearbox_params }}@endisset</textarea>
                </div>
            </div>
            <br>

            <div class="input-group row">
                <label for="cabin_params" class="col-sm-2 col-form-label">Кабина:</label>
                <div class="col-sm-6">                    
                    {{-- <input type="text" class="form-control" name="card_params" id="card_params" value="@isset($product){{$product->card_params}} @endisset"> --}}
                    <textarea class="form-control" name="cabin_params" id="cabin_params" cols="30" rows="10">@isset($product){{ $product->cabin_params }}@endisset</textarea>
                </div>
            </div>
            <br>
            
            <div class="input-group row">
                <label for="chassis_characteristics_params" class="col-sm-2 col-form-label">Характеристики шасси:</label>
                <div class="col-sm-6">                    
                    {{-- <input type="text" class="form-control" name="card_params" id="card_params" value="@isset($product){{$product->card_params}} @endisset"> --}}
                    <textarea class="form-control" name="chassis_characteristics_params" id="chassis_characteristics_params" cols="30" rows="10">@isset($product){{ $product->chassis_characteristics_params }}@endisset</textarea>
                </div>
            </div>
            <br>

            <div class="input-group row">
                <label for="additionally_params" class="col-sm-2 col-form-label">Дополнительно:</label>
                <div class="col-sm-6">                    
                    {{-- <input type="text" class="form-control" name="card_params" id="card_params" value="@isset($product){{$product->card_params}} @endisset"> --}}
                    <textarea class="form-control" name="additionally_params" id="additionally_params" cols="30" rows="10">@isset($product){{ $product->additionally_params }}@endisset</textarea>
                </div>
            </div>
            <br>
            
            <div class="input-group row">
                <label for="semi_trailer_characteristics_params" class="col-sm-2 col-form-label">Характеристики полуприцепа:</label>
                <div class="col-sm-6">                    
                    {{-- <input type="text" class="form-control" name="card_params" id="card_params" value="@isset($product){{$product->card_params}} @endisset"> --}}
                    <textarea class="form-control" name="semi_trailer_characteristics_params" id="semi_trailer_characteristics_params" cols="30" rows="10">@isset($product){{ $product->semi_trailer_characteristics_params }}@endisset</textarea>
                </div>
            </div>
            <br>
            
            <div class="input-group row">
                <label for="compatible_tractors_params" class="col-sm-2 col-form-label">Совместимые тягачи:</label>
                <div class="col-sm-6">                    
                    {{-- <input type="text" class="form-control" name="card_params" id="card_params" value="@isset($product){{$product->card_params}} @endisset"> --}}
                    <textarea class="form-control" name="compatible_tractors_params" id="compatible_tractors_params" cols="30" rows="10">@isset($product){{ $product->compatible_tractors_params }}@endisset</textarea>
                </div>
            </div>
            <br>

            <div class="input-group row">
                <label for="trailer_characteristics_params" class="col-sm-2 col-form-label">Характеристики прицепа:</label>
                <div class="col-sm-6">                    
                    {{-- <input type="text" class="form-control" name="card_params" id="card_params" value="@isset($product){{$product->card_params}} @endisset"> --}}
                    <textarea class="form-control" name="trailer_characteristics_params" id="trailer_characteristics_params" cols="30" rows="10">@isset($product){{ $product->trailer_characteristics_params }}@endisset</textarea>
                </div>
            </div>
            <br>

            <div class="input-group row">
                <label for="price" class="col-sm-2 col-form-label">Цена: </label>
                <div class="col-sm-6">                    
                    <input type="text" class="form-control" name="price" id="price" value="{{ old('price', isset($product) ?  $product->price : null)}}">

                    @error('price')
                    <div class="alert-danger">{{ $message }}</div>
                    @enderror  
                 

                </div>
            </div>
            <br>

            <div class="input-group row">
                <label for="new_price" class="col-sm-2 col-form-label">Новая цена: </label>
                <div class="col-sm-6">                    
                    <input type="text" class="form-control" name="new_price" id="new_price" value="@isset($product){{$product->new_price}} @endisset">
                </div>
            </div>
            <br>
                        
            <div class="input-group row">
                <label for="new_price" class="col-sm-2 col-form-label">Картинка: </label>
                <div class="col-sm-6">        
                    
                    <img src="
                    @isset($product)
                        @if($product->image == null)
                            {{ asset('/img/no-image-available.png') }}      
                        @else
                            {{ Storage::url($product->image) }}
                        @endif
                            
                    @else
                    {{ asset('/img/no-image-available.png') }} 
                    @endisset
                    " alt=" {{$product->model ?? ''}} ">                   
                </div>
            </div>
            <br>

            <div class="input-group row">
                {{-- <label for="image" class="col-sm-2 col-form-label">Картинка: </label> --}}
                <div class="col-sm-10">
                    <label class="btn cardbtn btn-file">
                        {{-- <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-folder2-open" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M1 3.5A1.5 1.5 0 0 1 2.5 2h2.764c.958 0 1.76.56 2.311 1.184C7.985 3.648 8.48 4 9 4h4.5A1.5 1.5 0 0 1 15 5.5v.64c.57.265.94.876.856 1.546l-.64 5.124A2.5 2.5 0 0 1 12.733 15H3.266a2.5 2.5 0 0 1-2.481-2.19l-.64-5.124A1.5 1.5 0 0 1 1 6.14V3.5zM2 6h12v-.5a.5.5 0 0 0-.5-.5H9c-.964 0-1.71-.629-2.174-1.154C6.374 3.334 5.82 3 5.264 3H2.5a.5.5 0 0 0-.5.5V6zm-.367 1a.5.5 0 0 0-.496.562l.64 5.124A1.5 1.5 0 0 0 3.266 14h9.468a1.5 1.5 0 0 0 1.489-1.314l.64-5.124A.5.5 0 0 0 14.367 7H1.633z"/>
                        </svg>--}} Загрузить 
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