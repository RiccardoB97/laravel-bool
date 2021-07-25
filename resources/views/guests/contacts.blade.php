@extends('layouts.app')

@section('content')
<h1>Contact me</h1>
    <form action="" method="post">
        @csrf
        <div class="form-group">
          <label for="full_name">Full name</label>
          <input type="text" name="full_name" id="full_name" class="form-control" placeholder="Mario Rossi" aria-describedby="fullNameHelper" minlength="5" maxlength='255' required>
          <small id="fullNameHelper" class="text-muted">Type here your full name</small>
        </div>
        <div class="form-group">
          <label for="email">Email Address</label>
          <input type="email" name="email" id="email" class="form-control" placeholder="mario.rossi@example.com" aria-describedby="emailHelper" required>
          <small id="emailHelper" class="text-muted">Tyoe here your email address</small>
        </div>
    <div class="form-group">
      <label for="">Message</label>
      <textarea name="form-control" id="message"  name='message' rows="5"></textarea>
    </div>
    <button type="submit" class="btn btn-primary btn-block">Send </button>
        
    </form>
@endsection