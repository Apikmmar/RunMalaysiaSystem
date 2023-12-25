@extends('components.master')

@section('content')

    <br>
    <form action="/profile/{{$user->id}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="container">
            <div class="d-flex">
                <div class="col-4">
                    <img src="{{ asset('storage/' . $user->user_photopath) }}" alt="your_photo.png" class="currentphoto2">
                </div>
                <div class="col fw-bold">
                    <div class="d-flex mb-3">
                        <div class="col-3 d-flex align-items-center">
                            <label for="exampleFormControlInput1" class="form-label">Full Name:</label>
                        </div>
                        <div class="col-8">
                            <input type="input" class="form-control" name="fullname" value="{{ $user->user_fullname }}" placeholder="Your Name">
                        </div>
                    </div>
                    <div class="d-flex mb-3">
                        <div class="col-3 d-flex align-items-center">
                            <label for="exampleFormControlInput1" class="form-label">Identity Card Number:</label>
                        </div>
                        <div class="col-8">
                            <input type="input" class="form-control" name="ic" value="{{ $user->user_ic }}" placeholder="Your IC">
                        </div>
                    </div>
                    <div class="d-flex mb-3">
                        <div class="col-3 d-flex align-items-center">
                            <label for="exampleFormControlInput1" class="form-label">Address:</label>
                        </div>
                        <div class="col-8">
                            <input type="input" class="form-control" name="address" value="{{ $user->user_address }}" placeholder="Your Address">
                        </div>
                    </div>
                    <div class="d-flex mb-3">
                        <div class="col-3 d-flex align-items-center">
                            <label for="exampleFormControlInput1" class="form-label">Age:</label>
                        </div>
                        <div class="col-8">
                            <input type="input" class="form-control" name="age" value="{{ $user->user_age }}" placeholder="Your Age">
                        </div>
                    </div>
                    <div class="d-flex mb-3">
                        <div class="col-3 d-flex align-items-center">
                            <label for="formFile" class="form-label">Profile Photo:</label>
                        </div>
                        <div class="col-8">
                            <input class="form-control" type="file" id="formFile" value="{{ asset('storage/' . $user->user_photopath) }}" name="photo">
                        </div>
                    </div>
                    <div class="d-flex mb-3">
                        <div class="col-3 d-flex align-items-center">
                            <label for="exampleFormControlInput1" class="form-label">Username:</label>
                        </div>
                        <div class="col-8">
                            <input type="input" class="form-control" name="username" value="{{ $user->username }}" placeholder="Your Username">
                        </div>
                    </div>
                    <div class="d-flex mb-3">
                        <div class="col-3 d-flex align-items-center">
                            <label for="inputPassword" class="form-label">Password:</label>
                        </div>
                        <div class="col-8">
                            <input type="password" class="form-control" name="password" value="{{ $user->password }}" placeholder="Your Password" readonly>
                        </div>
                    </div>
                    <div class="d-flex mb-3">
                        <div class="col-3 d-flex align-items-center">
                            <label for="exampleFormControlInput1" class="form-label">Role:</label>
                        </div>
                        <div class="col-8">
                            <input type="input" class="form-control" name="role" value="{{ $user->role->role_name }}" placeholder="Admin" readonly>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <div>
                    <button type="reset" class="btn btn-warning fw-bold">Reset</button>
                    @foreach (range(1, 5) as $index)
                        &nbsp;
                    @endforeach
                    <button type="submit" class="btn btn-info fw-bold">Update</button>
                </div>
            </div>
        </div>
    </form>
    <br>

@if ($user->role_id == 2)
    <div class="container">
        <div class="d-flex flex-column bd-highlight mb-3">
            <div class="bd-highlight">

            @if ($user->participants->isNotEmpty())
                <p class="h4 fw-bold text-center">
                    Listed Joined Events:
                </p>
                <div class="bd-highlight">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col" class="text-center">#</th>
                                <th scope="col" class="text-center">Event Join</th>
                                <th scope="col" class="text-center">Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $number = 1; @endphp
                            @foreach ($participants as $participant)
                                <tr>
                                    <th scope="row" class="text-center">{{ $number++ }}</th>
                                    <td class="text-center">{{ $participant->event->event_name }}</td>
                                    <td class="text-center">{{ $participant->event->event_date }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @else    
                <p class="h4 fw-bold text-center">
                    You have not joined any event yet.
                </p>
            @endif
                
            </div>
        </div>
    </div>
@endif

@endsection