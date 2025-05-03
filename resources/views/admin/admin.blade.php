@extends('layouts.app')
@section('content')
    <h2 class="p-3">Dashboard</h2>
    <h3 class="p-3">Admin Dashboard</h3>

    <div class="row p-3">
        <div class="col-md-3">
            <div class="card text-center p-3">
               <a href="{{ route(name:'admin.destination') }}"><h4>Total Destinations</h4></a>
                <p>10</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-center p-3">
                <h4>Total Bookings</h4>
                <p>250</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-center p-3">
                <h4>Total Users</h4>
                <p>120</p>
            </div>
        </div>
    </div>
@endsection
