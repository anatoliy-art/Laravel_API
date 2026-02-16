@extends('admin.layouts.admin')


@section('content')

@if (count($orders))

<table class="table table-striped mt-3">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Фото</th>
      <th scope="col">Название</th>
      <th scope="col">Ширина(см)</th>
      <th scope="col">Высота(см)</th>
      <th scope="col">Материал</th>
      <th scope="col">Створок(кол-во)</th>
      <th scope="col">Стоимость заказа(руб)</th>
      <th scope="col">Стоимость материала(руб)</th>
      <th scope="col">Стоимость работы(руб)</th>
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
      <td>{{ $order->price ?? 0 }}</td>
      <td>{{ $order->material_price ?? 0 }}</td>
      <td>{{ $order->time_price ?? 0 }}</td>
      <td class="d-flex">
        <a href="{{ route('calculatop.window.index', ['id' => $order->id]) }}" class="btn btn-info mr-2">Calculator</a>
        <a href="{{ route('order.window.deliver', ['id' => $order->id]) }}" class="btn btn-primary mr-2">Deliver</a>
        <a href="{{ route('order.window.back', ['id' => $order->id, 'role' => 'manager']) }}" class="btn btn-warning">Back manager</a>
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