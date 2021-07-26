@extends('layouts.app')


@section('content')

<div class="container">
  <div class="row">
      <h1 class='display-1'> {{$post->title}}</h1> 
      <a href="{{ route('posts.show', $post->id) }}">
        <img src="{{$post->image}}" class="img-fluid" alt="">
      </a>
      <h5>Category:
      @if($post->category)
      <a href="route{{'categories.show', $post->category->slug}}"></a>
      @else
        Uncategorized
      @endif
    </h5>

      <p class="lead">{{$post->content}}</p>
    <a href="{{route('posts.index')}}"><i class="fas fa-angle-left"> Back</i></a>
  </div>
</div>


@endsection