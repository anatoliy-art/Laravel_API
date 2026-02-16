@extends('admin.layouts.admin')


@section('content')

<a href="{{ route('windows.create') }}" class="btn btn-success">Create window</a>

@if(count($windows))
<table class="table table-striped mt-3">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">ID</th>
      <th scope="col">Photo</th>
      <th scope="col">Title</th>
      <th scope="col">Slug</th>
      <th scope="col">Description</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

  	@foreach($windows as $window)
    <tr>
      <th scope="row">{{ $loop->iteration }}</th>
      <td>{{ $window->id }}</td>
      <td><img src="{{ $window->photo ? asset('storage/'. $window->photo) : asset('assets/images/no-image.jpg') }}" alt="" width="50" height="50"></td>
      <td>{{ $window->title }}</td>
      <td>{{ $window->slug }}</td>
      <td>{{ $window->description}}</td>
      <td><a href="{{ route('windows.show', ['window' => $window->id]) }}" class="btn btn-info">Show</a></td>
    </tr>
    @endforeach

  </tbody>
</table>
@else
  <p>List windows empty...</p>
@endif

@endsection