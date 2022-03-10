@extends('layout.layout')

@section('title',$comic->title)

@section('content')

<div class="container">
  <div class="row">
    <div class="col-6">
      <div>
        <img src="{{$comic->image}}">
      </div>
    </div>
    <div class="col-6">
      <h1>{{$comic->title}}</h1>
      <p>{{$comic->description}}</p>
      <div class="d-flex justify-content-around border-none">
        <a href="{{route("comics.index")}}"><button type="button" class="btn btn-primary">Back To Comics</button></a>

        <a href="{{route("comics.edit", $comic->id)}}"><button type="button" class="btn btn-success">Edit</button></a>

        <form action="{{route("comics.destroy", $comic->id)}}" method="POST">
          @csrf
          @method("DELETE")
          <button type="submit" class="btn btn-danger elimina">Delete</button>
      </form>
      </div>
    </div>
  </div>
</div>
  
  
@endsection