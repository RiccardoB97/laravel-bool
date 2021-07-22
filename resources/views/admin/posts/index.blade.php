@extends('layouts.admin')

@section('content')
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
                <td>
                    <a href="{{route('admin.posts.show', $post->id)}}" class="btn btn-primary"><i class="fas fa-eye"></i></a>
                    <a href="{{route('admin.posts.edit', $post->id)}}" class="btn btn-secondary"><i class="fas fa-pen"></i></a>
                    <a href="" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection