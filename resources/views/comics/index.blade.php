
@extends('layout.layout')

@section('title','Comics')


@section('content')

<div class="container">
  <div class="row my-5">
    <div class="col-12 text-center">
      <a href="http://127.0.0.1:8000">
        <button type="button" class="btn btn-primary"> <- Home Page</button>
        </a>
    </div>
  </div>
</div>

<div class="container-fluid">
  <div class="row">
@foreach ($comics as $comic)
    <div class="col-3 mx-3">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="{{$comic->image}}" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">{{$comic->title}}</h5>
          <p class="card-text">{{$comic->description}}</p>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">Type: {{$comic->type}}</li>
          <li class="list-group-item">Series: {{$comic->series}}</li>
          <li class="list-group-item">Price: {{$comic->price}}$</li>
          <li class="list-group-item">Sale date:{{$comic->sale_date}}</li>
        </ul>
      </div>
    </div>

@endforeach
</div>
</div>
@endsection