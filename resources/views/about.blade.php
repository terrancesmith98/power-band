@extends('layouts/app')
@section('title', 'About Power Band')

@section('content')
<div class="row no-gutters main-content">
    <div class="col-6 p-5 text-light">
        <h1 class="text-light">About Power</h1>
        <p>Josh and Terry Smith, twin brothers, have been writing music together since the mid-eighties.  In the late eighties they formed a band, Players Club, with high-school friends Adam Oplinger and Will Oliver.  Players Club released 2 compilations on cassette in limited quantities.  The band would eventually break up as the members went on with their lives.</p>
        <p class="small">Always Never - Players Club</p>
        <audio controls type="audio/mpeg" src="/audio/Always Never.mp3"></audio>
        <p class="small">I Wonder Why - Players Club</p>
        <audio controls type="audio/mpeg" src="/audio/I Wonder Why.mp3"></audio>
        <p class="small">Lend Yourself to Me - Players Club</p>
        <audio controls type="audio/mpeg" src="/audio/Lend Yourself to Me.mp3"></audio>

        <p>The brothers would continue to write music in the 90's and early 2000's under the name Mirror Image.  Only home recordings were created of these songs and limited copies exist.</p>
        <p>Nearly 25 years later, Adam Oplinger, Josh Smith and Terry Smith reunited to create a new release under the name <em>Time Thief</em>, the title of their earliest releases with Players Club.</p>
        <iframe src="https://open.spotify.com/embed/album/7hzu9n4E3D0OtKfo01o8rZ?theme=0" width="100%" height="80" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" class="mb-3"></iframe>
        <p>Today, Josh and Terry Smith are writing under the name Power, offering a faith-based, rock and blues influenced musical message of hope and a future.</p>
    </div>
    <div class="col-4 d-flex flex-column align-items-center justify-content-center p-5">
        <img class="mw-100" src="/images/mi-cassette.png" alt="">
        <img class="mw-100" src="/images/mi-pc-cassette.png" alt="">
    </div>
</div>

@endsection
