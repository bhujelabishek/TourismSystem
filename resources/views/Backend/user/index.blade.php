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
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
            @php
            $i=1;
            @endphp
            <tr>
                <th scope="row">{{$i++}}</th>
                <td></td>
                <td>
                    <a href="{{ route('user.edit') }}" class="btn-primar "><img src="/raw/editimg.png" style="height:25px;width:20px"></a>
                    <a href="" class="btn-dange" id="del_btn"><img src="/raw/deleteimg.png"
                            style="height:25px;width:20px"></a>
                </td>
            </tr>

        </tbody>
</table><br>
<a href="{{ route('user.create') }}" class="btn-successs">Create USer</a>
@endsection
