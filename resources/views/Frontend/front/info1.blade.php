@extends('layouts.app')

@section('content')
@include('layouts.navbar')
<div class="container">
    <!-- Page Title -->
    <h2 class="text-success mt-4" style="font-size: 35px; font-weight: bold;">Mt. Everest</h2>

    <!-- Map Section -->
    <div class="card my-3">
        <div class="card-header bg-success text-white" style="font-size: 25px;">Map</div>
        <div class="card-body text-center">
            <img src="{{ asset('images/everest-map.jpeg') }}" class="img-fluid" alt="Everest Map">
        </div>
    </div>

    <!-- Itinerary Section -->
    <div class="card my-3">
        <div class="card-header bg-warning" style="font-size: 25px;">Itinerary</div>
        <div class="card-body">
            <ul class="list-unstyled">
                @for ($i = 1; $i <= 5; $i++)
                    <li class="border p-3 mb-2">
                        <h5><i class="fas fa-play text-danger"></i> Day {{ $i }}: Arrival in Kathmandu</h5>
                        <p>You could be already in Kathmandu, or you may be arriving on this very day. The itinerary includes...</p>
                    </li>
                @endfor
            </ul>
        </div>
    </div>

    <!-- Description Section -->
    <div class="container mt-4">
    <h3 class="text-success">Descriptions</h3>
    <div id="everest-description">
        <p class="text-justify">
            Mount Everest, the highest peak in the world at 8,848.86 meters (29,031.7 feet), is located in the Himalayas,
            straddling the border between Nepal and Tibet (China). It is known as <strong>Sagarmatha</strong> in Nepal and
            <strong>Chomolungma</strong> in Tibet, both names reflecting its cultural and spiritual significance in the region.
            Everest has long fascinated explorers, climbers, and researchers, drawing thousands of adventurers each year who
            seek to conquer its formidable heights.
        </p>

        <p class="text-justify">
            Geologically, Everest was formed around 50-60 million years ago due to the collision of the Indian and Eurasian
            tectonic plates, which continues to push the mountain higher by a few millimeters each year. It consists primarily
            of sedimentary and metamorphic rock, with layers of limestone and granite visible at different elevations. The
            mountain's extreme conditions, including high-altitude winds and sub-zero temperatures, make it one of the most
            challenging environments on Earth.
        </p>

        <p class="text-justify" id="more-text" style="display: none;">
            The first official height measurement of Everest was conducted in 1856 by the Great Trigonometrical Survey of India,
            which estimated it at 8,840 meters. Over time, various surveys refined this measurement, and in 2020, Nepal and China
            jointly declared the official height as 8,848.86 meters. Advances in satellite and GPS technology have helped improve
            accuracy in measuring Everest's elevation despite the shifting geological activity.
        </p>
        <button id="toggle-button" class="btn btn-link" style="list-style: none; float:right;">More</button>
    </div>
</div>
<script>
    document.getElementById('toggle-button').addEventListener('click', function() {
        var moreText = document.getElementById('more-text');
        var buttonText = document.getElementById('toggle-button');

        if (moreText.style.display === 'none') {
            moreText.style.display = 'block';
            buttonText.textContent = 'Less';
        } else {
            moreText.style.display = 'none';
            buttonText.textContent = 'More';
        }
    });
</script>
</div>
@include('layouts.footer')
@endsection
