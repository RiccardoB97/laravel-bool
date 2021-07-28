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

<form action="{{route('admin.posts.update', $post->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-group">
      <label for="title">Title</label>
      <input type="text" name="title" id="title" class="form-control" placeholder="add a title" aria-describedby="titleHelper" value="{{$post->title}}">
      <small id="titleHelper" class="text-muted">Type a title for the current post</small>
    </div>

    <div class="form-group">
        <label for="category_id">Categories</label>
        <select class="form-control @error('category_id') is-invalid @enderror" name="category_id" id="category_id">
          <option value="">Select a category</option>
          @foreach($categories as $category)
              <option value="{{$category->id}}" {{$category->id == old('category_id', $post->category_id) ? 'selected' : ''}}>{{$category->name}}</option>
          @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="tags">Tags</label>
        <select multiple class="form-control" name="tags[]" id="tags">
          <option value="" disabled>Select a Tag</option>
          @if($tags)
              @foreach($tags as $tag)
                @if($errors->any())
                  <option value="{{$tag->id}}" {{in_array($tag->id, old('tags'))}}>{{$tag->name}}</option>
                @endif
                  <option value="{{$tag->id}}" {{$post->tags->contains($tag) ? 'selected' : ''}}>{{$tag->name}}</option>
              @endforeach
          @endif
        </select>
      </div>
      
    <div class="form-group">
        <label for="image">Cover Image</label>
        <input type="file" name="image" id="image">
        <img width='100' src="{{asset('storage/' . $post->image)}}">
    </div>

    <div class="form-group">
        <label for="content">Content</label>
        <textarea class='form-control' name="content" id="content" rows='4' >{{$post->content}}</textarea>
    </div>
      <button type="submit" class="btn btn-success">Update</button>
</form>
@endsection