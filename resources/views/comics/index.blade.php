@extends('layout.base')

@section('pageContent')
<h1>Lista di tutti i prodotti</h1>
<table>
	<thead>
	  <tr>
		<th>#</th>
		<th>Title</th>
		<th>Description</th>
		<th>Thumb</th>
		<th>Price</th>
		<th>Series</th>
		<th>Sale Date</th>
		<th>Type</th>
	  </tr>
	</thead>
	<tbody>
	  @foreach ($comics as $comic)
	  <tr>
		<th>{{$comic["id"]}}</th>
		<td>{{$comic["title"]}}</td>
		<td>{{$comic["description"]}}</td>
		<td><img src="{{$comic["thumb"]}}" alt="{{$comic["title"]}}"></td>
		<td>{{$comic["price"]}}€</td>
		<td>{{$comic["series"]}}</td>
		<td>{{$comic["sale_date"]}}</td>
		<td>{{$comic["type"]}}</td>
	  </tr>
	  @endforeach
	</tbody>
</table>
@endsection