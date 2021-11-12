<div class="c-collection l-container">
  <h2 class="c-collection__title">Current Series</h2>
  <div class="c-collection__comics">

    @foreach (config("comics") as $index => $comic)
    <div class="c-comic l-col">
      <a href="{{ route("comics.show", $index + 1) }}" class="c-btn">
          <div class="c-comic__squaredCover">
              <img src="{{ $comic["thumb"] }}"
              alt={{ $comic["series"] }} class="c-comic__squaredImg">
          </div>
          <p class="c-comic__title">{{ $comic["series"] }}</p>
      </a>
    </div>
    @endforeach

  </div>
  <button class="c-btn c-collection__btn">Load More</button>
</div>