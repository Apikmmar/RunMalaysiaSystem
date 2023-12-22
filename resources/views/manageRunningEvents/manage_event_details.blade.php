@extends('components.master')

@section('content')

    <br>
    <div class="container">
        <form action="" method="post">
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
                            <input class="form-control" type="file" id="formFile" name="photo">
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
                            <textarea class="form-control" aria-label="With textarea" name="eventlocation" placeholder="Event Description" ></textarea>
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
                    <button type="submit" class="btn btn-info fw-bold">Add New Event</button>
                </div>
            </div>
        </form>
        <br>
        <div class="d-flex flex-column bd-highlight mb-3">
            <div class="bd-highlight">
                <p class="h4 fw-bold text-center">
                    No Participant Yet.
                </p>
                <p class="h4 fw-bold">
                    Listed Participants:
                </p>
            </div>
            <div class="bd-highlight">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col" class="text-center">#</th>
                            <th scope="col" class="text-center">Participant Name</th>
                            <th scope="col" class="text-center">Participant IC Number</th>
                            <th scope="col" class="text-center">Remove Registration</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row" class="text-center">1</th>
                            <td class="text-center">Otto</td>
                            <td class="text-center">list user</td>
                            <td class="text-center">
                                <button class="btn">
                                    <img src="{{ asset('images/garbage.png') }}" class="operation_icon" alt="delete_user.png">
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


@endsection