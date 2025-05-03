@extends('Backend.layouts.navigation')

@section('content1')
<body>
<div class="container py-1 px-1 d-flex justify-content-center align-items-center bg-body-tertiary">
    <div class="w-100" style="max-width: 800px;">
        <div class="bg-white border rounded-4 p-5 shadow-sm">
            <h1 class="text-center mb-4 text-primary fw-bold">Edit User</h1>

            <form action="" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
                @csrf

                <!-- Username -->
                <div class="mb-3">
                    <label for="username" class="form-label fs-6 fw-bold" style="font-size: 25px; ">Username</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-person-fill"></i></span>
                        <input style="padding: 20px;" type="text" id="username" name="username" class="form-control" placeholder="Enter your username" required>
                    </div>
                </div>

                <!-- Email -->
                <div class="mb-3">
                    <label for="email" class="form-label fs-6 fw-semibold" style="font-size: 25px;">Email</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-envelope-fill"></i></span>
                        <input style="padding: 20px;" type="email" id="email" name="email" class="form-control" placeholder="example@email.com" required>
                    </div>
                </div>

                <!-- Password -->
                <div class="mb-3">
                    <label for="password" class="form-label fs-6 fw-semibold" style="font-size: 25px; ">Password</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-lock-fill"></i></span>
                        <input style="padding: 20px;" type="password" id="password" name="password" class="form-control" placeholder="Enter password" required>
                    </div>
                </div>

                <!-- Confirm Password -->
                <div class="mb-3">
                    <label for="confirm_password" class="form-label fs-6 fw-semibold" style="font-size: 25px; ">Confirm Password</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-lock-fill"></i></span>
                        <input style="padding: 20px;" type="password" id="confirm_password" name="confirm_password" class="form-control" placeholder="Re-enter password" required>
                    </div>
                </div>

                <!-- Profile Image -->
                <div class="mb-4">
                    <label for="profile_image" class="form-label fs-6 fw-semibold" style="font-size: 25px; ">Profile Image</label>
                    <input type="file" id="profile_image" name="profile_image" class="form-control" accept="image/*">
                </div>

                <!-- Submit Button -->
                <div class="text-center">
                    <button type="submit" class="btn btn-primary px-5 py-2 rounded-pill fs-6">
                        <i class="btn-primary"></i>Edit User
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
