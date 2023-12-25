@extends('components.master')

@section('content')

    <br>
    <div class="container">

    @if(session('success'))
        <div id="success-message" class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
        <div class="d-flex flex-column bd-highlight mb-3">
            <div class="bd-highlight">
            
            @if ($users->isEmpty())
                <p class="h4 fw-bold text-center">
                    No Registered User Yet.
                </p>
            @else
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
                    @php $number = 1; @endphp
                    @foreach ($users as $user)    
                        <tr>
                            <th scope="row" class="text-center">{{ $number }}</th>
                            <td class="text-center">{{ $user->user_ic }}</td>
                            <td class="text-center">{{ $user->user_fullname }}</td>
                            <td class="text-center">
                            @if ($user->participants->isEmpty())
                                <p>No events joined</p>
                            @else
                                <ul style="list-style-position: inside;">
                                    @foreach ($user->participants as $participant)
                                    <li>
                                    @if($participant->event)
                                        Event: {{ $participant->event->event_name }}
                                    @else
                                        No event available
                                    @endif
                                </li>
                                    @endforeach
                                </ul>
                            @endif
                            </td>
                            <td class="text-center">
                                <form action="/listofuser/{{ $user->id }}" method="post" style="display: inline;" onsubmit="return confirm('Are you sure you want to delete this user?');">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn">
                                        <img src="{{ asset('images/garbage.png') }}" class="operation_icon" alt="delete_user.png">
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @php $number = $number + 1; @endphp
                    @endforeach
                    </tbody>
                </table>
            @endif

            </div>
        </div>
    </div>
    
@endsection