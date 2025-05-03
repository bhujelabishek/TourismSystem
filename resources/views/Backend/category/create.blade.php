@extends('Backend.layouts.navigation')

@section('content1')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h4>Create Category</h4>
            </div>
            <div class="card-body">
                <form method="POST" action="{{route('categories.store')}}">
                    @csrf
                    <div class="form-group">
                        <label for="categoryName">Category Name</label>
                        <input style="padding: 20px;" type="text" class="form-control" id="name" value="{{ old('name') }}"
                            name="name">
                        {{-- Error Message --}}
                        @error('name')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
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

                    <button type="submit" class="btn btn-primary">Create</button>
                </form>
            </div>
        </div>
    </div>
@endsection
