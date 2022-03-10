@extends('layout.layout')

@section('title','prodotto')

@section('content')
  <h1>{{$comic->title}}</h1>
  <p>{{$comic->description}}</p>
  <a href="{{route("comics.index")}}"><button type="button" class="btn btn-primary">back</button></a>
@endsection