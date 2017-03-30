@extends('prototypes.session1')


@section('session')

<form class="form" method="POST" action="/registration"> {{ csrf_field() }}
  <div class="form-group">
    <label for="username">Username</label>
    <input type="text" class="form-control" name="username" required>
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="text" class="form-control" name="email" required>
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" name="password" required>
  </div>
  <div class="form-group">
    <label for="password_confirmation">Password confirmation</label>
    <input type="password" class="form-control" name="password_confirmation" required>
  </div>
  <div class="form-group">
    <button type="submit" class="btn btn-default">Register</button>
  </div>
</form>

@include('error')

@endsection


