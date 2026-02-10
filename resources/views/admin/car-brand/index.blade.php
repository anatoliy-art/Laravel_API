@extends('admin.layouts.admin')


@section('content')

<a href="{{ route('carBrands.create') }}" class="btn btn-success">Create brand car</a>

@if(count($brands))
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

  	@foreach($brands as $brand)
    <tr>
      <th scope="row">{{ $loop->iteration }}</th>
      <td>{{ $brand->id }}</td>
      <td><img src="{{ $brand->photo ? asset('storage/'. $brand->photo) : asset('assets/images/no-image.jpg') }}" alt="" width="50" height="50"></td>
      <td>{{ $brand->title }}</td>
      <td>{{ $brand->slug }}</td>
      <td>{{ $brand->description}}</td>
      <td><a href="{{ route('carBrands.show', ['carBrand' => $brand->id]) }}" class="btn btn-info">Show</a></td>
    </tr>
    @endforeach

  </tbody>
</table>
@else
  <p>List brands car empty...</p>
@endif

@endsection