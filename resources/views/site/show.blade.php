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
            <img src="{{ $hous->photo ? asset('assets/images/' . $hous->photo) : asset('assets/images/no-image.jpg') }}" alt="">
          </div>
        </div>
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                {{ $hous->title }}
              </h2>
            </div>
            <div class="hous-info">
              {{ $hous->description }}
            <div class="detail-box-info mt-3">
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
             <p class="d-flex justify-content-between">
              <span><img src="{{ asset('assets/images/currency-dollar.svg') }}" alt="Иконка" width="20" height="20"> <b>{{ $hous->price }}</b></span> 
              <span><img src="{{ asset('assets/images/telephone.svg') }}" alt="Иконка" width="20" height="20"> <b>{{ $hous->phone }}</b></span>
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