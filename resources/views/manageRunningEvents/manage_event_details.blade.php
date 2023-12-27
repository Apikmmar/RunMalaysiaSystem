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
        <form action="/manage_event_details/{{ $event->id }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div>
                <p class="h4 fw-bold">NEW EVENTS:</p>
            </div>
            <div class="d-flex">
                <div class="col">
                    <div class="d-flex mb-3">
                        <div class="col-3 d-flex align-items-center">
                            <label for="exampleFormControlInput1" class="form-label">Event Name:</label>
                        </div>
                        <div class="col-8">
                            <input type="input" class="form-control" name="eventname" value="{{ $event->event_name }}" placeholder="Event Name">
                        </div>
                    </div>
                    <div class="d-flex mb-3">
                        <div class="col-3 d-flex align-items-center">
                            <label for="eventdate" class="form-label">Event Date:</label>
                        </div>
                        <div class="col-8">
                            <input type="date" class="form-control" name="eventdate" value="{{ $event->event_date }}" placeholder="Event Date">
                        </div>                        
                    </div>
                    <div class="d-flex mb-3">
                        <div class="col-3 d-flex align-items-center">
                            <label for="eventphoto" class="form-label">Event Banner:</label>
                        </div>
                        <div class="col-8">
                            <input class="form-control" type="file" id="eventphoto" value="{{ $event->event_bannerpath }}" name="eventphoto">
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="d-flex mb-3">
                        <div class="col-3 d-flex align-items-center">
                            <label for="exampleFormControlInput1" class="form-label">Event Location:</label>
                        </div>
                        <div class="col-8">
                            <input type="input" class="form-control" name="eventlocation" value="{{ $event->event_location }}" placeholder="Event Location">
                        </div>
                    </div>
                    <div class="d-flex mb-3">
                        <div class="col-3 d-flex align-items-center">
                            <label for="eventtime" class="form-label">Event Time:</label>
                        </div>
                        <div class="col-8">
                            <input type="time" class="form-control" name="eventtime" id="eventtime" value="{{ $event->event_time }}" placeholder="Event Time">
                        </div>
                    </div>
                    <div class="d-flex mb-3">
                        <div class="col-3 d-flex align-items-center">
                            <label class="form-label">Event Description:</label>
                        </div>
                        <div class="col-8">
                            <textarea class="form-control" aria-label="With textarea" name="eventdesc" placeholder="Event Description" >{{ $event->event_desc }}</textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <div>
                    <button type="reset" class="btn btn-warning fw-bold">Reset All</button>
                    @foreach (range(1, 5) as $index)
                        &nbsp;
                    @endforeach
                    <button type="submit" class="btn btn-info fw-bold">Update Event</button>
                </div>
            </div>
        </form>
        <br>
        <div class="d-flex flex-column bd-highlight mb-3">
            <div class="bd-highlight">
            
            @if ($participants->isNotEmpty())
                <p class="h4 fw-bold">
                    Listed Participants:
                </p>
            </div>
            <div class="bd-highlight d-flex justify-content-center">
                <table class="table" style="width: 80%;">
                    <thead>
                        <tr>
                            <th scope="col" class="text-center">#</th>
                            <th scope="col" class="text-center">Participant Name</th>
                            <th scope="col" class="text-center">Participant IC Number</th>
                        </tr>
                    </thead>
                    <tbody>
                    @php $number = 1; @endphp
                    @foreach ($participants as $participant)
                        <tr>
                            <th scope="row" class="text-center">{{ $number }}</th>
                            <td class="text-center">{{ $participant->user->user_fullname }}</td>
                            <td class="text-center">{{ $participant->user->user_ic }}</td>
                        </tr>
                    @php $number = $number + 1; @endphp
                    @endforeach
                    </tbody>
                </table>
            </div>
            @else    
                <p class="h4 fw-bold text-center">
                    No Participant Yet.
                </p>
            @endif
        </div>
    </div>


@endsection