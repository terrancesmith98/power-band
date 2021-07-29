@extends('layouts/app')
@section('title', 'STE | Donate')

@section('content')
<div id="donate-tile1" class="tile-dark-blue tile tile-main">
    <div class="container-fluid">
        <h1 class="text-center">Donate to<br> Strength Through Education</h1>
        <h2 class="text-center">Please send all donations to:</h2>
        <p><address class="text-center text-large">
            Strength Through Education, Inc.<br>
            PO Box 268<br>
            Hammondsport, NY 14840

        </address></p>
        <div class="paypal-container">
            <a href="https://www.paypal.com/donate?hosted_button_id=9EPGWCVZQ7WKW" target="blank" class="btn btn-info text-dark">DONATE NOW</a>

        </div>
    </div>

</div>


@endsection
