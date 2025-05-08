@extends('layouts.app')

@section('content')
  @include('layouts.navbar')

  <!-- Hero Section with Carousel (as it was) -->
  <div id="carouselExample" class="carousel slide mt-3" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="Images/kanchenjunga.jpg"
             class="d-block w-100 img-fluid"
             style="height: 500px; object-fit: cover;"
             alt="Himalayas">
      </div>
      <div class="carousel-item">
        <img src="Images/slide1.jpg"
             class="d-block w-100 img-fluid"
             style="height: 500px; object-fit: cover;"
             alt="Himalayas">
      </div>
      <div class="carousel-item">
        <img src="Images/slide2.jpg"
             class="d-block w-100 img-fluid"
             style="height: 500px; object-fit: cover;"
             alt="Himalayas">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
      <span class="carousel-control-next-icon"></span>
    </button>
  </div>

  <!-- Intro Text -->
  <div class="container text-center my-5">
    <span class="badge bg-success mb-2 px-3 py-2" style="font-size: 20px;">
      Itinerary | Plans | Explore Mountains
    </span>
    <h2 class="fw-bold text-dark">Explore Amazing Himalayans with Us</h2>
    <div class="mt-4">
      <input type="text"
             class="form-control w-100 p-3 mx-auto rounded-pill shadow-sm"
             style="font-size: 20px;"
             placeholder="🔎 Search for destination">
    </div>
  </div>

  <!-- Dynamic Destination Cards -->
  <div class="container pb-5">
    <div class="row g-4">
      @foreach($mountains as $mountain)
        <div class="col-md-4">
          <div class="card shadow-sm border-0 h-100">
            <img
              src="{{ asset('images/Mountains/'.$mountain->image) }}"
              class="card-img-top"
              style="height: 220px; object-fit: cover;"
              alt="{{ $mountain->name }}"
            >
            <div class="card-body text-center">
              <h5 class="text-success fw-bold">{{ $mountain->name }}</h5>
              <p class="text-muted mb-2">{{ Str::limit($mountain->description, 10) }}</p>
              <p class="text-muted">Price: ${{ $mountain->package_price }}</p>
              <a href="{{ route('mountaines.show', $mountain->id) }}" class="btn btn-success">
                View Details
              </a>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>

  @include('layouts.footer')
@endsection
