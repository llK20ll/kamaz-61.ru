

<div class="container p-0 mt-3" style="max-width: 900px; box-shadow: 0 2px 20px #5a5a5a; border: 1px solid #6c7c99;" >

<script src="js/carousel.js"></script>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="z-index: 0;" data-interval="10000">
        <ol class="carousel-indicators">

            @for ($i = 0; $i < $banners->count() ; $i++)
            <li class="               
            @if ($i == 0)
            active 
            @endif
            carousel__item__indicator" data-target="#carouselExampleIndicators" data-slide-to="{{$i}}"></li>
            @endfor

        </ol>
        <div class="carousel-inner">
            @for ($i = 0; $i < $banners->count() ; $i++)
            <div class="carousel-item      
            @if ($i == 0)
            active 
            @endif
            ">
            <a href="{{$banners[$i]->link}}"><img src="{{ Storage::url($banners[$i]->image)}}" alt="{{$banners[$i]->link}}" class="d-block w-100"></a>                  
            </div>
            @endfor                

        </div>

        <a href="#carouselExampleIndicators" class="carousel-control-prev" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>

        </a>

        <a href="#carouselExampleIndicators" class="carousel-control-next" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>