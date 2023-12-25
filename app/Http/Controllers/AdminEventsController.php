<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Participant;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AdminEventsController extends Controller
{
    public function createEvent(Request $request) {
        $input = $request->all();
        $input['event_name'] = $request->eventname;
        $input['event_desc'] = $request->eventdesc;
        $input['event_date'] = $request->eventdate;
        $input['event_time'] = $request->eventtime;
        $input['event_location'] = $request->eventlocation;
        
        if ($request->hasFile('eventphoto')) {
            $file = $request->file('eventphoto');
            $path = $file->store('eventphoto', 'public');
            $input['event_bannerpath'] = $path;
        }
        
        Event::create($input);

        return redirect('manage_events')->with('success', 'Event registration successful!.');;
    }

    public function readAllEvent() {
        $events = Event::all();

        $events->transform(function ($event) {
            $event->event_date = Carbon::parse($event->event_date);
            $event->event_time = Carbon::parse($event->event_time);
            return $event;
        });

        return view('manageRunningEvents.manage_events', compact('events'));
    }
    
    public function destroyEvent($id) {
        $event = Event::findOrFail($id);
        $event->forceDelete();
        Participant::where('event_id', $event->id)->delete();
        
        return redirect('manage_events')->with('success', 'Event deleted successful!.');
    }

    public function showEventDetailsAndParticipant($id) {
        $event = Event::findOrFail($id);

        $event2 = Event::findOrFail($id);
        $participants = $event2->participants;

        return view('manageRunningEvents.manage_event_details', compact('event', 'participants'));
    }

    public function updateEvent(Request $request, $id) {
        $event = Event::findOrFail($id);

        $input['event_name'] = $request->eventname;
        $input['event_desc'] = $request->eventdesc;
        $input['event_date'] = $request->eventdate;
        $input['event_time'] = $request->eventtime;
        $input['event_location'] = $request->eventlocation;

        if ($request->hasFile('eventphoto')) {
            $file = $request->file('eventphoto');
            $path = $file->store('eventphoto', 'public');
            $input['event_bannerpath'] = $path;
        }

        $event->update($input);

        return redirect()->route('manage_events')->with('success', 'Event updated successful!');
    }
}
