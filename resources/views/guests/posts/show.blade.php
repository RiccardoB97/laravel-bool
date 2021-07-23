@extends('layouts.app')


@section('content')

<div class="container">
  <div class="row">
        <h1 class='display-1'> {{$post->title}}</h1>  
      <a href="{{ route('posts.show', $post->id) }}">
        <img src="{{$post->image}}" class="img-fluid" alt="">
      </a>
      <p class="lead">{{$post->content}}</p>
    <a href="{{route('posts.index')}}"><i class="fas fa-angle-left"> Back</i></a>
  </div>
</div>


@endsection