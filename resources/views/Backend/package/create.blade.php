@extends('Backend.layouts.navigation')
@section('content1')

<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h4 style="color: green;">Create Mountain Package</h4>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('package.store') }}" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label for="name">Package Name</label>
                        <input type="text" style="padding: 20px;" class="form-control" id="name" name="name" value="{{ old('name') }}">
                        @error('name') <div class="text-danger">{{ $message }}</div> @enderror
                    </div>

                    <div class="form-group">
                        <label for="price">Price (NRP)</label>
                        <input type="number" style="padding: 20px;" class="form-control" id="price" name="price" value="{{ old('price') }}">
                        @error('price') <div class="text-danger">{{ $message }}</div> @enderror
                    </div>

                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file"  class="form-control" id="image" name="image">
                        @error('image') <div class="text-danger">{{ $message }}</div> @enderror
                    </div>

                    <div class="form-group">
                        <label for="description">Description</label>
                        <input type="text" style="padding: 20px;" class="form-control" id="description" name="description" value="{{ old('description') }}">
                        @error('description') <div class="text-danger">{{ $message }}</div> @enderror
                    </div>

                    <div class="form-group">
                        <label for="start_date">Start Date</label>
                        <input type="date" style="padding: 20px;" class="form-control" id="start_date" name="start_date" value="{{ old('start_date') }}">
                        @error('start_date') <div class="text-danger">{{ $message }}</div> @enderror
                    </div>

                    <div class="form-group">
                        <label for="end_date">End Date</label>
                        <input type="date" style="padding: 20px;" class="form-control" id="end_date" name="end_date" value="{{ old('end_date') }}">
                        @error('end_date') <div class="text-danger">{{ $message }}</div> @enderror
                    </div>

                    <div class="form-group">
                        <label for="trip_duration">Trip Duration (Days)</label>
                        <input type="number" style="padding: 20px;" class="form-control" id="trip_duration" name="trip_duration" value="{{ old('trip_duration') }}">
                        @error('trip_duration') <div class="text-danger">{{ $message }}</div> @enderror
                    </div>

                    <div class="form-group">
                        <label for="status">Status</label>
                        <select class="form-control" name="status" id="status">
                            <option value="">-- Select Status --</option>
                            <option value="1" {{ old('status') == '1' ? 'selected' : '' }}>Active</option>
                            <option value="0" {{ old('status') == '0' ? 'selected' : '' }}>Inactive</option>
                        </select>
                        @error('status') <div class="text-danger">{{ $message }}</div> @enderror
                    </div>

                    <div class="form-group">
                        <label for="status">Category</label>
                        <select class="form-control" name="status" id="status">
                            <option value="">-- Select Status --</option>
                            @foreach($categories as $category)
                            <option value="1" {{ old('status') == $category->name ? 'selected' : '' }}>{{ $category->name }}</option>
                            @endforeach
                        </select>
                        @error('status') <div class="text-danger">{{ $message }}</div> @enderror
                    </div>

                    <button type="submit" class="btn btn-primary float-right">Add Mountain Package</button>
                </form>
            </div>
        </div>
    </div>
</body>

@endsection
