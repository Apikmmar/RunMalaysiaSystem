@extends('components.master')

@section('content')
    
    <br>
    <div class="container">
        <div class="d-flex justify-content-between">
            <div class="card" style="width: 25rem; height: 25rem;">
                <img src="{{ asset('images/run-event2.jpg') }}" class="card-img-top" style="object-fit: cover; height: 65%;" alt="running-event-poster">
                <div class="card-body">
                    <h5 class="card-title fw-bold">Event Name</h5>
                    <p class="card-text"> event time event date event location</p>
                    <a href="/view_event" class="btn btn-primary">Join Event</a>
                </div>
            </div>

            <div class="card" style="width: 25rem; height: 25rem;">
                <img src="{{ asset('images/run-event2.jpg') }}" class="card-img-top" style="object-fit: cover; height: 65%;" alt="running-event-poster">
                <div class="card-body">
                    <h5 class="card-title fw-bold">Event Name</h5>
                    <p class="card-text"> event time event date event location</p>
                    <a href="/view_event" class="btn btn-primary">Join Event</a>
                </div>
            </div>
            <div class="card" style="width: 25rem; height: 25rem;">
                <img src="{{ asset('images/run-event2.jpg') }}" class="card-img-top" style="object-fit: cover; height: 65%;" alt="running-event-poster">
                <div class="card-body">
                    <h5 class="card-title fw-bold">Event Name</h5>
                    <p class="card-text"> event time event date event location</p>
                    <a href="/view_event" class="btn btn-primary">Join Event</a>
                </div>
            </div>
        </div>
    </div>

@endsection