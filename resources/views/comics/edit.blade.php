@extends('layout.base')

@section('pageContent')
<div class="l-container">

  <h1>Edit {{ $comic["title"] }} {{ $comic["id"] }}</h1>
  
  <form class="c-form" action="{{ route("comics.update", $comic["id"]) }}" method="POST">
    @csrf
    @method("PUT")
  
    <div class="l-col">
      <label class="c-form__label" for="title">Title</label>
      <input class="c-form__input" type="text" id="title" name="title" placeholder="Insert Title" value="{{ old('title') ? old('title') : $comic['title'] }}">
    </div>
  
    <div class="l-col">
      <label class="c-form__label" for="series">Series</label>
      <input class="c-form__input" type="text" id="series" name="series" placeholder="Insert Series" value="{{ old('series') ? old('series') : $comic['series'] }}">
    </div>
  
    <div class="l-col">
      <label class="c-form__label" for="description">Description</label>
      <textarea class="c-form__input" name="description" id="description" cols="30" rows="10" placeholder="Insert description">{{ old('description') ? old('description') : $comic['description'] }}</textarea>
    </div>
  
    <div class="l-col">
      <label class="c-form__label" for="price">Price</label>
      <input class="c-form__input" type="number" step="0.01" id="price" name="price" placeholder="Insert Price" value="{{ old('price') ? old('price') : $comic['price'] }}">
    </div>
  
    <div class="l-col">
      <label class="c-form__label" for="sale_date">First Sale Date</label>
      <input class="c-form__input" type="date" id="sale_date" name="sale_date" placeholder="Insert First Sale Date" value="{{ old('sale_date') ? old('sale_date') : $comic['sale_date'] }}">
    </div>
  
    <div class="l-col">
      <label class="c-form__label" for="thumb">Thumb</label>
      <input class="c-form__input" type="text" id="thumb" name="thumb" placeholder="Insert Thumb Url" value="{{ old('thumb') ? old('thumb') : $comic['thumb'] }}">
    </div>
  
    <div class="l-col">
      <label class="c-form__label" for="type">Type</label>
      <input class="c-form__input" type="text" id="type" name="type" placeholder="Insert Type" value="{{ old('type') ? old('type') : $comic['type'] }}">
    </div>
  
    <button class="c-btn c-form__btn c-control__btn--green" type="submit">Edit</button>
    </form>
</div>
@endsection