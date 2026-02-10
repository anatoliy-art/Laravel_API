@extends('admin.layouts.admin')


@section('content')

<table class="table table-striped">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Img</th>
      <th scope="col">Title</th>
      <th scope="col">Floor</th>
      <th scope="col">Room</th>
      <th scope="col">Material</th>
      <th scope="col">Category</th>
      <th scope="col">User</th>
      <th scope="col">Price</th>
      <th scope="col">Visible</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

  	@foreach($houses as $house)
    <tr>
      <th scope="row">{{ $loop->iteration }}</th>
      <td><img src="{{ $house->photo ? asset('storage/'. $house->photo) : asset('assets/images/no-image.jpg') }}" alt="" width="50" height="50"></td>
      <td>{{ $house->title }}</td>
      <td>{{ $house->floor->title }}</td>
      <td>{{ $house->room->title }}</td>
      <td>{{ $house->material->title }}</td>
      <td>{{ $house->category->title }}</td>
      <td>{{ $house->user->name }}</td>
      <td>{{ $house->price }}</td>
      <td>{{ $house->visible }}</td>
      <td><a href="{{ route('admin.estates.show', ['id' => $house->id]) }}" class="btn btn-info">Show</a></td>
    </tr>
    @endforeach

  </tbody>
</table>


{{ $houses->links() }}


@endsection