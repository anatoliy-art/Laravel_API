@extends('admin.layouts.admin')


@section('content')

  <!-- about section -->

  <section class="about_section layout_padding-bottom">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="img-box">
            <img src="{{ $estate->photo ? asset('storage/'. $estate->photo) : asset('assets/images/no-image.jpg') }}" alt="" class="img-fluid">
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
              <p><b>Status:</b> @if($estate->visible) <span class="text-success">Опубликован</span> @else <span class="text-danger">В архиве</span> @endif</p>
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
            </div>

          </div>
    <div class="btn-group mt-5">
      <a href="{{ route('admin.estates.index') }}" class="btn btn-primary mr-2">List estates</a>

      <form action="{{ route('admin.estates.update', ['id' => $estate->id]) }}" method="post">
        @csrf
        @method('PUT')

        <select class="form-select" aria-label="Default select example" name="visible" id="visible">
          <option value="0" @if($estate->visible == 0) selected @endif >Archive</option>
          <option value="1" @if($estate->visible == 1) selected @endif >Published</option>
        </select>

        <button class="btn btn-success mr-2" type="submit">Edit visible</button>
      </form>
       
      <form action="{{ route('admin.estates.destroy', ['id' => $estate->id]) }}" method="post">
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