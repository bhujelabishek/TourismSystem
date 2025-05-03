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
    <h1>CATEGORY TABLE</h1>
</div>

<table class=" table">
    <thead>
        <tr>
            <th scope="col">S.N.</th>
            <th scope="col">Category Name</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @php
        $i=1;
        @endphp
        @foreach($categories as $category)
        <tr>
            <th scope="row">{{$i++}}</th>
            <td>{{ $category->name }}</td>
            <td>
                <form action="{{ route('categories.toggleStatus', $category->id) }}" method="GET" style="display:inline;">
                    @csrf
                    <button type="submit" class="badge border-0 {{ $category->status ? 'bg-success' : 'bg-danger' }}">
                        {{ $category->status ? 'Active' : 'Inactive' }}
                    </button>
                </form>
            </td>
            <td>
                <a href="" class="btn-primar "><img src="/raw/editimg.png" style="height:25px;width:20px"></a>
                <a href="" class="btn-dange" id="del_btn"><img src="/raw/deleteimg.png"
                        style="height:25px;width:20px"></a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table><br>
<a href="{{ route('categories.create') }}" class="btn-successs">Create Category</a>
@endsection
