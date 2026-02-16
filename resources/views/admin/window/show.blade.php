@extends('admin.layouts.admin')


@section('content')

  <!-- about section -->

  <section class="about_section layout_padding-bottom mt-3">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="img-box">
            <img src="{{ $window->photo ? asset('storage/'. $window->photo) : asset('assets/images/no-image.jpg') }}" alt="">
          </div>
        </div>
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                {{ $window->title }}
              </h2>
            </div>
            <div class="hous-info">
              {{ $window->description }}
            <div class="detail-box-info">
              <span>
                <img src="{{ asset('assets/images/border-all.svg') }}" alt="Иконка" width="20" height="20"> {{ $window->material }}              
              </span>
              <span>
                <img src="{{ asset('assets/images/9-circle.svg') }}" alt="Иконка" width="20" height="20"> {{ $window->hutters }} створка(и)              
              </span>                                         
            </div>
              <p>Created: <b>{{ $window->created_at }}</b> | Updated: <b>{{ $window->updated_at }}</b></p>
            </div>

          </div>
    <div class="btn-group">
      <a href="{{ url()->previous() }}" class="btn btn-primary mr-2">Назад</a>
      <a href="{{ route('windows.edit', ['window' => $window->id]) }}" class="btn btn-info mr-2" >Update</a> 
      <form action="{{ route('windows.destroy', ['window' => $window->id]) }}" method="post">
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