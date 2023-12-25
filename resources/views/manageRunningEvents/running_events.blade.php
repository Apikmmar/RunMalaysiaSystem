@extends('components.master')

@section('content')
    
    <br>
    <div class="container">
    @php $eventCount = count($events); @endphp

    @if ($eventCount > 0)
    @for ($i = 0; $i < $eventCount; $i += 3)
        <div class="d-flex justify-content-evenly">
            @for ($j = $i; $j < min($i + 3, $eventCount); $j++)
                <div class="card" style="width: 25rem; height: 25rem;">
                    <img src="{{ asset('storage/' . $events[$j]->event_bannerpath) }}" class="card-img-top" style="object-fit: cover; height: 65%;" alt="running-event-poster">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">{{ $events[$j]->event_name }}</h5>
                        <p class="card-text">{{ $events[$j]->event_date }} {{ $events[$j]->event_time }} {{ $events[$j]->event_location }}</p>
                        <a href="{{ route('view_event', $events[$j]->id) }}" class="btn btn-primary">Join Event</a>
                    </div>
                </div>
            @endfor
        </div>
        <br>
    @endfor
    @else
        <p class="h3 fw-bold text-center">No Available Events.</p>
    @endif
    </div>

@endsection