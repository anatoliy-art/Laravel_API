@extends('layouts.page')


@section('content')

  <!-- about section -->

  <section class="about_section layout_padding-bottom">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="img-box">
            <img src="{{ $window->photo ? asset('storage/' . $window->photo) : asset('assets/images/no-image.jpg') }}" alt="">
          </div>
        </div>
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                {{ $window->title }}
              </h2>
            </div>
            <div class="window-info">
              {{ $window->description }}
            <div class="detail-box-info mt-3">
              <span>
                <img src="{{ asset('assets/images/border-all.svg') }}" alt="Иконка" width="20" height="20"> {{ $window->material }}              
              </span>
              <span>
                <img src="{{ asset('assets/images/9-circle.svg') }}" alt="Иконка" width="20" height="20"> {{ $window->hutters }} створка(и)              
              </span>                                         
            </div>
            </div>

          </div>

          <hr>

<h3>Create order window</h3>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if (session('success'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    @endif

<form action="{{ route('orderCreate.window.index', ['window_id' => $window->id]) }}" method="post">

  @csrf

<div class="mb-3 mr-3">
  <label for="title" class="form-label">Title</label>
  <input type="text" class="form-control" id="title" name="title" aria-describedby="title" value="{{ $window->title }}">   
</div>

<div class="d-flex">
  <div class="mb-3 mr-3">
    <label for="width" class="form-label">Ширина(см)</label>
    <input type="text" class="form-control" id="width" name="width" aria-describedby="width" value="{{ old('width') }}">   
  </div>

  <div class="mb-3">    
    <label for="height" class="form-label">Высота(см)</label>    
    <input type="text" class="form-control" id="height" name="height" aria-describedby="height" value="{{ old('height') }}">    
  </div>
</div>

<div class="d-flex">
  <div class="mb-3 mr-3">
  <label for="material" class="form-label">Материал</label><br>
  <select class="form-select form-control" aria-label="Default select example" name="material">

    <option value="Пластик">Пластик</option>
    <option value="Дерево">Дерево</option>
    <option value="Метал">Метал</option>

  </select>
  </div>

  <div class="mb-3 mr-3">
  <label for="hutters" class="form-label">Кол-во створок</label><br>
  <select class="form-select form-control" aria-label="Default select example" name="hutters">

    <option value="0">Нет створок</option>
    <option value="1">1 створка</option>
    <option value="2">2 створки</option>
    <option value="3">3 створки</option>
    <option value="4">4 створки</option>
    <option value="5">5 створок</option>

  </select>
  </div>
</div>

<div class="d-flex">
  <div class="mb-3 mr-3">
    <label for="phone" class="form-label">Телефон</label>
    <input type="text" class="form-control" id="phone" name="phone" aria-describedby="phone" value="{{ old('phone') }}">   
  </div>

  <div class="mb-3">    
    <label for="address" class="form-label">Адрес</label>    
    <input type="text" class="form-control" id="address" name="address" aria-describedby="address" value="{{ old('address') }}">    
  </div>
</div>

  <button type="submit" class="btn btn-success">Create</button>
</form>

          <a href="{{ route('site.window.index') }}" class="btn btn-primary mt-5">Назад</a>
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->


@endsection
