<div>
<nav class="navbar navbar-expand-lg navbar-dark bg-success">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{ route('home') }}">
        <img src="Images/Logo.png" alt="Travel Guide Logo" style="height: 40px;"> </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav me-auto" style="font-size: 22px;">
          <li class="nav-item">
            <a class="nav-link text-white" href="{{ route('home') }}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="aboutus.html">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="contactus.html">Contact Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="travelinfo.html">Travel Info</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-white" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              Destination
            </a>
            <ul class="dropdown-menu" style="font-size: 19px;" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item text-dark" href="mt.html">Mount Everest</a></li>
              <li><a class="dropdown-item text-dark" href="k2.html">K2</a></li>
              <li><a class="dropdown-item text-dark" href="kan.html">Kangchenjunga</a></li>
            </ul>
          </li>
        </ul>

        <!-- <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="btn btn-outline-success mx-lg-3 text-white" href="signin.html">Sign in</a>
          </li>
          <li class="nav-item">
            <a class="btn btn-outline-success text-white" href="signup.html">Sign up</a>
          </li>
        </ul> -->
      </div>
    </div>
  </nav>
</div>
