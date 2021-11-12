<div class="c-control__bar">
    <div class="l-container l-row l-row--spacebetween">
        <h2 class="c-title">Page Control</h2>
        @if ( Request::is("comics/*") && !Request::is("comics/create") )
        <a class="c-btn c-control__btn" href="{{ route("comics.create") }}">Create Comic</a>
        <a class="c-btn c-control__btn c-control__btn--yellow" href="{{ route("comics.edit", $comic["id"]) }}">Edit Comic</a>
        <form action="{{ route("comics.destroy", $comic["id"]) }}" method="post">
            @csrf
			@method("DELETE")
            <button class="c-btn c-control__btn c-control__btn--red">Delete Comic</button> 
        </form>
        @else 
        <a class="c-btn c-control__btn" href="{{ route("comics.index") }}">Edit Comics</a>
        @endif
    </div>
</div>