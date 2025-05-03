@extends('Backend.layouts.navigation')

@section('content1')
<link rel="stylesheet" href="/css/user/dashboard.css">
<h1>DASHBOARD</h1>
<div class="sales">

    <div class="total-orders">
        <h1 style="margin: 10px 20px 0px; padding: 0;"></h1>
        <p style="margin: 5px 20px 0px; padding: 0;">Total Package</p><br>
        <a href="{{route('package.index')}}">View more</a>
    </div>
    <div class="total-customers">
        <h1 style="margin: 10px 20px 0px; padding: 0;"></h1>
        <p style="margin: 5px 20px 0px; padding: 0;">Total User</p><br>
        <a href="{{ route('user.index') }}">View more</a>
    </div>
    <div class="total-sales">
        <h1 style="margin: 10px 20px 0px; padding: 0;"></h1>
        <p style="margin: 5px 20px 0px; padding: 0;">Total Mountaines</p><br>
        <a href="{{  route('mountaines.index') }}">View more</a>
    </div>
</div>
{{-- <iframe src="//stream.crichd.sc/update/willowcricket.php" width="100%" height="500px" marginheight="0" marginwidth="0" scrolling="no" frameborder="0" allowfullscreen  allow="encrypted-media"></iframe> --}}
@endsection
