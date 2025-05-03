@extends('Backend.layouts.navigation')
@section('content1')

<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h4 style="color: green;">Edit Mountain Package</h4>
            </div>
            <div class="card-body">
                <!-- Form for editing the package -->
                <form method="POST" action="{{ route('package.update', $package_data->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT') <!-- This is necessary for updating a resource -->

                    <div class="form-group">
                        <label for="name">Package Name</label>
                        <input type="text" style="padding: 20px;" class="form-control" id="name" name="name" value="{{ old('name', $package_data->name) }}">
                        @error('name') <div class="text-danger">{{ $message }}</div> @enderror
                    </div>

                    <div class="form-group">
                        <label for="price">Price (NRP)</label>
                        <input type="number" style="padding: 20px;" class="form-control" id="price" name="price" value="{{ old('price', $package_data->price) }}">
                        @error('price') <div class="text-danger">{{ $message }}</div> @enderror
                    </div>

                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" class="form-control" id="image" name="image">
                        @error('image') <div class="text-danger">{{ $message }}</div> @enderror
                        <!-- Display current image if exists -->
                        @if($package_data->image)
                            <img src="{{ asset('images/Packages/' . $package_data->image) }}" alt="Current Image" width="100">
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="description">Description</label>
                        <input type="text" style="padding: 20px;" class="form-control" id="description" name="description" value="{{ old('description', $package_data->description) }}">
                        @error('description') <div class="text-danger">{{ $message }}</div> @enderror
                    </div>

                    <div class="form-group">
                        <label for="start_date">Start Date</label>
                        <input type="date" style="padding: 20px;" class="form-control" id="start_date" name="start_date" value="{{ old('start_date', $package_data->start_date) }}">
                        @error('start_date') <div class="text-danger">{{ $message }}</div> @enderror
                    </div>

                    <div class="form-group">
                        <label for="end_date">End Date</label>
                        <input type="date" style="padding: 20px;" class="form-control" id="end_date" name="end_date" value="{{ old('end_date', $package_data->end_date) }}">
                        @error('end_date') <div class="text-danger">{{ $message }}</div> @enderror
                    </div>

                    <div class="form-group">
                        <label for="trip_duration">Trip Duration (Days)</label>
                        <input type="number" style="padding: 20px;" class="form-control" id="trip_duration" name="trip_duration" value="{{ old('trip_duration', $package_data->trip_duration) }}">
                        @error('trip_duration') <div class="text-danger">{{ $message }}</div> @enderror
                    </div>

                    <div class="form-group">
                        <label for="status">Status</label>
                        <select class="form-control" name="status" id="status">
                            <option value="1" {{ old('status', $package_data->status) == 1 ? 'selected' : '' }}>Active</option>
                            <option value="0" {{ old('status', $package_data->status) == 0 ? 'selected' : '' }}>Inactive</option>
                        </select>
                        @error('status') <div class="text-danger">{{ $message }}</div> @enderror
                    </div>

                    <button type="submit" class="btn btn-primary float-right">Update Package</button>
                </form>
            </div>
        </div>
    </div>
</body>

@endsection
