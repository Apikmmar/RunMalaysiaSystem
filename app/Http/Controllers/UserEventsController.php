<?php
// BCS3453 [PROJECT]-SEMESTER 2324/1
// Student ID: CB21016
// Student Name: MUHAMMAD AFIQ AMMAR BIN MURAD

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Participant;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
    
    public function joinEvent($id) {
        $user = Auth::user();
    
        Participant::create(['user_id' => $user->id, 'event_id' => $id]);
    
        return redirect()->route('view_event', ['id' => $id])->with('success', 'Successfully register to this event!');
    }
}
