@extends('admin.layout')

@section('content')
    <h2>Destinations</h2>
    <!-- <a href="{{ route('admin.add-destination') }}" class="btn btn-primary mb-3">Add Destination</a> -->

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Location</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($destinations as $destination)
                <tr>
                    <td>{{ $destination->id }}</td>
                    <td>{{ $destination->name }}</td>
                    <td>{{ $destination->location }}</td>
                    <td>
                        <a href="{{ route('admin.edit-destination', $destination->id) }}" class="btn btn-warning">Edit</a>
                        <a href="{{ route('admin.delete-destination', $destination->id) }}" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
