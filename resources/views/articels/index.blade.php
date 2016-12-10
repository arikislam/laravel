@extends('app')

@section('title')
	All Articels

@endsection

@section('content')

<h1>Articels</h1>
@foreach ($articels as $articel)

		<h3>
		<a href="{{ action("ArticelController@show",[$articel->id]) }}"> {{$articel->title}}</a></h3>
		<p>{{$articel->body}}</p>
	 	<p>{{$articel->published_at}}</p>
	
@endforeach
	


@endsection