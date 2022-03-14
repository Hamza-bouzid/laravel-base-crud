@extends('layout.layout')

@section('title','Create')


@section('content')

    <h1>Create Comic</h1>
    <a href="{{route("comics.index")}}">
    <button type="button" class="btn btn-primary">Back To Comics</button>
    </a>

    <form action="{{route('comics.store')}}" method="POST">
      @csrf

      <div class="form-group">
        <label for="formGroupExampleInput">Title</label>
        <input type="text"
         class="form-control @error('title') is-invalid @enderror" name="title"
          id="title"
          placeholder="Title"
          value="{{old("title")}}">
          @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
          @enderror
      </div>
      <div class="form-group">
        <label for="formGroupExampleInput">Type</label>
        <select class="form-control form-control-md" id="type" name="type">
          <option value="comic book" {{old("type") == "comic book" ? "selected" : null}}>Comic Book</option>
          <option value="graphic novel" {{old("type") == "graphic novel" ? "selected" : null}}>Graphic Novel</option>
      </select>
      @error('type')
         <div class="alert alert-danger">{{ $message }}</div>
      @enderror
      </div>
      <div class="form-group">
        <label for="formGroupExampleInput">Series</label>
        <input type="text" class="form-control" name="series" id="series" placeholder="Series"
        value="{{old("series")}}">
        @error('series')
           <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </div>
      <div class="form-group">
        <label for="formGroupExampleInput">Description</label>
        <textarea class="form-control" id="description" name="description" placeholder="Add Description">{{old("description")}}</textarea>
        @error('description')
           <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </div>
      <div class="form-group">
        <label for="formGroupExampleInput2">Image</label>
        <input type="text" class="form-control" name="image" id="image" placeholder="Add link image" value="{{old("image")}}">
        @error('image')
           <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </div>
      <div class="form-group">
        <label for="formGroupExampleInput">Date</label>
        <input type="text" class="form-control" name="sale_date" id="date" placeholder="Add release date" value="{{old("sale_date")}}">
        @error('sale_date')
           <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </div>
      <div class="form-group">
        <label for="formGroupExampleInput">Price</label>
        <input type="text" class="form-control" name="price" id="price" placeholder="Price" value="{{old("price")}}">
        @error('price')
           <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </div>
      <button type="submit" class="btn btn-success">Add Comic</button>
    </form>
    

@endsection