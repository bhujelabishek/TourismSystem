@extends('layouts.app')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

@include('layouts.navbar')

<!-- Admin Shortcut -->
<div class="container mt-3 text-end">
    <a href="{{ route('admin.admin')}}" class="btn btn-outline-secondary">Go to Admin Panel</a>
</div>

<!-- Hero Section with Carousel -->
<div id="carouselExample" class="carousel slide mt-3" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="Images/kanchenjunga.jpg" class="d-block w-100 img-fluid" style="height: 500px; object-fit: cover;" alt="Himalayas">
        </div>
        <div class="carousel-item">
            <img src="Images/slide1.jpg" class="d-block w-100 img-fluid" style="height: 500px; object-fit: cover;" alt="Himalayas">
        </div>
        <div class="carousel-item">
            <img src="Images/slide2.jpg" class="d-block w-100 img-fluid" style="height: 500px; object-fit: cover;" alt="Himalayas">
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
    <span class="badge bg-success mb-2 px-3 py-2" style="font-size: 20px;" >Itinerary | Plans | Explore Mountains</span>
    <h2 class="fw-bold text-dark">Explore Amazing Himalayans with Us</h2>

    <!-- Search Box (Static for now) -->
    <div class="mt-4">
        <input type="text" class="form-control w-100 h-100 p-3 mx-auto rounded-pill shadow-sm" style="font-size: 20px;" placeholder="🔎 Search for destination">
    </div>
</div>

<!-- Destination Cards -->
<div class="container pb-5">
    <div class="row g-4">
        <!-- Mount Everest -->
        <div class="col-md-4">
            <div class="card shadow-sm border-0 h-100">
                <img src="Images/Mount-Everest.webp" class="card-img-top" style="height: 220px; object-fit: cover;" alt="Mount Everest">
                <div class="card-body text-center">
                    <h5 class="text-success fw-bold">Mount Everest</h5>
                    <p class="text-muted mb-3">Duration: 14 Days</p>
                    <a href="{{ route('info1') }}" class="btn btn-success px-4">Information</a>
                </div>
            </div>
        </div>

        <!-- K2 -->
        <div class="col-md-4">
            <div class="card shadow-sm border-0 h-100">
                <img src="Images/k2.jpg" class="card-img-top" style="height: 220px; object-fit: cover;" alt="K2">
                <div class="card-body text-center">
                    <h5 class="text-success fw-bold">K2</h5>
                    <p class="text-muted mb-3">Duration: 18 Days</p>
                    <a href="{{ route('info2') }}" class="btn btn-success px-4">Information</a>
                </div>
            </div>
        </div>

        <!-- Kangchenjunga -->
        <div class="col-md-4">
            <div class="card shadow-sm border-0 h-100">
                <img src="Images/kanchenjunga.jpg" class="card-img-top" style="height: 220px; object-fit: cover;" alt="Kangchenjunga">
                <div class="card-body text-center">
                    <h5 class="text-success fw-bold">Kangchenjunga</h5>
                    <p class="text-muted mb-3">Duration: 20 Days</p>
                    <a href="{{ route('info3') }}" class="btn btn-success px-4">Information</a>
                </div>
            </div>
        </div>
    </div>
</div>

@include('layouts.footer')
@endsection
