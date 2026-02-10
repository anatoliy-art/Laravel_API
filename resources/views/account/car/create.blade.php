@extends('layouts.account')


@section('content')

  <!-- about section -->

<h1>Create car</h1>

<form action="{{ route('cars.store') }}" method="post" enctype="multipart/form-data">

  @csrf

  <div class="mb-3">
    <label for="title" class="form-label">Title</label>
    <input type="text" class="form-control" id="title" name="title" aria-describedby="title" value="{{ old('title') }}">    
  </div>

  <div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">Description</label>
    <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="5">{{ old('description') }}</textarea>
  </div>

  <div class="option-wrap d-flex justify-content-between">
    <div class="mb-3">
      <label for="year" class="form-label">Year</label>
      <input type="text" class="form-control" id="year" name="year" aria-describedby="year" value="{{ old('year') }}">    
    </div>

    <div class="mb-3">
      <label for="engine" class="form-label">Engine</label>
      <input type="text" class="form-control" id="engine" name="engine" aria-describedby="engine" value="{{ old('engine') }}">    
    </div>

    <div class="mb-3">
      <label for="mileage" class="form-label">Mileage</label>
      <input type="text" class="form-control" id="mileage" name="mileage" aria-describedby="mileage" value="{{ old('mileage') }}">    
    </div>

    <div class="mb-3">
      <label for="price" class="form-label">Price</label>
      <input type="text" class="form-control" id="price" name="price" aria-describedby="price" value="{{ old('price') }}">    
    </div>

    <div class="mb-3">
      <label for="phone" class="form-label">Phone</label>
      <input type="text" class="form-control" id="phone" name="phone" aria-describedby="phone" value="{{ old('phone') }}">    
    </div>
  </div>

  <div class="mb-3">
    <label for="formFile" class="form-label">Photo</label>
    <input class="form-control" type="file" id="formFile" name="photo" >
  </div>

  <div class="mb-3">
    <label for="formGallery" class="form-label">Gallery</label>
    <input class="form-control" type="file" id="formGallery" name="gallery[]" multiple='true' >
  </div>

<h4>Options</h4>
<div class="form-group d-flex">
	
  <div class="mb-3 mr-3">
  <label for="brand" class="form-label">Brand</label>
  <select class="form-select" aria-label="Default select example" name="brand">
    @foreach ($brands as $brand)
    <option value="{{ $brand->id }}">{{ $brand->title }}</option>
    @endforeach
  </select>
  </div>

</div>

  <button type="submit" class="btn btn-success">Create car</button>
</form>
  

  <!-- end about section -->


@endsection