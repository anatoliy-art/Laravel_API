@extends('layouts.account')


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
            <img src="{{ $estate->photo ? asset('storage/'. $estate->photo) : asset('assets/images/no-image.jpg') }}" alt="">
          </div>
          <div class="img-box-gallery">
            @if($estate->gallery)
              @foreach($estate->gallery as $value)
                <img src="{{ asset('storage/'. $value) }}" alt="" width="100">
              @endforeach
            @endif
          </div>
        </div>
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                {{ $estate->title }}
              </h2>
            </div>
            <div class="hous-info">
              {{ $estate->description }}
            <div class="detail-box-info mt-3">
              <span>
                <img src="{{ asset('assets/images/house.svg') }}" alt="Иконка" width="20" height="20"> {{ $estate->category->title }}                
              </span>
              <span>
                <img src="{{ asset('assets/images/bar-chart.svg') }}" alt="Иконка" width="20" height="20"> {{ $estate->floor->title }}                
              </span>
              <span>
                <img src="{{ asset('assets/images/back.svg') }}" alt="Иконка" width="20" height="20"> {{ $estate->material->title }}                
              </span>
              <span>
                <img src="{{ asset('assets/images/border-all.svg') }}" alt="Иконка" width="20" height="20"> {{ $estate->room->title }}                
              </span>              
              <span>
                <img src="{{ asset('assets/images/people.svg') }}" alt="Иконка" width="20" height="20"> {{ $estate->user->name }}                
              </span>                                         
            </div>
            <p class="d-flex justify-content-between">
              <span><img src="{{ asset('assets/images/currency-dollar.svg') }}" alt="Иконка" width="20" height="20"> <b>{{ $estate->price }}</b></span> 
              <span><img src="{{ asset('assets/images/telephone.svg') }}" alt="Иконка" width="20" height="20"> <b>{{ $estate->phone }}</b></span>
            </p>
            </div>

          </div>
    <div class="btn-group mt-5">
      <a href="{{ url()->previous() }}" class="btn btn-primary mr-2">Назад</a>
      <a href="{{ route('estates.edit', ['estate' => $estate->id]) }}" class="btn btn-info mr-2" >Update</a> 
      <form action="{{ route('estates.destroy', ['estate' => $estate->id]) }}" method="post">
        @csrf
        @method('DELETE')
        <button class="btn btn-danger" type="submit" onclick="return confirm('Вы согласны с confirm?')">Delete</button>
      </form>
    </div>

        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->


@endsection