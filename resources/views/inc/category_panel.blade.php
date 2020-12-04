<div class="container p-0 mt-0">
  <div class="accordion md-accordion accordion-3 z-depth-1-half w-l" id="accordionEx194" role="tablist" aria-multiselectable="true">
    
    <!-- Accordion card -->
    <div class="ml-2">
        <!-- Card header -->
        <hr class="mb-0">
        
      <div class="card-header" role="tab" id="heading4">
        <a data-toggle="collapse" data-parent="#accordionEx194" href="#collapse4" aria-expanded="true" aria-controls="collapse4">          
          <h3 class="mb-1">
            Категории
            <i class="fa fa-angle-down rotate-icon fa-1x"></i>
          </h3>
        </a>
      </div>

        <!-- Card body -->
        <div id="collapse4" class="collapse" role="tabpanel" aria-labelledby="heading4" data-parent="#accordionEx194">
            <div class="card-body pt-4">
                
              @foreach ($categories as $category)
                @if($category->parent != null)
                  @if($category->parent != null)
                    <a class="dropdown-item" href="{{ route('category', $category->code) }}"> 
                      {{$category->title}}
                    </a>            
                  @endif
                @endif
              @endforeach

          </div>
      </div>
    </div>
    <!-- Accordion card -->
    <!--/.Accordion wrapper-->
  </div>
</div>
