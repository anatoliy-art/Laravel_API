@extends('admin.layouts.admin')


@section('content')

  <!-- about section -->

<h1>Create window</h1>

<form action="{{ route('windows.store') }}" method="post" enctype="multipart/form-data">

  @csrf

  <div class="mb-3">
    <label for="title" class="form-label">Title</label>
    <input type="text" class="form-control" id="title" name="title" aria-describedby="title" value="{{ old('title') }}">    
  </div>

  <div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">Description</label>
    <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="5">{{ old('description') }}</textarea>
  </div>

  <div class="mb-3 mr-3">
  <label for="material" class="form-label">Материал</label><br>
  <select class="form-select" aria-label="Default select example" name="material">

    <option value="Пластик">Пластик</option>
    <option value="Дерево">Дерево</option>
    <option value="Метал">Метал</option>

  </select>
  </div>

  <div class="mb-3 mr-3">
  <label for="hutters" class="form-label">Кол-во створок</label><br>
  <select class="form-select" aria-label="Default select example" name="hutters">

    <option value="0">Нет створок</option>
    <option value="1">1 створка</option>
    <option value="2">2 створки</option>
    <option value="3">3 створки</option>
    <option value="4">4 створки</option>
    <option value="5">5 створок</option>

  </select>
  </div>

  <div class="mb-3">
    <label for="formFile" class="form-label">Photo</label>
    <input class="form-control" type="file" id="formFile" name="photo" >
  </div>

  <button type="submit" class="btn btn-success">Create brand</button>
</form>
  

  <!-- end about section -->


@endsection