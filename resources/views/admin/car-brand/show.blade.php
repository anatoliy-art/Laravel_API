@extends('admin.layouts.admin')


@section('content')

  <!-- about section -->

  <section class="about_section layout_padding-bottom mt-3">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="img-box">
            <img src="{{ $carBrand->photo ? asset('storage/'. $carBrand->photo) : asset('assets/images/no-image.jpg') }}" alt="">
          </div>
        </div>
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                {{ $carBrand->title }}
              </h2>
            </div>
            <div class="hous-info">
              {{ $carBrand->description }}
              <p>Created: <b>{{ $carBrand->created_at }}</b> | Updated: <b>{{ $carBrand->updated_at }}</b></p>
            </div>

          </div>
    <div class="btn-group">
      <a href="{{ url()->previous() }}" class="btn btn-primary mr-2">Назад</a>
      <a href="{{ route('carBrands.edit', ['carBrand' => $carBrand->id]) }}" class="btn btn-info mr-2" >Update</a> 
      <form action="{{ route('carBrands.destroy', ['carBrand' => $carBrand->id]) }}" method="post">
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