@extends('layouts.user')


@section('content')

<h1>Register</h1>

<form method="POST" action="{{ route('user.register') }}">

	@csrf

  <div class="mb-3">
    <label for="exampleInputName" class="form-label">Name</label>
    <input type="text" class="form-control @error('name') is-invalid @enderror" id="exampleInputName" aria-describedby="NameHelp" name="name" value="{{ old('name') }}">
    <div id="NameHelp" class="form-text">We'll never share your name with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control @error('email') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" value="{{ old('email') }}">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control @error('password') is-invalid @enderror" id="exampleInputPassword1" aria-describedby="passwordHelp" name="password">
    <div id="passwordHelp" class="form-text">We'll never share your password with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="password_confirmation" class="form-label">Confirm Password</label>
    <input type="password" class="form-control @error('confirmed') is-invalid @enderror" id="password_confirmation" aria-describedby="password_confirmationHelp" name="password_confirmation">
    <div id="password_confirmationHelp" class="form-text">We'll never share your confirm password with anyone else.</div>
  </div>

  <button type="submit" class="btn btn-primary">Submit</button> <a href="{{ route('login') }}">Login</a>
</form>

@endsection