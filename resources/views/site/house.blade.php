@extends('layouts.page')


@section('content')

  <!-- sale section -->

  <section class="sale_section layout_padding">
    <div class="container-fluid">
      <div class="heading_container">
        <h2>
          House For Sale
        </h2>
        <p>
          There are many variations of passages of Lorem Ipsum available, but the
        </p>

        @include('inc.category')

      </div>
      <div class="sale_container">
        @foreach($hous_sale as $hous)
        <div class="box">
          <div class="img-box">
            <img src="{{ $hous->photo ? asset('storage/'. $hous->photo) : asset('assets/images/no-image.jpg') }}" alt="">
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
            <p class="d-flex justify-content-between">
              <span><img src="{{ asset('assets/images/currency-dollar.svg') }}" alt="Иконка" width="20" height="20"> <b>{{ $hous->price }}</b></span> 
              <span><img src="{{ asset('assets/images/telephone.svg') }}" alt="Иконка" width="20" height="20"> <b>{{ $hous->phone }}</b></span>
            </p>
          </div>
        </div>
        @endforeach
      </div>

{{ $hous_sale->links() }}

    </div>
  </section>

  <!-- end sale section -->


@endsection