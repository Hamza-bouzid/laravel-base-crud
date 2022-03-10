
@extends('layout.layout')

@section('title','Comics')


@section('content')

<div class="container">
  <div class="row my-5">
    <div class="col-6 text-center">
      <a href="http://127.0.0.1:8000">
        <button type="button" class="btn btn-primary"><i class="fas fa-arrow-alt-left color-white"></i>Home Page</button>
      </a>
    </div>
    <div class="col-6 text-center">
      <a href="{{route('comics.create')}}">
        <button type="button" class="btn btn-success"><i class="fas fa-arrow-alt-left color-white"></i>New Comic</button>
      </a>
    </div>
  </div>
</div>

<div class="container-fluid">
  <div class="row">
@foreach ($comics as $comic)
    <div class="col-3 mx-3 my-5">
      <div class="d-flex justify-content-around border-none">
        <a href="{{route("comics.show", $comic->id)}}"><button type="button" class="btn btn-primary">Show</button></a>
        <a href="{{route("comics.edit", $comic->id)}}"><button type="button" class="btn btn-success">Edit</button></a>
        <form action="{{route("comics.destroy", $comic->id)}}" method="POST">
          @csrf
          @method("DELETE")
          <button type="submit" class="btn btn-danger elimina">Delete</button>
      </form>
      </div>
      <div class="card" style="width: 18rem">
        <img class="card-img-top" src="{{$comic->image}}" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">{{$comic->title}}</h5>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">Type: {{$comic->type}}</li>
          <li class="list-group-item">Series: {{$comic->series}}</li>
          <li class="list-group-item">Price: {{$comic->price}}$</li>
          <li class="list-group-item">Sale date: {{$comic->sale_date}}</li>
        </ul>
      </div>
    </div>

@endforeach
</div>
</div>
@endsection