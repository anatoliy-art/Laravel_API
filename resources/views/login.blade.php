@extends('layouts.user')


@section('content')

<h1>Login</h1>

<form method="POST" action="{{ route('user.login') }}">
	
	@csrf

  <div class="mb-3">
  <label for="email" class="form-label">User role</label>
  <select class="form-select form-control" aria-label="Default select example" name="email">
    <option selected>Selected role user</option>
    @foreach ($users as $user)
    <option value="{{ $user->email }}">{{ $user->roles }}</option>
    @endforeach
  </select>
  </div>

<!--   <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control @error('email') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div> -->
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control @error('password') is-invalid @enderror" id="exampleInputPassword1" name="password">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="remember">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button> <a href="{{ route('home') }}">Home</a>
</form>

@endsection
