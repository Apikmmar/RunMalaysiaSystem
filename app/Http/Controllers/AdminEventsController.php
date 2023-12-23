<?php

namespace App\Http\Controllers;

use App\Models\Event;
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
        
        if($file = $request->file('eventphoto')) {
            $eventphoto = $file->getClientOriginalName();
            $file->move(public_path('images'), $eventphoto);
            $input['event_bannerpath'] = $eventphoto;
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
        
        return redirect('manage_events')->with('success', 'Event deleted successful!.');
    }

    public function showEventDetails($id) {
        $event = Event::findOrFail($id);

        return view('manageRunningEvents.manage_event_details', compact('event'));
    }

    public function updateEvent(Request $request, $id) {
        $event = Event::findOrFail($id);
        $event->update($request->all());

        return redirect('event_details/'.$id)->with('success', 'Event updated successfully');
    }
}
