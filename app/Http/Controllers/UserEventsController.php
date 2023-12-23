<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Carbon\Carbon;
use Illuminate\Http\Request;

class UserEventsController extends Controller
{
    //
    public function retrieveAllEvent() {
        $events = Event::all();

        $events->transform(function ($event) {
            $event->event_date = Carbon::parse($event->event_date)->format('j F Y');
            $event->event_time = Carbon::parse($event->event_time)->format('h:i A');
            return $event;
        });

        return view('manageRunningEvents.running_events', compact('events'));
    }

    public function retrieveEventDetails($id) {
        $event = Event::findOrFail($id);

        $event->event_date = Carbon::parse($event->event_date)->format('j F Y');
        $event->event_time = Carbon::parse($event->event_time)->format('h:i A');
    
        return view('manageRunningEvents.event_details', compact('event'));
    }    
    
}
