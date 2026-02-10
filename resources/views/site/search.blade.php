@extends('layouts.page')


@section('content')

  <!-- about section -->

  <section class="sale_section layout_padding">
    <div class="container-fluid">
      <div class="heading_container">

        @include('inc.category')

      </div>
      @if(count($search_house))
      <p>Поиск по запросу : <b>{{ $search['q_hous'] }}</b></p>
        <div class="sale_container">
        @foreach($search_house as $hous)
        <div class="box">
          <div class="img-box">
            <img src="{{ $hous->photo ? asset('storage/' . $hous->photo) : asset('assets/images/no-image.jpg') }}" alt="">
          </div>
          <div class="detail-box">
            <h6>
              <a href="{{ route('estate', ['slug' => $hous->slug]) }}">{{ $hous->title }}</a>
            </h6>
            <div class="detail-box-info">
              <span>
                <img src="{{ asset('assets/images/house.svg') }}" alt="Иконка" width="20" height="20"> {{ $hous->category->title }}                
              </span>
              <span>
                <img src="{{ asset('assets/images/bar-chart.svg') }}" alt="Иконка" width="20" height="20"> {{ $hous->floor->title }}                
              </span>
              <span>
                <img src="{{ asset('assets/images/back.svg') }}" alt="Иконка" width="20" height="20"> {{ $hous->material->title }}                
              </span>
              <span>
                <img src="{{ asset('assets/images/border-all.svg') }}" alt="Иконка" width="20" height="20"> {{ $hous->room->title }}                
              </span>              
              <span>
                <img src="{{ asset('assets/images/people.svg') }}" alt="Иконка" width="20" height="20"> {{ $hous->user->name }}                
              </span>                                         
            </div>
            <p>
              {{ Illuminate\Support\Str::words($hous->description, 15,  '...') }}
            </p>
          </div>
            <p class="d-flex justify-content-between">
              <span><img src="{{ asset('assets/images/currency-dollar.svg') }}" alt="Иконка" width="20" height="20"> <b>{{ $hous->price }}</b></span> 
              <span><img src="{{ asset('assets/images/telephone.svg') }}" alt="Иконка" width="20" height="20"> <b>{{ $hous->phone }}</b></span>
            </p>
        </div>
        @endforeach
      </div>
      @else
        	<p>По данному запросу <b>{{ $search['q_hous'] }}</b> ничего не найденo...</p>
      @endif

	@if(count($search_car))
		<p>Поиск по запросу : <b>{{ $search['q_car'] }}</b></p>
        <div class="sale_container">
        @foreach($search_car as $car)
        <div class="box">
          <div class="img-box">
            <img src="{{ $car->photo ? asset('storage/'. $car->photo) : asset('assets/images/no-image.jpg') }}" alt="">
          </div>
          <div class="detail-box">
            <h6>
              <a href="{{ route('cars.show', ['car' => $car->id]) }}">{{ $car->title }}</a>
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
      @else
        	<p>По данному запросу <b>{{ $search['q_car'] }}</b> ничего не найденo...</p>
      @endif



    </div>
  </section>

  <!-- end about section -->


@endsection