@extends('layouts.page')


@section('content')

  <!-- about section -->

  <section class="about_section layout_padding-bottom">
    <div class="square-box">
      <img src="{{ asset('assets/images/square.png') }}" alt="">
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="img-box">
            <img src="{{ $car->photo ? asset('storage/' . $car->photo) : asset('assets/images/no-image.jpg') }}" alt="">
          </div>
        </div>
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                {{ $car->title }}
              </h2>
            </div>
            <div class="car-info">
              {{ $car->description }}
            <div class="detail-box-info mt-3">
              <span>
                <img src="{{ asset('assets/images/calendar.svg') }}" alt="Иконка" width="20" height="20"> {{ $car->year }} год               
              </span>
              <span>
                <img src="{{ asset('assets/images/car-front.svg') }}" alt="Иконка" width="20" height="20"> {{ $car->engine }} л.с.              
              </span>
              <span>
                <img src="{{ asset('assets/images/9-circle.svg') }}" alt="Иконка" width="20" height="20"> {{ $car->mileage }} км              
              </span>              
              <span>
                <img src="{{ asset('assets/images/people.svg') }}" alt="Иконка" width="20" height="20"> {{ $car->user->name }}                
              </span>                                         
            </div>
             <p class="d-flex justify-content-between">
              <span><img src="{{ asset('assets/images/currency-dollar.svg') }}" alt="Иконка" width="20" height="20"> <b>{{ $car->price }}</b></span> 
              <span><img src="{{ asset('assets/images/telephone.svg') }}" alt="Иконка" width="20" height="20"> <b>{{ $car->phone }}</b></span>
            </p>
            </div>

          </div>
          <a href="{{ url()->previous() }}" class="btn btn-primary mt-5">Назад</a>
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->


@endsection
