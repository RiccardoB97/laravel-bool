@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{route('contacts.send')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control" placeholder="Mario Rossi" aria-describedby="nameHelp">
            <small id="nameHelp" class="text-muted">Type your name above</small>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control" placeholder="Mario Rossi" aria-describedby="emailHelp">
            <small id="emailHelp" class="text-muted">Type your email above</small>
        </div>
        <div class="form-group">
            <label for="body">Message Body</label>
            <textarea class="form-control" name="body" id="body" rows="5"></textarea>
        </div>
    
        <button type="submit" class="btn btn-primary"><i class="fas fa-envelope-open fa-lg fa-fw"></i> Send</button>
    </form>
</div>
@endsection