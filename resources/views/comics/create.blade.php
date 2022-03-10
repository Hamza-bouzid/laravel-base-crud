@extends('layout.layout')

@section('title','Create')


@section('content')

    <h1>Create Comic</h1>
    <a href="{{route("comics.index")}}">
    <button type="button" class="btn btn-primary">Vai a Comics</button>
    </a>

    <form action="{{route('comics.store')}}" method="POST">
      @csrf

      <div class="form-group">
        <label for="formGroupExampleInput">Title</label>
        <input type="text" class="form-control" name="title" id="title" placeholder="Title">
      </div>
      <div class="form-group">
        <label for="formGroupExampleInput">Type</label>
        <select class="form-control form-control-md" id="type" name="type">
          <option value="comic book">Comic Book</option>
          <option value="graphic novel">Graphic Novel</option>
      </select>
      </div>
      <div class="form-group">
        <label for="formGroupExampleInput">Series</label>
        <input type="text" class="form-control" name="series" id="series" placeholder="Series">
      </div>
      <div class="form-group">
        <label for="formGroupExampleInput">Description</label>
        <textarea class="form-control" id="description" name="description" placeholder="Add Description"></textarea>
      </div>
      <div class="form-group">
        <label for="formGroupExampleInput2">Image</label>
        <input type="text" class="form-control" name="image" id="image" placeholder="Add link image">
      </div>
      <div class="form-group">
        <label for="formGroupExampleInput">Date</label>
        <input type="text" class="form-control" name="sale_date" id="date" placeholder="Add release date">
      </div>
      <div class="form-group">
        <label for="formGroupExampleInput">Price</label>
        <input type="text" class="form-control" name="price" id="price" placeholder="Price">
      </div>
      <button type="submit" class="btn btn-success">Add Comic</button>
    </form>
    

@endsection