@extends('layout.base')

@section('pageContent')
<main class="c-main">
  <section>
      <img class="c-comicPage__img" src="{{ $comic["thumb"] }}" alt="{{ $comic["title"] }}">
  </section>

  <section>
      <h1 class="c-comicPage__title">{{ $comic["title"] }}</h1>
      <p class="c-comicPage__description">{{ $comic["description"] }}</p>
  </section>

  <section class="l-row">
      <h3>TSpecs</h3>
      <div class="l-row">
          <div class="l-col l-col--1third">
              <h5>Series:</h5>
          </div>
          <div class="l-col l-col--2third">
              <p>{{ $comic["series"] }}</p>
          </div>
      </div>
      <div class="l-row">
          <div class="l-col l-col--1third">
              <h5>U.S. Price:</h5>
          </div>
          <div class="l-col l-col--2third">
              <p>{{ $comic["price"] }}</p>
          </div>
      </div>
      <div class="l-row">
          <div class="l-col l-col--1third">
              <h5>On Sale Date:</h5>
          </div>
          <div class="l-col l-col--2third">
              <p>{{ $comic["sale_date"] }}</p>
          </div>
      </div>   
    </section>
</main>
@endsection