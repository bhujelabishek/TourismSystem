@extends('layouts.app')

@section('content')
<body>
  <div class="container py-5 px-1 d-flex justify-content-center align-items-center bg-body-tertiary">
    <div class="w-100" style="max-width: 800px;">
      <div class="bg-white border rounded-4 p-5 shadow-sm">
        <!-- Green Header -->
        <h1 class="text-center mb-4 text-success fw-bold" style="font-size: 2rem;">{{ __('Register') }}</h1>

        <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data" class="needs-validation" novalidate>
          @csrf

          <!-- Name -->
          <div class="mb-3">
            <label for="name" class="form-label fs-6 fw-bold" style="font-size:25px; color:green;">Name</label>
            <div class="input-group">
              <span class="input-group-text bg-success text-white"><i class="bi bi-person-fill"></i></span>
              <input id="name" name="name" type="text"
                     value="{{ old('name') }}"
                     class="form-control border-success @error('name') is-invalid @enderror"
                     placeholder="Enter your name" required>
            </div>
            @error('name')<div class="text-danger">{{ $message }}</div>@enderror
          </div>

          <!-- Email -->
          <div class="mb-3">
            <label for="email" class="form-label fs-6 fw-bold" style="font-size:25px; color:green;">Email</label>
            <div class="input-group">
              <span class="input-group-text bg-success text-white"><i class="bi bi-envelope-fill"></i></span>
              <input id="email" name="email" type="email"
                     value="{{ old('email') }}"
                     class="form-control border-success @error('email') is-invalid @enderror"
                     placeholder="Enter your email" required>
            </div>
            @error('email')<div class="text-danger">{{ $message }}</div>@enderror
          </div>

          <!-- Password -->
          <div class="mb-3">
            <label for="password" class="form-label fs-6 fw-bold" style="font-size:25px; color:green;">Password</label>
            <div class="input-group">
              <span class="input-group-text bg-success text-white"><i class="bi bi-lock-fill"></i></span>
              <input id="password" name="password" type="password"
                     class="form-control border-success @error('password') is-invalid @enderror"
                     placeholder="Enter password" required>
            </div>
            @error('password')<div class="text-danger">{{ $message }}</div>@enderror
          </div>

          <!-- Confirm Password -->
          <div class="mb-3">
            <label for="password_confirmation" class="form-label fs-6 fw-bold" style="font-size:25px; color:green;">Confirm Password</label>
            <div class="input-group">
              <span class="input-group-text bg-success text-white"><i class="bi bi-lock-fill"></i></span>
              <input id="password_confirmation" name="password_confirmation" type="password"
                     class="form-control border-success"
                     placeholder="Re-enter password" required>
            </div>
          </div>

          <!-- Phone -->
          <div class="mb-3">
            <label for="phone" class="form-label fs-6 fw-bold" style="font-size:25px; color:green;">Phone</label>
            <div class="input-group">
              <span class="input-group-text bg-success text-white"><i class="bi bi-telephone-fill"></i></span>
              <input id="phone" name="phone" type="tel"
                     value="{{ old('phone') }}"
                     class="form-control border-success @error('phone') is-invalid @enderror"
                     placeholder="Enter phone number">
            </div>
            @error('phone')<div class="text-danger">{{ $message }}</div>@enderror
          </div>

          <!-- Profile Image -->
          <div class="mb-4">
            <label for="image" class="form-label fs-6 fw-bold" style="font-size:25px; color:green;">Profile Image</label>
            <input id="image" name="image" type="file"
                   class="form-control border-success @error('image') is-invalid @enderror"
                   accept="image/*">
            @error('image')<div class="text-danger">{{ $message }}</div>@enderror
          </div>

          <!-- Submit Button -->
          <div class="text-center">
            <button type="submit" class="btn btn-success px-5 py-2 rounded-pill fs-6">
              {{ __('Register') }}
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Bootstrap Icons CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
</body>
@endsection
