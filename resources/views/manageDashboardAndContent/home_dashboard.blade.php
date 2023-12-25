@extends('components.master')

@section('content')
    
    <div>
        <video src="{{ asset('video/people-running.mp4') }}" autoplay loop muted class="playvid"></video>
    </div>
    <br>
    <div class="container">
    @if(auth()->check() && auth()->user()->role_id == 1)
        <div class="d-flex flex-column bd-highlight mb-3">
            <div class="bd-highlight d-flex justify-content-center">
                <a class="h3 fw-bold join-eventlink" href="/profile">WELCOME ADMIN {{ auth()->user()->user_fullname }}</a>
            </div>
        </div>
    @else
        <div class="d-flex flex-column bd-highlight mb-3">
            <div class="bd-highlight d-flex justify-content-center">
                <a class="h3 fw-bold join-eventlink" href="/all_event">JOIN OUR RUNNING EVENTS NOW!!!</a>
            </div>
            <br>
            <div class="bd-highlight">
                <p class="h3 fw-bolder">
                    Contact Us At: 
                    <a href="mailto:runmalaysia@email.com">runmalaysia@email.com</a>
                </p>
            </div>
            <div class="bd-highlight col-5">
                <p class="h6">We also provide end-to-end running event management services, handling everything from registration to setup and ensuring a seamless experience for clients.</p>
            </div>
        </div>
    @endif
        
    </div>

@endsection
