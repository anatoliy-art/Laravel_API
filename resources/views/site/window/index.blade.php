@extends('layouts.page')


@section('content')

  <!-- sale section -->

  <section class="sale_section layout_padding">
    <div class="container-fluid">
      <div class="heading_container">
        <h2>
          windowe For Sale
        </h2>
        <p>
          There are many variations of passages of Lorem Ipsum available, but the
        </p>

      </div>
      <div class="sale_container">
        @foreach($windows as $window)
        <div class="box">
          <div class="img-box">
            <img src="{{ $window->photo ? asset('storage/'. $window->photo) : asset('assets/images/no-image.jpg') }}" alt="">
          </div>
          <div class="detail-box">
            <h6>
              <a href="{{ route('site.window.show', ['slug' => $window->slug]) }}">{{ $window->title }}</a>
            </h6>
            <div class="detail-box-info">
              <span>
                <img src="{{ asset('assets/images/border-all.svg') }}" alt="Иконка" width="20" height="20"> {{ $window->material }}              
              </span>
              <span>
                <img src="{{ asset('assets/images/9-circle.svg') }}" alt="Иконка" width="20" height="20"> {{ $window->hutters }} створка(и)              
              </span>                                         
            </div>
            <p>
              {{ Illuminate\Support\Str::words($window->description, 15,  '...') }}
            </p>
          </div>

        </div>
        @endforeach
      </div>

{{ $windows->links() }}

    </div>
  </section>

  <!-- end sale section -->


@endsection