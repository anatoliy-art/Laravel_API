@extends('layouts.account')


@section('content')

  <!-- sale section -->

      <a href="{{ route('estates.create') }}" class="btn btn-success mt-3">Create house</a>
  <section class="sale_section layout_padding">
    <div class="container-fluid2">
      <div class="sale_container">
        @foreach($house as $hous)
        <div class="box">
          <div class="img-box">
            <img src="{{ $hous->photo ? asset('storage/'. $hous->photo) : asset('assets/images/no-image.jpg') }}" alt="">
          </div>
          <div class="detail-box">
            <h6>
              <a href="{{ route('estates.show', ['estate' => $hous->id]) }}">{{ $hous->title }}</a>
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
            <p class="d-flex justify-content-between">
              <span><img src="{{ asset('assets/images/currency-dollar.svg') }}" alt="Иконка" width="20" height="20"> <b>{{ $hous->price }}</b></span> 
              <span><img src="{{ asset('assets/images/telephone.svg') }}" alt="Иконка" width="20" height="20"> <b>{{ $hous->phone }}</b></span>
            </p>
          </div>

        </div>
        @endforeach
      </div>

    </div>
  </section>

  <!-- end about section -->


@endsection