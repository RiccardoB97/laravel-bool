@extends('layouts.admin')
@section('content')
<h1>Create a new post</h1>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{route('admin.posts.store')}}" method="post">
    @csrf
    <div class="form-group">
      <label for="title">Title</label>
      <input type="text" name="title" id="title" class="form-control" placeholder="add a title" aria-describedby="titleHelper" value="{{old('title')}}">
      <small id="titleHelper" class="text-muted">Type a title for the current post</small>
    </div>
    <div class="form-group">
        <label for="image">Cover Image</label>
        <input type="text" name="image" id="image" class="form-control" placeholder="https://" aria-describedby="imageHelper" value="{{old('image')}}">
        <small id="imageHelper" class="text-muted">Type an image URL for the current post</small>
    </div>
    <div class="form-group">
        <label for="content">Content</label>
        <textarea class='form-control' name="content" id="content" rows='4' value="{{old('content')}}"></textarea>
    </div>
      <button type="submit" class="btn btn-success">Submit</button>
</form>
@endsection