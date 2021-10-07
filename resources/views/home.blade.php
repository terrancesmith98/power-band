@extends('layouts.app')
@section('title', 'Music By Ampient')

@section('content')
<div class="row no-gutters">
    <div class="col-12 d-flex align-items-center">
        <div id="image-container-1" class="d-flex align-items-center justify-content-between image-container">
            <div class="content-container">
                <video src="/videos/america-for-americans.mp4" width="300" controls></video>
            </div>
            <div class="text-container p-3 w-100">
                <h2>Original Soundtrack for Military Simulator</h2>
                <p>This is my latest release for the popular Roblox game, "Military Simulator" by Vikinglaw.
                </p>
                <a href="https://www.youtube.com/watch?v=DT5iIA2ZeQk" target="blank"><i class="fab fa-youtube fa-3x"></i></a>
            </div>
        </div>
    </div>


</div>
<div class="row no-gutters">
    <div class="col-12 d-flex align-items-center">
        <div id="image-container-2" class="d-flex align-items-center justify-content-between image-container">
            <div class="text-container p-3 w-100">
                <h2>Roblox Coruscant Teaser Trailer</h2>
                <p>This is the teaser trailer for the upcoming Roblox game, "Coruscant Revamp", by Vikinglaw.  I composed the original soundtrack for the trailer and gameplay.  I also recorded and edited all footage for the trailer.
                </p>
                <a href="https://www.youtube.com/watch?v=cbAL3xPlUE8" target="blank"><i class="fab fa-youtube fa-3x"></i></a>
            </div>
            <div class="content-container right">
                <video src="/videos/Coruscant-Revamp-TeaserTrailer.mp4" width="300" controls></video>
            </div>

        </div>
    </div>
</div>

@endsection
