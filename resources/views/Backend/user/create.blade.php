@extends('Backend.layouts.navigation')

@section('content1')

<body>
    <div class="container py-1 px-1 d-flex justify-content-center align-items-center bg-body-tertiary">
        <div class="w-100" style="max-width: 800px;">
            <div class="bg-white border rounded-4 p-5 shadow-sm">
                <h1 class="text-center mb-4 text-primary fw-bold">Create User</h1>

                <form action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
                    @csrf

                    <!-- Username -->
                    <div class="mb-3">
                        <label for="username" class="form-label fs-6 fw-bold" style="font-size: 25px; ">Username</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-person-fill"></i></span>
                            <input style="padding: 20px;" type="text" id="username" name="username" class="form-control" placeholder="Enter your username">
                            @error('username')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <!-- Email -->
                    <div class="mb-3">
                        <label for="email" class="form-label fs-6 fw-semibold" style="font-size: 25px; ">Email</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-envelope-fill"></i></span>
                            <input style="padding: 20px;" type="email" id="email" name="email" class="form-control" placeholder="example@email.com">
                            @error('email')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror

                        </div>
                    </div>

                    <!-- Password -->
                    <div class="mb-3">
                        <label for="password" class="form-label fs-6 fw-semibold" style="font-size: 25px; ">Password</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-lock-fill"></i></span>
                            <input style="padding: 20px;" type="password" id="password" name="password" class="form-control" placeholder="Enter password">
                            @error('password')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <!-- Confirm Password -->
                    <div class="mb-3">
                        <label for="confirm_password" class="form-label fs-6 fw-semibold" style="font-size: 25px; ">Confirm Password</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-lock-fill"></i></span>
                            <input style="padding: 20px;" type="password" id="confirm_password" name="password_confirmation" class="form-control" placeholder="Re-enter password" required>
                        </div>
                    </div>
                    <!-- Role -->
                    <!-- Phone Number -->
                    <div class="mb-3">
                        <label for="phone" class="form-label fs-6 fw-semibold" style="font-size: 25px;">Phone</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-telephone-fill"></i></span>
                            <input style="padding: 20px;" type="tel" id="phone" name="phone" class="form-control" placeholder="Enter phone number">
                            @error('phone')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <!-- Status -->
                    <div class="mb-3">
                        <label for="status" class="form-label fs-6 fw-semibold" style="font-size: 25px;">Status</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-toggle-on"></i></span>
                            <select class="form-control" name="status" id="status">
                            <option value="">-- Select Status --</option>
                            <option value="1" {{ old('status') == '1' ? 'selected' : '' }}>Active</option>
                            <option value="0" {{ old('status') == '0' ? 'selected' : '' }}>Inactive</option>
                        </select>
                        @error('status') <div class="text-danger">{{ $message }}</div>
                        @enderror

                        </div>
                    </div>

                    <!-- Profile Image -->
                    <div class="mb-4">
                        <label for="profile_image" class="form-label fs-6 fw-semibold" style="font-size: 25px; ">Profile Image</label>
                        <input type="file" id="profile_image" name="image" class="form-control" accept="image/*">
                    </div>

                    <!-- Submit Button -->
                    <div class="text-center">
                        <button type="submit" style="float: right;" class="btn btn-primary px-5 py-2 rounded-pill fs-6">
                            <i class="btn-primary mb-4"></i>Create User
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Include Bootstrap Icons CDN if not already included -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
</body>
@endsection
