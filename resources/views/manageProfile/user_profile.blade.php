@extends('components.master')
{{-- style="border: 1px solid black" --}}
@section('content')

    <br>
    <form action="" method="post">
        <div class="container">
            <div class="d-flex">
                <div class="col-4">
                    <img src="{{ asset('images/profile.png') }}" alt="your_photo.png" class="currentphoto">
                </div>
                <div class="col fw-bold">
                    <div class="d-flex mb-3">
                        <div class="col-3 d-flex align-items-center">
                            <label for="exampleFormControlInput1" class="form-label">Full Name:</label>
                        </div>
                        <div class="col-8">
                            <input type="input" class="form-control" name="fullname" placeholder="Your Name">
                        </div>
                    </div>
                    <div class="d-flex mb-3">
                        <div class="col-3 d-flex align-items-center">
                            <label for="exampleFormControlInput1" class="form-label">Identity Card Number:</label>
                        </div>
                        <div class="col-8">
                            <input type="input" class="form-control" name="ic" placeholder="Your IC">
                        </div>
                    </div>
                    <div class="d-flex mb-3">
                        <div class="col-3 d-flex align-items-center">
                            <label for="exampleFormControlInput1" class="form-label">Address:</label>
                        </div>
                        <div class="col-8">
                            <input type="input" class="form-control" name="address" placeholder="Your Address">
                        </div>
                    </div>
                    <div class="d-flex mb-3">
                        <div class="col-3 d-flex align-items-center">
                            <label for="exampleFormControlInput1" class="form-label">Age:</label>
                        </div>
                        <div class="col-8">
                            <input type="input" class="form-control" name="age" placeholder="Your Age">
                        </div>
                    </div>
                    <div class="d-flex mb-3">
                        <div class="col-3 d-flex align-items-center">
                            <label for="exampleFormControlInput1" class="form-label">Username:</label>
                        </div>
                        <div class="col-8">
                            <input type="input" class="form-control" name="username" placeholder="Your Username">
                        </div>
                    </div>
                    <div class="d-flex mb-3">
                        <div class="col-3 d-flex align-items-center">
                            <label for="inputPassword" class="form-label">Password:</label>
                        </div>
                        <div class="col-8">
                            <input type="password" class="form-control" name="password" placeholder="Your Password">
                        </div>
                    </div>
                    <div class="d-flex mb-3">
                        <div class="col-3 d-flex align-items-center">
                            <label for="formFile" class="form-label">Profile Photo:</label>
                        </div>
                        <div class="col-8">
                            <input class="form-control" type="file" id="formFile" name="photo">
                        </div>
                    </div>
                    <div class="d-flex mb-3">
                        <div class="col-3 d-flex align-items-center">
                            <label for="exampleFormControlInput1" class="form-label">Role:</label>
                        </div>
                        <div class="col-8">
                            <input type="input" class="form-control" name="role" placeholder="User" readonly>
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

    <div class="container">
        <div class="d-flex flex-column bd-highlight mb-3">
            <div class="p-2 bd-highlight">
                <p class="h4 fw-bold text-center">
                    You have not joined any event yet.
                </p>
                <p class="h4 fw-bold text-center">

                    Listed Joined Events:
                </p>
            </div>
            <div class="p-2 bd-highlight">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Event Join</th>
                            <th scope="col">Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection