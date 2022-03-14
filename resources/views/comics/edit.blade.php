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
        <input type="text" class="form-control" name="title" id="title" placeholder="Title" value="{{old("title")??$comic->title}}">
        @error('title')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </div>
      <div class="form-group">
        <label for="formGroupExampleInput">Type</label>
        <select class="form-control form-control-md" id="type" name="type">
          <option value="comic book" {{((old("type")??$comic->type) == "comic book")? "selected": ""}}>Comic Book</option>
          <option value="graphic novel" {{((old("type")??$comic->type) == "graphic novel")? "selected": ""}}>Graphic Novel</option>
      </select>
      @error('type')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
      </div>
      <div class="form-group">
        <label for="formGroupExampleInput">Series</label>
        <input type="text" class="form-control" name="series" id="series" placeholder="Series" value="{{old('series')??$comic->series}}">
        @error('series')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
      </div>
      <div class="form-group">
        <label for="formGroupExampleInput">Description</label>
        <textarea class="form-control" id="description" name="description" placeholder="Add Description">{{old('description')??$comic->description}}</textarea>
        @error('description')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
      </div>
      <div class="form-group">
        <label for="formGroupExampleInput2">Image</label>
        <input type="text" class="form-control" name="image" id="image" placeholder="Add link image" value="{{old('image')??$comic->image}}">
        @error('image')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
      </div>
      <div class="form-group">
        <label for="formGroupExampleInput">Date</label>
        <input type="text" class="form-control" name="sale_date" id="date" placeholder="Add release date" value="{{old('sale_date')??$comic->sale_date}}">
        @error('sale_date')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
      </div>
      <div class="form-group">
        <label for="formGroupExampleInput">Price</label>
        <input type="text" class="form-control" name="price" id="price" placeholder="Price" value="{{old('price')??$comic->price}}">
        @error('price')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
      </div>
      <button type="submit" class="btn btn-success">Save</button>
    </form>
    

@endsection