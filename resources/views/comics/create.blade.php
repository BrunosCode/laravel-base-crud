@extends('layout.base')

@section('pageContent')
<h1>Insert new Comic</h1>

<form action="{{route("comics.store")}}" method="POST">
	@csrf

	<div>
		<label for="title">Title</label>
		<input type="text" id="title" name="title" placeholder="Insert Title">
	</div>

	<div>
		<label for="series">Series</label>
		<input type="text" id="series" name="series" placeholder="Insert Series">
	</div>

  <div>
    <label for="description">Description</label>
    <textarea name="description" id="description" cols="30" rows="10" placeholder="Insert description"></textarea>
  </div>

	<div>
		<label for="price">Price</label>
		<input type="number" step="0.01" id="price" name="price" placeholder="Insert Price">
	</div>

	<div>
		<label for="sale_date">First Sale Date</label>
		<input type="date" id="sale_date" name="sale_date" placeholder="Insert First Sale Date">
	</div>

	<div>
		<label for="thumb">Thumb</label>
		<input type="text" id="thumb" name="thumb" placeholder="Insert Thumb Url">
	</div>

	<div>
		<label for="type">Type</label>
		<input type="text" id="type" name="type" placeholder="Insert Type">
	</div>

	<button type="submit">Create</button>
  </form>

@endsection