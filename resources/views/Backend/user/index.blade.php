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
    <h1>All User</h1>
</div>

<table class=" table">
    <thead>
        <tr>
            <th scope="col">S.N.</th>
            <th scope="col">User Name</th>
            <th scope="col">User Image</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
            @php
            $i=1;
            @endphp
            @foreach($users as $user)
            <tr>
                <th scope="row">{{$i++}}</th>
                <td>{{ $user-> name }}</td>
                <td><img src="{{ asset('images/Users/'.$user->image) }}" style="height: 50px; width: 50px;"> </td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->phone }}</td>
                <td>
                <form action="{{ route('user.toggleStatus', $user->id) }}" method="GET" style="display:inline;">
                    @csrf
                    <button type="submit" class="badge border-0 {{ $user->status ? 'bg-success' : 'bg-danger' }}">
                        {{ $user->status ? 'Active' : 'Inactive' }}
                    </button>
                </form>
            </td>
                <td>
                    <a href="{{ route('user.edit') }}" class="btn-primar "><img src="/raw/editimg.png" style="height:25px;width:20px"></a>
                    <form action="{{ route('user.delete', $user->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn-dange" style="border:none; background:none; padding:0;" onclick="return confirm('Are you sure you want to delete this user?');">
                        <img src="/raw/deleteimg.png" style="height:25px;width:20px">
                    </button>
                </form>
                </td>
            </tr>
            @endforeach

        </tbody>
</table><br>
<a href="{{ route('user.create') }}" class="btn-successs">Create USer</a>
@endsection
