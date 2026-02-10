@extends('admin.layouts.admin')


@section('content')

  <!-- about section -->

<h1>Create house</h1>

<form action="{{ route('carBrands.store') }}" method="post" enctype="multipart/form-data">

  @csrf

  <div class="mb-3">
    <label for="title" class="form-label">Title</label>
    <input type="text" class="form-control" id="title" name="title" aria-describedby="title" value="{{ old('title') }}">    
  </div>

  <div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">Description</label>
    <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="5">{{ old('description') }}</textarea>
  </div>

  <div class="mb-3">
    <label for="formFile" class="form-label">Photo</label>
    <input class="form-control" type="file" id="formFile" name="photo" >
  </div>

  <button type="submit" class="btn btn-success">Create brand</button>
</form>
  

  <!-- end about section -->


@endsection