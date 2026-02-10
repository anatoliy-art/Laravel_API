@extends('layouts.page')


@section('content')

  <!-- sale section -->

  <section class="sale_section layout_padding">
    <div class="container-fluid">
      <div class="heading_container">
        <h2>
          care For Sale
        </h2>
        <p>
          There are many variations of passages of Lorem Ipsum available, but the
        </p>

        @include('inc.categoryCar')

      </div>
      <div class="sale_container">
        @foreach($cars as $car)
        <div class="box">
          <div class="img-box">
            <img src="{{ $car->photo ? asset('storage/'. $car->photo) : asset('assets/images/no-image.jpg') }}" alt="">
          </div>
          <div class="detail-box">
            <h6>
              <a href="{{ route('site.car.show', ['slug' => $car->slug]) }}">{{ $car->title }}</a>
            </h6>
            <div class="detail-box-info">
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
            <p>
              {{ Illuminate\Support\Str::words($car->description, 15,  '...') }}
            </p>
            <p class="d-flex justify-content-between">
              <span><img src="{{ asset('assets/images/currency-dollar.svg') }}" alt="Иконка" width="20" height="20"> <b>{{ $car->price }}</b></span> 
              <span><img src="{{ asset('assets/images/telephone.svg') }}" alt="Иконка" width="20" height="20"> <b>{{ $car->phone }}</b></span>
            </p>
          </div>

        </div>
        @endforeach
      </div>

{{ $cars->links() }}

    </div>
  </section>

  <!-- end sale section -->


@endsection