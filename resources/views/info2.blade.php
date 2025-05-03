@extends('layouts.app')

@section('content')
@include('layouts.navbar')
<div class="container">
    <!-- Page Title -->
    <h2 class="text-success mt-4" style="font-size: 35px; font-weight: bold;">K2(Mount Godwin-Austen)</h2>

    <!-- Map Section -->
    <div class="card my-3">
        <div class="card-header bg-success text-white" style="font-size: 25px;">Map</div>
        <div class="card-body text-center">
            <img src="{{ asset('images/k2Itenary.jpg') }}" class="img-fluid" alt="Everest Map">
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
                K2, the second-highest mountain in the world, stands at 8,611 meters (28,251 feet) and is located on the border between Pakistan and China in the Karakoram Range. Unlike Mount Everest, K2 is known for its extreme difficulty and danger, earning it the nickname <strong>"Savage Mountain"</strong>. It is considered a more technically challenging climb despite being slightly lower in height.
            </p>

            <p class="text-justify">
                K2 was formed around 60 million years ago due to the collision of the Indian and Eurasian tectonic plates, similar to the formation of Everest. The mountain consists of a complex mix of igneous, sedimentary, and metamorphic rock, and its steep faces and jagged terrain make it notorious for its technical difficulty. The Karakoram Range is one of the most rugged and remote mountain ranges in the world, with few accessible routes.
            </p>

            <p class="text-justify" id="more-text" style="display: none;">
                The first successful ascent of K2 was made on July 31, 1954, by Italian climbers Achille Compagnoni and Lino Lacedelli. K2 has earned its reputation as one of the most difficult mountains to climb, with steep rock walls, unpredictable weather, and frequent avalanches and rockfalls. The high fatality rate among climbers on K2, often higher than on Everest, speaks to the risks involved in summiting the mountain.
            </p>

            <p class="text-justify" id="more-text" style="display: none;">
                K2 remains a sought-after peak for experienced mountaineers, despite its technical difficulty and harsh conditions. The Cesen Route and Abruzzi Spur are the two main climbing routes to the summit, both requiring advanced rock climbing and ice climbing skills. However, K2’s extreme weather, steep rock faces, and unpredictable avalanches make it a deadly and dangerous challenge for climbers.
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
