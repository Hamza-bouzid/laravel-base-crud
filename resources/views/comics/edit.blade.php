@extends('layout.layout')

@section('title', $comic->title)


@section('content')

    <h1>Edit Comic {{$comic->name}}</h1>
    <a href="{{route("comics.index")}}">
    <button type="button" class="btn btn-primary">Vai a Comics</button>
    </a>

    <form action="{{route('comics.update', $comic->id)}}" method="POST">
      @csrf
      @method('PUT')

      <div class="form-group">
        <label for="formGroupExampleInput">Title</label>
        <input type="text" class="form-control" name="title" id="title" placeholder="Title" value="{{$comic->title}}" required>
      </div>
      <div class="form-group">
        <label for="formGroupExampleInput">Type</label>
        <select class="form-control form-control-md" id="type" name="type">
          <option value="comic book" {{$comic->type == "comic book"? "selected": ""}}>Comic Book</option>
          <option value="graphic novel" {{$comic->type == "graphic novel"? "selected": ""}}>Graphic Novel</option>
      </select>
      </div>
      <div class="form-group">
        <label for="formGroupExampleInput">Series</label>
        <input type="text" class="form-control" name="series" id="series" placeholder="Series" value="{{$comic->series}}" required>
      </div>
      <div class="form-group">
        <label for="formGroupExampleInput">Description</label>
        <textarea class="form-control" id="description" name="description" placeholder="Add Description" required>{{$comic->description}}</textarea>
      </div>
      <div class="form-group">
        <label for="formGroupExampleInput2">Image</label>
        <input type="text" class="form-control" name="image" id="image" placeholder="Add link image" value="{{$comic->image}}" required>
      </div>
      <div class="form-group">
        <label for="formGroupExampleInput">Date</label>
        <input type="text" class="form-control" name="sale_date" id="date" placeholder="Add release date" value="{{$comic->sale_date}}" required>
      </div>
      <div class="form-group">
        <label for="formGroupExampleInput">Price</label>
        <input type="text" class="form-control" name="price" id="price" placeholder="Price" value="{{$comic->price}}" required>
      </div>
      <button type="submit" class="btn btn-success">Save</button>
    </form>
    

@endsection