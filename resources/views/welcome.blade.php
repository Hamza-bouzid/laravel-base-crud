@extends('layout.layout')

@section('title','Home')


@section('content')

    <h1>Home Page</h1>
    <a href="{{route("comics.index")}}">
    <button type="button" class="btn btn-primary">Vai a Comics</button>
    </a>
    

@endsection