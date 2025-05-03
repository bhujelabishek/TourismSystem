@extends('Backend.layouts.navigation')

@section('content1')
{{-- FOR SUCESS MESSAGE --}}
{{-- @include('admin.message') --}}

<!-- <div class="success">
        @if (session('success'))
            <div class='container alert alert-success'>{{ session('success') }}</div>
        @endif
    </div>

    <div class="error">
        @if (session('error'))
            <div class='container alert alert-success'>{{ session('error') }}</div>
        @endif
    </div> -->
<div class="category-header">
    <h1>Package TABLE</h1>
</div>

<table class=" table">
    <thead>
        <tr>
            <th scope="col">S.N.</th>
            <th scope="col">Name</th>
            <th scope="col">Image</th>
            <th scope="col">Price</th>
            <th scope="col">Description</th>
            <th scope="col">Start_Date</th>
            <th scope="col">End_Date</th>
            <th scope="col">Trip_Duration</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @php
        $i=1;
        @endphp
        @foreach($packages as $package)
        <tr>
            <th scope="row">{{$i++}}</th>
            <td>{{ $package->name }}</td>
            <td><img src="{{ asset('images/Packages/'.$package->image) }}" style="height: 50px; width: 50px;"> </td>
            <td>{{ $package->price }}</td>
            <td>{{ $package->description }}</td>
            <td>{{ $package->start_date }}</td>
            <td>{{ $package->end_date }}</td>
            <td>{{ $package->trip_duration }}</td>
            <td>
                <form action="{{ route('package.toggleStatus', $package->id) }}" method="GET" style="display:inline;">
                    @csrf
                    <button type="submit" class="badge border-0 {{ $package->status ? 'bg-success' : 'bg-danger' }}">
                        {{ $package->status ? 'Active' : 'Inactive' }}
                    </button>
                </form>
            </td>
            <td>
                <a href="{{ route('package.edit', $package->id) }}" class="btn-primar "><img src="/raw/editimg.png" style="height:25px;width:20px" onclick="return confirm('Are you sure you want to edit this package?');"></a>
                <form action="{{ route('package.delete', $package->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn-dange" style="border:none; background:none; padding:0;" onclick="return confirm('Are you sure you want to delete this package?');">
                        <img src="/raw/deleteimg.png" style="height:25px;width:20px">
                    </button>
                </form>

            </td>
        </tr>
        @endforeach
    </tbody>
</table><br>
<a href="{{ route('package.create') }}" class="btn-successs">Create Package</a>
@endsection
