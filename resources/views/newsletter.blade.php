@extends('layouts/app')
@section('title', 'STE | Newsletter')

@section('content')
<div id="newsletter-tile1" class="tile-main tile">
    <h1 class="text-center">Sign Up For Our Newsletter</h1>
    <div class="form col-sm-6 mx-auto">
        {!! Form::open(['route' => 'subscribe']) !!}
        @csrf <!-- {{ csrf_field() }} -->
        <div class="form-group">
            <label for="first_name">First Name</label>
            <input type="text" class="form-control" name="first_name">
        </div>
        <div class="form-group">
            <label for="last_name">Last Name</label>
            <input type="text" class="form-control" name="last_name">
        </div>
        <div class="form-group">
            <label for="email">email</label>
            <input type="email" class="form-control" name="first_name">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-success">Sign Up!</button>
        </div>


        {!! Form::close() !!}
    </div>
</div>
    
@endsection