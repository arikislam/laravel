@extends('app')

@section('title')
	Articels

@endsection

@section('content')

<h1>{{$articel->title}}</h1>
	
		<p>{{$articel->body}}</p>
	 	<p>{{$articel->published_at}}</p>


@endsection