<div class="col text-center col-xl-4 col-lg-6 col-md-6 col-lg-3 mt-2 mb-3">
  <div class="card text-left px-1" >
    <a href="{{route('product', [$product->category, $product])}}"><h5 class="card-title text-truncate">{{$product->model}}</h5></a>
    
      <div class="cards-image">
        <a href="{{route('product', [$product->category, $product])}}">
          <img src="
          @if($product->image == null)
          {{ asset('/img/no-image-available.png') }}      
          @else
          {{ Storage::url($product->image) }}
          @endif
          " alt="{{$product->model ?? ''}}">
        </a>
        @admin
        <div class="wrench">
          <a href="{{ route('products.edit', $product) }}" >
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-wrench" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M.102 2.223A3.004 3.004 0 0 0 3.78 5.897l6.341 6.252A3.003 3.003 0 0 0 13 16a3 3 0 1 0-.851-5.878L5.897 3.781A3.004 3.004 0 0 0 2.223.1l2.141 2.142L4 4l-1.757.364L.102 2.223zm13.37 9.019L13 11l-.471.242-.529.026-.287.445-.445.287-.026.529L11 13l.242.471.026.529.445.287.287.445.529.026L13 15l.471-.242.529-.026.287-.445.445-.287.026-.529L15 13l-.242-.471-.026-.529-.445-.287-.287-.445-.529-.026z"/>
            </svg> 
          </a>
        </div>  
        @endadmin

      </div>
    
      <div class="card-body">
        <ul class="list-unstyled mb-1">
          <li class="text-truncate"><b>Категория:</b> {{$product->category->title}}</li>
          
          <?php 
          $params = explode("!", $product->card_params);

          $array = array_chunk($params, 2);
          ?>
          <?php foreach ($array as $items): ?>
              <li class="text-truncate">
              <?php foreach ($items as $row): ?>
                  <?php echo $row; ?>
              <?php endforeach; ?>
              </li>
          <?php endforeach; ?>
          
          <li class="text-truncate"><b>Цена: </b><span
            
          @isset($product->new_price)
          style="text-decoration: line-through;"
            
          @endisset 
            
            >{{ number_format($product->price)}}</span> руб.</li>
          <li class="text-truncate">          
            @isset($product->new_price)
            <b style="color: red">СПЕЦПРЕДЛОЖЕНИЕ: </b><span class="badge badge-success" style="font-size: 17px">{{ number_format($product->new_price)}} </span> руб.
            @else
            <span><hr class="mb-2"></span>
            @endisset
                      
          </li>
        </ul>
      </div>
    <div class="container mb-3">
      <form action="{{route('basket-add', $product)}}" method="POST">
        <div class="row">

          <div class="col-6">
            <a class="btn btn-outline-default cardbtn text-center w-100" href="{{route('product', [$product->category, $product])}}">
              <span class="align-middle">Подробнее
              </span></a> 
          </div>

          <div class="col-6">
          <button type="submit" class="btn btn-outline-primary w-100 cardbtn text-center" role="button" title="Купить">
            <span class="align-middle">
            Купить 
            <svg width="1.2em" height="1.2em" viewBox="0 0 16 16" class="bi bi-cart4" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"></path>
            </svg>  
               
            </span>       
          </button> 
          </div> 
          @csrf     
        </div>  
      </form>
    </div>
  </div>
</div>