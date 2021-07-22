@extends('layouts.admin')

@section('content')
<div class="d-flex justify-content-between mb-2">
    <h2>All posts</h2>
    <a class='btn btn-primary' href="{{route('admin.posts.create')}}"><i class="fas fa-plus"></i> Add a post</a>
</div>


    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>IMAGE</th>
                <th>TITLE</th>
                <th>ACTIONS</th>
            </tr>
        </thead>
        <tbody>
            @foreach($posts as $post)
            <tr>
                <td>{{$post->id}}</td>
                <td><img width='100' src="{{$post->image}}" alt=""></td>
                <td>{{$post->title}}</td>
                <td class='d-flex'>
                    <a href="{{route('admin.posts.show', $post->id)}}" class="btn btn-primary"><i class="fas fa-eye"></i></a>
                    <a href="{{route('admin.posts.edit', $post->id)}}" class="btn btn-secondary mx-1"><i class="fas fa-pen"></i></a>
                    <form action="{{route('admin.posts.destroy', $post->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection