@extends('layouts.app')
​
@section('content')
​
​<div class="container">
    <h1> Blog Test</h1>
    <div class="row flex-wrap">
        <div class="col-4" v-for="post in posts">
            <div class="card text-left" >
                <img class="card-img-top" :src="post.image" width="100" alt="">
                <div class="card-body">
                    <h4 class="card-title">@{{post.name}}</h4>
                    <p class="card-text">@{{post.content}}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection