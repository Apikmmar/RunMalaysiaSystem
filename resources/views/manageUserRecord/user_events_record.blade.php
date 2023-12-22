@extends('components.master')

@section('content')

    <br>
    <div class="container">
        <div class="d-flex flex-column bd-highlight mb-3">
            <div class="bd-highlight">
                <p class="h4 fw-bold text-center">
                    No Registered User Yet.
                </p>
                <p class="h4 fw-bold">
                    Listed User:
                </p>
            </div>
            <div class="bd-highlight">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col" class="text-center">#</th>
                            <th scope="col" class="text-center">IC Number</th>
                            <th scope="col" class="text-center">Name</th>
                            <th scope="col" class="text-center">Joined Event</th>
                            <th scope="col" class="text-center">Operation</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row" class="text-center">1</th>
                            <td class="text-center">Mark</td>
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