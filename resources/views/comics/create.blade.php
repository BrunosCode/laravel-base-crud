@extends('layout.base')

@section('pageContent')
<div class="l-container">

  <h1>Insert new Comic</h1>
  
  <form class="c-form" action="{{route("comics.store")}}" method="POST">
    @csrf
  
    <div class="l-col">
      <label class="c-form__label" for="title">Title</label>
      <input class="c-form__input" type="text" id="title" name="title" placeholder="Insert Title">
    </div>
  
    <div class="l-col">
      <label class="c-form__label" for="series">Series</label>
      <input class="c-form__input" type="text" id="series" name="series" placeholder="Insert Series">
    </div>
  
    <div class="l-col">
      <label class="c-form__label" for="description">Description</label>
      <textarea class="c-form__input" name="description" id="description" cols="30" rows="10" placeholder="Insert description"></textarea>
    </div>
  
    <div class="l-col">
      <label class="c-form__label" for="price">Price</label>
      <input class="c-form__input" type="number" step="0.01" id="price" name="price" placeholder="Insert Price">
    </div>
  
    <div class="l-col">
      <label class="c-form__label" for="sale_date">First Sale Date</label>
      <input class="c-form__input" type="date" id="sale_date" name="sale_date" placeholder="Insert First Sale Date">
    </div>
  
    <div class="l-col">
      <label class="c-form__label" for="thumb">Thumb</label>
      <input class="c-form__input" type="text" id="thumb" name="thumb" placeholder="Insert Thumb Url">
    </div>
  
    <div class="l-col">
      <label class="c-form__label" for="type">Type</label>
      <input class="c-form__input" type="text" id="type" name="type" placeholder="Insert Type">
    </div>
  
    <button class="c-btn c-form__btn" type="submit">Create</button>
    </form>
</div>
@endsection