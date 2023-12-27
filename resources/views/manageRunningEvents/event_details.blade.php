{{-- BCS3453 [PROJECT]-SEMESTER 2324/1
Student ID: CB21016
Student Name: MUHAMMAD AFIQ AMMAR BIN MURAD --}}
@extends('components.master')

@section('content')
    
    <br>
    <div class="container">
    @if(session('success'))
        <div id="success-message" class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
        <div>
            <p class="h1 fw-bold">{{ $event->event_name }}</p>
        </div>
        <br>
        <div class="d-flex">
            <div class="col-8">
                <img src="{{ asset('storage/' . $event->event_bannerpath) }}" alt="running_banner_poster" class="imagebanner">
            </div>
            <div class="col-4 d-flex justify-content-center align-items-center">
                <div class="box-info">
                    <p class="text-center">EVENT INFO</p>
                    <div>
                        <p class="fw-italic text-center"><b>{{ $event->event_location }}</b></p>
                        <p class="fw-italic text-center">{{ $event->event_date }}</p>
                        <p class="fw-italic text-center">{{ $event->event_time }}</p>
                        <form action="{{ route('view_event', ['id' => $event->id]) }}" method="post">
                            @csrf
                            <button type="submit" class="btn btn-primary fw-bold">JOIN EVENT</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div>
            <p class="h5 fw-bold">ABOUT</p>
            <p class="h5">{{ $event->event_desc }}</p>
        </div>
    </div>

@endsection