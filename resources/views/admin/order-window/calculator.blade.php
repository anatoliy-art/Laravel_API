@extends('admin.layouts.admin')


@section('content')

  <!-- about section -->

  <section class="about_section layout_padding-bottom mt-3">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="img-box">
            <img src="{{ $order->window->photo ? asset('storage/'. $order->window->photo) : asset('assets/images/no-image.jpg') }}" alt="" style="width: 100%;">
          </div>
        </div>
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                {{ $order->title }}
              </h2>
            </div>
            <div class="detail-box-info">
              <span>
                <img src="{{ asset('assets/images/border-all.svg') }}" alt="Иконка" width="20" height="20"> {{ $order->width }} см              
              </span>
              <span>
                <img src="{{ asset('assets/images/border-all.svg') }}" alt="Иконка" width="20" height="20"> {{ $order->height }} см              
              </span>
              <span>
                <img src="{{ asset('assets/images/border-all.svg') }}" alt="Иконка" width="20" height="20"> {{ $order->material }}              
              </span>
              <span>
                <img src="{{ asset('assets/images/9-circle.svg') }}" alt="Иконка" width="20" height="20"> {{ $order->hutters }} створка(и)              
              </span>                                         
            </div>

          </div>
<hr><br>
<h4>Calculater order window</h4>
        <form action="{{ route('calculatop.window.update', ['id' => $order->id]) }}" method="post">
          @csrf
          @method('PUT')

  <div class="mb-3">
    <label for="price_material" class="form-label">Стоимость материала(1п\м руб)</label>
    <input type="text" class="form-control" id="price_material" name="price_material" aria-describedby="price_material" value="{{ old('price_material') }}">    
  </div>

  <div class="mb-3">
    <label for="time_spent" class="form-label">Кол-во затраченного времени(ч)</label>
    <input type="text" class="form-control" id="time_spent" name="time_spent" aria-describedby="time_spent" value="{{ old('time_spent') }}">
  </div>

  <div class="mb-3">
    <label for="price_hour" class="form-label">Стоимость часа работы(руб)</label>
    <input type="text" class="form-control" id="price_hour" name="price_hour" aria-describedby="price_hour" value="{{ old('price_hour') }}">
  </div>
          
          <button class="btn btn-primary" type="submit" >Стоимость заказа</button>
        </form>

          </div>
        </div>
      </div>

  </section>

  <!-- end about section -->


@endsection