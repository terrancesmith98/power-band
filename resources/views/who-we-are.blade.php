@extends('layouts/app')
@section('title', 'STE | Who We Are')

@section('content')
<div class="tile tile-dark-blue tile-main">
    <h1 class="text-center">Who We Are</h1>
    <h2>History</h2>
    <div class="row p-5">
        <div class="col-med-8 p4">
            <p>Strength Through Education was started after our founder, Diane Mitchell, discovered the lack of understanding about military policy and regulations among young active duty service members. After assisting several soldiers she began to develop a program that would expand the services that she and her team could provide. Through her efforts, the charity, Strength Through Education, was established in 2019 to provide coaching and information to those that serve in our armed forces.</p>
        </div>
        <div class="col-med-4 mx-auto p4">
            <img src="{{asset('images/paratrooper.jpg')}}" alt="">
        </div>
    </div>
    
    
</div>
{{-- <div class="parallax" id="wwa-parallax"></div>
<div class="tile" id="wwa-tile2">
    <h2>Secondary Heading</h2>
</div> --}}
    
@endsection