@extends('layouts.main')


@section('content')

  <!-- about section -->

  <section class="about_section layout_padding-bottom">
    <div class="square-box">
      <img src="images/square.png" alt="">
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="img-box">
            <img src="{{ asset('assets/images/about-img.jpg') }}" alt="">
          </div>
        </div>
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                About Our Apartment
              </h2>
            </div>
            <p>
              There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration
              in
              some form, by injected humour, or randomised words
            </p>
            <a href="{{ route('about') }}">
              Read More
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->

  <!-- sale section -->

  <section class="sale_section layout_padding-bottom">
    <div class="container-fluid">
      <div class="heading_container">
        <h2>
          House For Sale
        </h2>
        <p>
          There are many variations of passages of Lorem Ipsum available, but the
        </p>
      </div>
      <div class="sale_container">
        @foreach($hous_sale as $hous)
        <div class="box">
          <div class="img-box">
            <img src="{{ $hous->photo ? asset('storage/'. $hous->photo) : asset('assets/images/no-image.jpg') }}" alt="">
          </div>
          <div class="detail-box">
            <h6>
              <a href="{{ route('estate', ['slug' => $hous->slug]) }}">{{ $hous->title }}</a>
            </h6>
            <div class="detail-box-info">
              <span>
                <img src="{{ asset('assets/images/house.svg') }}" alt="Иконка" width="20" height="20"> {{ $hous->category->title }}                
              </span>
              <span>
                <img src="{{ asset('assets/images/bar-chart.svg') }}" alt="Иконка" width="20" height="20"> {{ $hous->floor->title }}                
              </span>
              <span>
                <img src="{{ asset('assets/images/back.svg') }}" alt="Иконка" width="20" height="20"> {{ $hous->material->title }}                
              </span>
              <span>
                <img src="{{ asset('assets/images/border-all.svg') }}" alt="Иконка" width="20" height="20"> {{ $hous->room->title }}                
              </span>              
              <span>
                <img src="{{ asset('assets/images/people.svg') }}" alt="Иконка" width="20" height="20"> {{ $hous->user->name }}                
              </span>                                         
            </div>
            <p>
              {{ Illuminate\Support\Str::words($hous->description, 15,  '...') }}
            </p>
            <p class="d-flex justify-content-between">
              <span><img src="{{ asset('assets/images/currency-dollar.svg') }}" alt="Иконка" width="20" height="20"> <b>{{ $hous->price }}</b></span> 
              <span><img src="{{ asset('assets/images/telephone.svg') }}" alt="Иконка" width="20" height="20"> <b>{{ $hous->phone }}</b></span>
            </p>
          </div>
        </div>
        @endforeach
      </div>
      <div class="btn-box">
        <a href="{{ route('house') }}">
          Find More
        </a>
      </div>
    </div>
  </section>

  <!-- end sale section -->

  <!-- price section -->

  <section class="price_section layout_padding-bottom">
    <div class="container">
      <div class="heading_container">
        <h2>
          Our Pricing
        </h2>
        <p>
          There are many variations of passages of Lorem Ipsum available, but the
        </p>
      </div>
      <div class="price_container">
        <div class="box">
          <div class="detail-box">
            <div class="heading-box">
              <h4>
                01
              </h4>
              <h6>
                Basic
              </h6>
            </div>
            <div class="text-box">
              <h2>
                $1000.00
              </h2>
              <ul>
                <li>
                  variations of
                </li>
                <li>
                  passages of Lorem
                </li>
                <li>
                  Ipsum available,
                </li>
                <li>
                  but the majority
                </li>
                <li>
                  have suffered
                </li>
                <li>
                  alteration in
                </li>
              </ul>
            </div>
          </div>
          <div class="btn-box">
            <a href="">
              Buy Now
            </a>
          </div>
        </div>
        <div class="box">
          <div class="detail-box">
            <div class="heading-box">
              <h4>
                02
              </h4>
              <h6>
                Standard
              </h6>
            </div>
            <div class="text-box">
              <h2>
                $2000.00
              </h2>
              <ul>
                <li>
                  variations of
                </li>
                <li>
                  passages of Lorem
                </li>
                <li>
                  Ipsum available,
                </li>
                <li>
                  but the majority
                </li>
                <li>
                  have suffered
                </li>
                <li>
                  alteration in
                </li>
              </ul>
            </div>
          </div>
          <div class="btn-box">
            <a href="">
              Buy Now
            </a>
          </div>
        </div>
        <div class="box">
          <div class="detail-box">
            <div class="heading-box">
              <h4>
                03
              </h4>
              <h6>
                Premium
              </h6>
            </div>
            <div class="text-box">
              <h2>
                $3000.00
              </h2>
              <ul>
                <li>
                  variations of
                </li>
                <li>
                  passages of Lorem
                </li>
                <li>
                  Ipsum available,
                </li>
                <li>
                  but the majority
                </li>
                <li>
                  have suffered
                </li>
                <li>
                  alteration in
                </li>
              </ul>
            </div>
          </div>
          <div class="btn-box">
            <a href="">
              Buy Now
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end price section -->

  <!-- deal section -->

  <section class="deal_section layout_padding-bottom">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                Very Good Deal For House
              </h2>
            </div>
            <p>
              There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration
              in
              some form, by injected humour, or randomised words which don't look even slightly believable.
            </p>
            <a href="">
              Get A Quote
            </a>
          </div>
        </div>
        <div class="col-md-6">
          <div class="img-box">
            <div class="box b1">
              <img src="images/d-1.jpg" alt="">
            </div>
            <div class="box b1">
              <img src="images/d-2.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end deal section -->


  <!-- us section -->
  <section class="us_section layout_padding2">

    <div class="container">
      <div class="heading_container">
        <h2>
          Why Choose Us
        </h2>
      </div>
      <div class="row">
        <div class="col-md-3 col-sm-6">
          <div class="box">
            <div class="img-box">
              <img src="images/u-1.png" alt="">
            </div>
            <div class="detail-box">
              <h3 class="price">
                1000+
              </h3>
              <h5>
                Years of House
              </h5>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="box">
            <div class="img-box">
              <img src="images/u-2.png" alt="">
            </div>
            <div class="detail-box">
              <h3>
                20000+
              </h3>
              <h5>
                Projects Delivered
              </h5>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="box">
            <div class="img-box">
              <img src="images/u-3.png" alt="">
            </div>
            <div class="detail-box">
              <h3>
                10000+
              </h3>
              <h5>
                Satisfied Customers
              </h5>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="box">
            <div class="img-box">
              <img src="images/u-4.png" alt="">
            </div>
            <div class="detail-box">
              <h3>
                1500+
              </h3>
              <h5>
                Cheap Rates
              </h5>
            </div>
          </div>
        </div>
      </div>
      <div class="btn-box">
        <a href="">
          Get A Quote
        </a>
      </div>
    </div>
  </section>

  <!-- end us section -->

  <!-- client secction -->

  <section class="client_section layout_padding">
    <div class="container-fluid">
      <div class="heading_container">
        <h2>
          What is Says Our Customer
        </h2>
      </div>
      <div class="client_container">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="box">
                <div class="img-box">
                  <img src="images/client.jpg" alt="">
                </div>
                <div class="detail-box">
                  <h5>
                    <span>Majority</span>
                    <hr>
                  </h5>
                  <p>
                    There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                    alteration
                    in some form, by injected humour, or randomised words which don't look even slightly believable.
                  </p>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="box">
                <div class="img-box">
                  <img src="images/client.jpg" alt="">
                </div>
                <div class="detail-box">
                  <h5>
                    <span>Majority</span>
                    <hr>
                  </h5>
                  <p>
                    There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                    alteration
                    in some form, by injected humour, or randomised words which don't look even slightly believable.
                  </p>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="box">
                <div class="img-box">
                  <img src="images/client.jpg" alt="">
                </div>
                <div class="detail-box">
                  <h5>
                    <span>Majority</span>
                    <hr>
                  </h5>
                  <p>
                    There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                    alteration
                    in some form, by injected humour, or randomised words which don't look even slightly believable.
                  </p>
                </div>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="sr-only">Next</span>
          </a>
        </div>

      </div>
    </div>
  </section>

  <!-- end client section -->

  <!-- contact section -->

  <section class="contact_section ">
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
            <form id="mailForm" action="{{ route('send') }}" method="post">
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
<script>
    var yourRoute = "{{ route('send') }}";
</script>

@endsection