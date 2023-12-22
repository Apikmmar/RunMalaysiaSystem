<?php

namespace App\Http\Controllers;

use App\Models\Event;
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

        return redirect('/manage_events')->with('success', 'Event registration successful!.');;
    }
}
