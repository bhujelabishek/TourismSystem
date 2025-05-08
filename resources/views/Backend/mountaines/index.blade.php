@php
use Illuminate\Support\Str;
@endphp

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
    <h1>Mountains TABLE</h1>
</div>

<table class=" table" style="width: atuo;">
    <thead>
        <tr>
            <th scope="col">S.N.</th>
            <th scope="col">Name</th>
            <th scope="col">Image</th>
            <th scope="col">Description</th>
            <th scope="col">Location</th>
            <th scope="col">Height</th>
            <th scope="col">Package Price</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @php
        $i=1;
        @endphp
        @foreach($mountains as $mountain)
        <tr>
            <th scope="row">{{$i++}}</th>
            <td>{{ $mountain->name }}</td>
            <td><img src="{{ asset('images/Mountains/'.$mountain->image) }}" style="height: 50px; width: 50px;"> </td>
            <td title="{{ $mountain->description }}">
                {{ Str::limit($mountain->description, 50) }}
            </td>
            <td>{{ $mountain->location }}</td>
            <td>{{ $mountain->height }}</td>
            <td>{{ $mountain->package_price }}</td>
            <td>
                <form action="{{ route('mountaines.toggleStatus', $mountain->id) }}" method="GET" style="display:inline;">
                    @csrf
                    <button type="submit" class="badge border-0 {{ $mountain->status ? 'bg-success' : 'bg-danger' }}">
                        {{ $mountain->status ? 'Active' : 'Inactive' }}
                    </button>
                </form>
            </td>
            <td class="text-nowrap">
                <a href="{{ route('mountaines.edit', $mountain->id) }}" class="d-inline-block me-1" title="Edit">
                    <img src="/raw/editimg.png" alt="Edit" style="height:24px; width:24px">
                </a>
                <a href="{{ route('mountaines.delete', $mountain->id) }}" class="d-inline-block" title="Delete" onclick="return confirm('Are you sure?')">
                    <img src="/raw/deleteimg.png" alt="Delete" style="height:24px; width:24px">
                </a>
            </td>


        </tr>
        @endforeach
    </tbody>
</table><br>
<a href="{{ route('mountaines.create') }}" class="btn-successs">Create Mountains</a>
@endsection
