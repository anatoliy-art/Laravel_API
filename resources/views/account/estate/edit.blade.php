@extends('layouts.account')


@section('content')

  <!-- about section -->


<h1>Edit house</h1>

<form action="{{ route('estates.update', ['estate' => $estate->id]) }}" method="post" enctype="multipart/form-data">

  @csrf
  @method('PUT')

  <div class="mb-3">
    <label for="title" class="form-label">Title</label>
    <input type="text" class="form-control" id="title" name="title" aria-describedby="title" value="{{ $estate->title }}">    
  </div>

  <div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">Description</label>
    <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="10">{{ $estate->description }}</textarea>
  </div>

  <div class="mb-3">
    <label for="price" class="form-label">Price</label>
    <input type="text" class="form-control" id="price" name="price" aria-describedby="price" value="{{ $estate->price }}">    
  </div>

  <div class="mb-3">
    <label for="phone" class="form-label">Phone</label>
    <input type="text" class="form-control" id="phone" name="phone" aria-describedby="phone" value="{{ $estate->phone }}">    
  </div>

  <div class="mb-3">
    <label for="formFile" class="form-label">Photo</label>
    <input class="form-control" type="file" id="formFile" name="photo" >
  </div>
  <img src="{{ $estate->photo ? asset('storage/'. $estate->photo) : asset('assets/images/no-image.jpg') }}" alt="" width="100"><br><br>

  <div class="mb-3">
    <label for="formGallery" class="form-label">Gallery</label>
    <input class="form-control" type="file" id="formGallery" name="gallery[]" multiple='true' >
  </div>
  @if($estate->gallery != null)
    @foreach($estate->gallery as $value)
      <img src="{{ asset('storage/'. $value) }}" alt="" width="100">
    @endforeach
  @else 
    <img src="{{ asset('assets/images/no-image.jpg') }}" alt="" width="100">
  @endif

<h4>Options</h4>
<div class="form-group d-flex">
  
  <div class="mb-3 mr-3">
  <label for="floor" class="form-label">Floor</label>
  <select class="form-select" aria-label="Default select example" name="floor">
    @foreach ($floors as $floor)
    <option value="{{ $floor->id }}" @if($estate->floor_id === $floor->id) selected @endif>{{ $floor->title }}</option>
    @endforeach
  </select>
  </div>

   <div class="mb-3 mr-3">
  <label for="room" class="form-label">Room</label>
  <select class="form-select" aria-label="Default select example" name="room" id="room">
    @foreach ($rooms as $room)
    <option value="{{ $room->id }}" @if($estate->room_id === $room->id) selected @endif >{{ $room->title }}</option>
    @endforeach
  </select>
  </div>

   <div class="mb-3 mr-3">
  <label for="category" class="form-label">Categories</label>
  <select class="form-select" aria-label="Default select example" name="categories" id="category">
    @foreach ($categories as $category)
    <option value="{{ $category->id }}" @if($estate->category_id === $category->id) selected @endif >{{ $category->title }}</option>
    @endforeach
  </select>
  </div>

   <div class="mb-3 mr-3">
  <label for="material" class="form-label">Material</label>
  <select class="form-select" aria-label="Default select example" name="material" id="material">
    @foreach ($materials as $material)
    <option value="{{ $material->id }}" @if($estate->material_id === $material->id) selected @endif>{{ $material->title }}</option>
    @endforeach
  </select>
  </div>

</div>

  <button type="submit" class="btn btn-success">Create product</button>
</form>


  <!-- end about section -->


@endsection