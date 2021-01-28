@extends('layouts.app')

@section('content')
<div id="home-tile-1" class="tile">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="logo">
                <img src="{{asset('images/ste-logo-final.png')}}" alt="">
            </div>
        </div>
        <h1 class="text-center">Welcome to<br> Strength Through Education</h1>
        <p class="lead">Strength Through Education, Inc. is a not-for-profit charity that was established October, 2019 based on a demonstrated need for service members to have “one-stop” access to:</p>
        <ul>
            <li>Comprehensive information about policy and regulations</li>
            <li>Templates to use for correspondence</li>
            <li>Checklists with steps for resolving issues</li>
            <li>Lists of pertinent outside resources</li>
            <li>Personalized assistance with policy and regulations questions</li>
        </ul>

    </div>
</div>
<div id="home-parallax-1"></div>
<div id="home-tile-2" class="tile">
    <div class="row justify-content-center">
        <div class="col-12">
            <h2>Our Mission</h2>
            <p class="text-center lead">Arming our warriors for mission success through guided education and career coaching.</p>
        </div>
    </div>
</div>
<div id="home-tile-3" class="tile">
    <div class="row justify-content-center">
        <div class="col-12">
            <h2>Our Vision</h2>
            <p class="text-center lead">Our armed forces are strengthened as all service members have access to
                resources for a thriving career.</p>
        </div>
    </div>
</div>
@endsection
