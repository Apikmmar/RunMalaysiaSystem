@extends('components.master')

@section('content')
    
    <div>
        <video src="{{ asset('video/people-running.mp4') }}" autoplay loop muted class="playvid"></video>
    </div>
    <br>
    <div class="container">
        <div class="d-flex flex-column bd-highlight mb-3">
            <div class="bd-highlight d-flex justify-content-center">
                <a class="h3 fw-bold join-eventlink" href="/admin_profile">WELCOME ADMIN NAME</a>
            </div>
        </div>
    </div>

@endsection