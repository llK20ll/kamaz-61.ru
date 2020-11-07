
  <div class="category-card text-center col-6 col-lg-4 p-5">    
        <a class=" text-center" href="{{ route('category', $category->code) }}">
          
        <img class="card-img-top" alt="{{$category->title}}" src="     
          @if($category->image == null)
          {{ asset('/img/no-image-available.png') }}      
          @else
          {{ Storage::url($category->image) }}
          @endif
          "> {{$category->title}}
        </a>         
  </div>
