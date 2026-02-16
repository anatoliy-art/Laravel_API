@extends('admin.layouts.admin')


@section('content')

  <!-- about section -->

<h1>Create window</h1>

<form action="{{ route('windows.update', ['window' => $window->id]) }}" method="post" enctype="multipart/form-data">

  @csrf
  @method('PUT')

  <div class="mb-3">
    <label for="title" class="form-label">Title</label>
    <input type="text" class="form-control" id="title" name="title" aria-describedby="title" value="{{ $window->title }}">    
  </div>

  <div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">Description</label>
    <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="5">{{ $window->description }}</textarea>
  </div>

  <div class="mb-3 mr-3">
  <label for="material" class="form-label">Материал</label><br>
  <select class="form-select" aria-label="Default select example" name="material">

    <option value="Пластик" @if($window->material == 'Пластик') selected @endif>Пластик</option>
    <option value="Дерево" @if($window->material == 'Дерево') selected @endif>Дерево</option>
    <option value="Метал" @if($window->material == 'Метал') selected @endif>Метал</option>

  </select>
  </div>

  <div class="mb-3 mr-3">
  <label for="hutters" class="form-label">Кол-во створок</label><br>
  <select class="form-select" aria-label="Default select example" name="hutters">

    <option value="0" @if($window->hutters == '0') selected @endif>Нет створок</option>
    <option value="1" @if($window->hutters == '1') selected @endif>1 створка</option>
    <option value="2" @if($window->hutters == '2') selected @endif>2 створки</option>
    <option value="3" @if($window->hutters == '3') selected @endif>3 створки</option>
    <option value="4" @if($window->hutters == '4') selected @endif>4 створки</option>
    <option value="5" @if($window->hutters == '5') selected @endif>5 створок</option>

  </select>
  </div>

  <div class="mb-3">
    <label for="formFile" class="form-label">Photo</label>
    <input class="form-control" type="file" id="formFile" name="photo" >
  </div>
  <img src="{{ $window->photo ? asset('storage/'. $window->photo) : asset('assets/images/no-image.jpg') }}" alt="" width="100"><br><br>

  <button type="submit" class="btn btn-success">Update window</button>
</form>

<a href="{{ route('windows.show', ['window' => $window->id]) }}" class="btn btn-primary mt-5">Назад</a>  

  <!-- end about section -->


@endsection