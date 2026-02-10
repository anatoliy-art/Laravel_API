@extends('admin.layouts.admin')


@section('content')

  <!-- about section -->

  <section class="about_section layout_padding-bottom">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="img-box">
            <img src="{{ $car->photo ? asset('storage/'. $car->photo) : asset('assets/images/no-image.jpg') }}" alt="" class="img-fluid">
          </div>
          <div class="img-box-gallery">
            @if($car->gallery)
              @foreach($car->gallery as $value)
                <img src="{{ asset('storage/'. $value) }}" alt="" width="100">
              @endforeach
            @endif
          </div>
        </div>
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                {{ $car->title }}
              </h2>
              <p><b>Status:</b> @if($car->visible) <span class="text-success">Опубликован</span> @else <span class="text-danger">В архиве</span> @endif</p>
            </div>
            <div class="hous-info">
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
            </div>

          </div>
    <div class="btn-group mt-5">
      <a href="{{ route('admin.cars.index') }}" class="btn btn-primary mr-2">List cars</a>

      <form action="{{ route('admin.cars.update', ['id' => $car->id]) }}" method="post">
        @csrf
        @method('PUT')

        <select class="form-select" aria-label="Default select example" name="visible" id="visible">
          <option value="0" @if($car->visible == 0) selected @endif >Archive</option>
          <option value="1" @if($car->visible == 1) selected @endif >Published</option>
        </select>

        <button class="btn btn-success mr-2" type="submit">Edit visible</button>
      </form>
       
      <form action="{{ route('admin.cars.destroy', ['id' => $car->id]) }}" method="post">
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