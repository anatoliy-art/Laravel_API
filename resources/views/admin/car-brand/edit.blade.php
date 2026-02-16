@extends('admin.layouts.admin')


@section('content')

  <!-- about section -->

<h1>Create house</h1>

<form action="{{ route('carBrands.update', ['carBrand' => $carBrand->id]) }}" method="post" enctype="multipart/form-data">

  @csrf
  @method('PUT')

  <div class="mb-3">
    <label for="title" class="form-label">Title</label>
    <input type="text" class="form-control" id="title" name="title" aria-describedby="title" value="{{ $carBrand->title }}">    
  </div>

  <div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">Description</label>
    <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="5">{{ $carBrand->title }}</textarea>
  </div>

  <div class="mb-3">
    <label for="formFile" class="form-label">Photo</label>
    <input class="form-control" type="file" id="formFile" name="photo" >
  </div>
  <img src="{{ $carBrand->photo ? asset('storage/'. $carBrand->photo) : asset('assets/images/no-image.jpg') }}" alt="" width="100"><br><br>

  <button type="submit" class="btn btn-success">Update brand</button>
</form>
  

  <!-- end about section -->


@endsection