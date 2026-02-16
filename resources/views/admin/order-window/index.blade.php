@extends('admin.layouts.admin')


@section('content')

@if (count($orders))
<table class="table table-striped mt-3">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Photo</th>
      <th scope="col">Title</th>
      <th scope="col">Width</th>
      <th scope="col">Height</th>
      <th scope="col">Material</th>
      <th scope="col">Hutters</th>
      <th scope="col">Phone</th>
      <th scope="col">Address</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

  	@foreach($orders as $order)
    <tr>
      <th scope="row">{{ $loop->iteration }}</th>
      <td><img src="{{ $order->window->photo ? asset('storage/'. $order->window->photo) : asset('assets/images/no-image.jpg') }}" alt="" width="50" height="50"></td>
      <td>{{ $order->title }}</td>
      <td>{{ $order->width }}</td>
      <td>{{ $order->height }}</td>
      <td>{{ $order->material }}</td>
      <td>{{ $order->hutters }}</td>
      <td>{{ $order->phone }}</td>
      <td>{{ $order->address }}</td>
      <td class="d-flex">
        <a href="{{ route('order.window.edit', ['id' => $order->id]) }}" class="btn btn-info mr-2">To send calculaters</a>
      </td>
    </tr>
    @endforeach

  </tbody>
</table>
{{ $orders->links() }}
@else
  <p>Список заказов пуст...</p>
@endif

@endsection