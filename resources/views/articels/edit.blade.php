@extends('app')

@section('title')
	Update Articels

@endsection

@section('content')
	<h1>{{$articel->title}}</h1>

	<hr/>
{!! Form::model($articel,['method'=>'PUT',"url" => "articels/".$articel->id])!!}

   <div class="form-group">

   {!! Form::label('title','Title :',['class'=>'form-control']) !!}

   {!! Form::text('title',null,['class'=>'form-control'] ) !!}



   </div>
   <div class="form-group">
     {!! Form::label('body','Body :',['class'=>'form-control']) !!}

       {!! Form::textarea('body',null,['class'=>'form-control'] ) !!}

   </div>
    <div class="form-group">
     {!! Form::label('published_at','Published On :',['class'=>'form-control']) !!}

       {!! Form::input('date','published_at',date('y-m-d'),['class'=>'form-control'] ) !!}

   </div>
    <div class="form-group">
    {!!Form::submit('Click Me!',['class'=>'btn btn-primary form-control'])!!}

   </div>


{!! Form::close() !!}


@if (count($errors)>0)
    <section class="info-box fail">
    @foreach ($errors->all() as $error)

      <li>{{$error}}</li>
    @endforeach
      
    </section>
    {{-- expr --}}
  @endif


@endsection