<div class="mt-3">
    <form type="get" class="form-inline" action="{{ route('search') }}">
        <div class="form-group mx-sm-3 m-0 ">
            <input type="text" class="form-control" name="s" id="s" placeholder="Поиск по модели...">
        </div>
        <div class="form-group m-0 pr-0 pl-1 pt-0 pb-0">
            <button type="submit" class="btn btn-dark"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"/>
                <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
            </svg>
            </button>
        </div>
    </form>
</div>