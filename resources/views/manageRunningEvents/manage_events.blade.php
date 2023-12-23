@extends('components.master')

@section('content')
    
    <br>
    <div class="container">

    @if(session('success'))
        <div id="success-message" class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
        <form action="/manage_events" method="post">
            @csrf
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
                            <input type="input" class="form-control" name="eventname" placeholder="Event Name">
                        </div>
                    </div>
                    <div class="d-flex mb-3">
                        <div class="col-3 d-flex align-items-center">
                            <label for="eventdate" class="form-label">Event Date:</label>
                        </div>
                        <div class="col-8">
                            <input type="date" class="form-control" name="eventdate" placeholder="Event Date">
                        </div>                        
                    </div>
                    <div class="d-flex mb-3">
                        <div class="col-3 d-flex align-items-center">
                            <label for="formFile" class="form-label">Event Banner:</label>
                        </div>
                        <div class="col-8">
                            <input class="form-control" type="file" id="formFile" name="eventphoto">
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="d-flex mb-3">
                        <div class="col-3 d-flex align-items-center">
                            <label for="exampleFormControlInput1" class="form-label">Event Location:</label>
                        </div>
                        <div class="col-8">
                            <input type="input" class="form-control" name="eventlocation" placeholder="Event Location">
                        </div>
                    </div>
                    <div class="d-flex mb-3">
                        <div class="col-3 d-flex align-items-center">
                            <label for="eventtime" class="form-label">Event Time:</label>
                        </div>
                        <div class="col-8">
                            <input type="time" class="form-control" name="eventtime" id="eventtime" placeholder="Event Time">
                        </div>
                    </div>
                    <div class="d-flex mb-3">
                        <div class="col-3 d-flex align-items-center">
                            <label class="form-label">Event Description:</label>
                        </div>
                        <div class="col-8">
                            <textarea class="form-control" aria-label="With textarea" name="eventdesc" placeholder="Event Description" ></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <div>
                    <button type="reset" class="btn btn-danger fw-bold">Reset All</button>
                @foreach (range(1, 5) as $index)
                    &nbsp;
                @endforeach
                    <button type="submit" class="btn btn-primary fw-bold">Add New Event</button>
                </div>
            </div>
        </form>
        <br>
        <div class="d-flex flex-column bd-highlight mb-3">
            <div class="bd-highlight">

            @if ($events->isNotEmpty())
                <p class="h4 fw-bold">
                    Listed Events:
                </p>
                <div class="bd-highlight">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col" class="text-center">#</th>
                                <th scope="col" class="text-center">Event Name</th>
                                <th scope="col" class="text-center">Date</th>
                                <th scope="col" class="text-center">Time</th>
                                <th scope="col" class="text-center">Location</th>
                                <th scope="col" class="text-center">Operation</th>
                            </tr>
                        </thead>
                        <tbody>
                        @php $number = 1; @endphp
                        @foreach ($events as $event)
                            <tr>
                                <th scope="row" class="text-center">{{ $number }}</th>
                                <td class="text-center">{{ $event->event_name }}</td>
                                <td class="text-center">{{ $event->event_date->format('j F Y') }}</td>
                                <td class="text-center">{{ $event->event_time->format('h:i A') }}</td>
                                <td class="text-center">{{ $event->event_location }}</td>
                                <td class="text-center">
                                    <a href="{{ route('manage_event_details', $event->id) }}" class="btn">
                                        <img src="{{ asset('images/edit.png') }}" class="operation_icon" alt="delete_user.png">
                                    </a>
                                    <form action="/manage_events/{{ $event->id }}" method="POST" style="display: inline;" onsubmit="return confirm('Are you sure you want to delete this event?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn">
                                            <img src="{{ asset('images/garbage.png') }}" class="operation_icon" alt="delete_icon.png">
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @php $number = $number + 1; @endphp
                        @endforeach
                        </tbody>
                    </table>
                </div>
            @else
                <p class="h4 fw-bold text-center">
                    No Listed Events Yet.
                </p>
            @endif
            
            </div>
            
        </div>
    </div>

@endsection