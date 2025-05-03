@extends('Backend.layouts.navigation')
@section('content1')
<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h4 style="color: green;">Edit Mountaines</h4>
            </div>
            <div class="card-body">
                <form method="POST" action="#">
                    @csrf
                    <div class="form-group">
                        <label for="mountaineName">Mountaine Name</label>
                        <input type="text" style="padding: 20px;" class="form-control" id="name" value="{{ old('name') }}"
                            name="name">
                        {{-- Error Message --}}
                        @error('name')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="mountaineName">Mountaine Image</label>
                        <input type="file"  class="form-control" id="image" value="{{ old('image') }}"
                            name="image">
                        {{-- Error Message --}}
                        @error('image')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="mountaineName">Mountaine Description</label>
                        <input type="text" style="padding: 20px;" class="form-control" id="description" value="{{ old('description') }}"
                            name="description">
                        {{-- Error Message --}}
                        @error('description')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="mountaineName">Mountaine Location</label>
                        <input type="text" style="padding: 20px;" class="form-control" id="location" value="{{ old('location') }}"
                            name="location">
                        {{-- Error Message --}}
                        @error('location')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="mountaineName">Mountaine Height</label>
                        <input type="text" style="padding: 20px;" class="form-control" id="height" value="{{ old('height') }}"
                            name="height">
                        {{-- Error Message --}}
                        @error('height')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="mountaineName">Mountaine Package Price</label>
                        <input type="text" style="padding: 20px;" class="form-control" id="price" value="{{ old('price') }}"
                            name="price">
                        {{-- Error Message --}}
                        @error('price')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror               </div> <!-- End of Price Form Group -->
                    <div class="form-group">
                        <label for="mountaineName">Trek Duration</label>
                        <input type="text" style="padding: 20px;" class="form-control" id="duration" value="{{ old('duration') }}"
                            name="duration">
                        {{-- Error Message --}}
                        @error('duration')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="mountaineName">Trek Difficulty</label>
                        <input type="text" style="padding: 20px; "class="form-control" id="difficulty" value="{{ old('difficulty') }}"
                            name="difficulty">
                        {{-- Error Message --}}
                        @error('difficulty')
                            <div class="text-danger">{{ $message }}</div>
                            <div class="text-center">
                        @enderror
                    </div>
                    <button type="submit" style="float: right;" class="btn btn-primary">Edit Mountaines</button>
        </body>
@endsection
