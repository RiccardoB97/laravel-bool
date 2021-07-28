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
      <a href="route{{'categories.show', $post->category->slug}}">{{$post->category->name}}</a>
      @else
        Uncategorized
      @endif
    </h5>
    <div class="tags">
      Tags:
      @forelse($post->tags as $tag)
        <span>{{$tag->name}}</span>
      @empty
        <span>No tags yet</span>
      @endforelse
    </div>
      <p class="lead">{{$post->content}}</p>
    <a href="{{route('posts.index')}}"><i class="fas fa-angle-left"> Back</i></a>
  </div>
</div>


@endsection