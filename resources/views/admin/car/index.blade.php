@extends('admin.layouts.admin')


@section('content')

<table class="table table-striped">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Img</th>
      <th scope="col">Brand</th>
      <th scope="col">User</th>
      <th scope="col">Title</th>
      <th scope="col">Year</th>
      <th scope="col">Engine</th>
      <th scope="col">Mileage</th>
      <th scope="col">Price</th>
      <th scope="col">Phone</th>
      <th scope="col">Visible</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

  	@foreach($cars as $car)
    <tr>
      <th scope="row">{{ $loop->iteration }}</th>
      <td><img src="{{ $car->photo ? asset('storage/'. $car->photo) : asset('assets/images/no-image.jpg') }}" alt="" width="50" height="50"></td>
      <td>{{ $car->brand->title }}</td>
      <td>{{ $car->user->name }}</td>
      <td>{{ $car->title }}</td>
      <td>{{ $car->year }}</td>
      <td>{{ $car->engine }}</td>
      <td>{{ $car->mileage }}</td>
      <td>{{ $car->price }}</td>
      <td>{{ $car->phone }}</td>
      <td>@if($car->visible) <span class="text-success">Опубликован</span> @else <span class="text-danger">В архиве</span> @endif</td>
      <td><a href="{{ route('admin.cars.show', ['id' => $car->id]) }}" class="btn btn-info">Show</a></td>
    </tr>
    @endforeach

  </tbody>
</table>

{{ $cars->links() }}

@endsection