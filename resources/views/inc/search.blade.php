<form type="get" action="{{ route('search') }}">
    <div class="form-row">
        <div class="form-group">
            <input type="text" class="form-control" name="s" id="s" placeholder="Поиск по модели...">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-secondary btn-block">Искать</button>
        </div>
    </div>
</form>