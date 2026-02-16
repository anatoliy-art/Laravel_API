@extends('admin.layouts.admin')


@section('content')

@if (count($orders))
<table class="table table-striped mt-3">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Фото</th>
      <th scope="col">Название</th>
      <th scope="col">Телефон</th>
      <th scope="col">Адрес</th>
      <th scope="col">Стоимость заказа(руб)</th>
      <th scope="col">Статус заказа</th>
      <th scope="col">Дата заказа</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

    @foreach($orders as $order)
    <tr>
      <th scope="row">{{ $loop->iteration }}</th>
      <td><img src="{{ $order->window->photo ? asset('storage/'. $order->window->photo) : asset('assets/images/no-image.jpg') }}" alt="" width="50" height="50"></td>
      <td>{{ $order->title }}</td>
      <td>{{ $order->phone }}</td>
      <td>{{ $order->address }}</td>
      <td>{{ $order->price }}</td>
      <td>@if($order->status) <span class="text-success">Закрыт</span> @else <span class="text-danger">В работе</span> @endif</td>
      <td>{{ $order->created_at->format('Y-m-d') }}</td>
      <td class="d-flex">
        <a href="{{ route('order.window.back', ['id' => $order->id, 'role' => 'calculator']) }}" class="btn btn-warning mr-2">Back calculator</a>

        <form action="{{ route('order.window.status', ['id' => $order->id]) }}" method="post" class="d-flex mr-2">
	        @csrf
	        @method('PUT')

			<select class="form-select" aria-label="Default select example" name="status" id="status">			
				<option value="0" @if($order->status == '0') selected @endif>В работе</option>
				<option value="1" @if($order->status == '1') selected @endif>Закрыт</option>
			</select>
	        
	        <button class="btn btn-primary" type="submit">Status update</button>
	    </form>

        <form action="{{ route('order.window.delete', ['id' => $order->id]) }}" method="post">
        @csrf
        @method('DELETE')
        
        <button class="btn btn-danger" type="submit" onclick="return confirm('Вы согласны с confirm?')">Delete</button>
      </form>
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