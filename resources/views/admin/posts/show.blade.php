@extends('layouts.admin')

@section('content')
<img src="{{asset('storage/' . $post->image )}}" alt="">
<h1>{{$post->title}}</h1>
<p>{{$post->content}}</p>
<p>Category: {{$post->category->name}}</p>


<a href="{{route('admin.posts.index')}}"><i class="fas fa-angle-left"> Back</i></a>
<a href="{{route('admin.posts.edit', $post->id)}}">Edit</a>

@endsection