@extends('components.master')

@section('content')
    
    <br>
    <div class="container">
        <div>
            <p class="h1 fw-bold">Event Name</p>
        </div>
        <br>
        <div class="d-flex">
            <div class="col-8">
                <img src="{{ asset('images/run-event2.jpg') }}" alt="running_banner_poster" class="imagebanner">
            </div>
            <div class="col-4 d-flex justify-content-center align-items-center" style="border: 1px solid black">
                <div class="box-info">
                    <p class="text-center">EVENT INFO</p>
                    <div>
                        <p class="fw-italic text-center"><b>event location</b></p>
                        <p class="fw-italic text-center">event date</p>
                        <p class="fw-italic text-center">event time</p>
                        <form action="" method="post">
                            <button type="submit" class="btn btn-primary fw-bold">JOIN EVENT</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div>
            <p class="h5 fw-bold">ABOUT</p>
            <p class="h5">Event Description</p>
        </div>
    </div>

@endsection