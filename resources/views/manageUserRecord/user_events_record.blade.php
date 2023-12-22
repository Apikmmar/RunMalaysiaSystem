@extends('components.master')

@section('content')

    <br>
    <div class="container">
        <div class="d-flex flex-column bd-highlight mb-3">
            <div class="p-2 bd-highlight">
                <p class="h4 fw-bold text-center">
                    No Registered User Yet.
                </p>
                <p class="h4 fw-bold">
                    Listed User:
                </p>
            </div>
            <div class="p-2 bd-highlight">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">IC Number</th>
                            <th scope="col">Name</th>
                            <th scope="col">Joined Event</th>
                            <th scope="col">Operation</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>list user</td>
                            <td>
                                <button class="btn">
                                    <img src="{{ asset('images/garbage.png') }}" class="operation_icon" alt="delete_user.png">
                                </button>
                            </td>
                        </tr>
                        <!-- Add more rows as needed -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
@endsection