@extends('layouts.page')


@section('content')

  <!-- contact section -->

  <section class="contact_section layout_padding-top">
    <div class="container">
      <div class="heading_container">
        <h2>
          Get In Touch
        </h2>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6 px-0">
          <div class="map_container">
            <div class="map-responsive">
              <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&q=Eiffel+Tower+Paris+France" width="600" height="300" frameborder="0" style="border:0; width: 100%; height:100%" allowfullscreen></iframe>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-5 ">
          <div class="form_container">

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
      <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
        {{ session('success') }}
      </div>
    @endif
            
            <form action="{{ route('contact.send') }}" method="post">
              @csrf

              <div>
                <input type="text" name="name" placeholder="Name" value="{{ old('name') }}" />
              </div>
              <div>
                <input type="email" name="email" placeholder="Email" value="{{ old('email') }}" />
              </div>
              <div>
                <input type="text" name="phone" placeholder="Phone Number" value="{{ old('phone') }}" />
              </div>
              <div>
                <input type="text" name="content" class="message-box" placeholder="Message" value="{{ old('content') }}" />
              </div>
              <div class="d-flex ">
                <button type="submit">
                  Send
                </button>
              </div>
            </form>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- end contact section -->


@endsection