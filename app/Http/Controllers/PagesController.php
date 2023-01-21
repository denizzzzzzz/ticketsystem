<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PagesController extends Controller
{
    public function ViewHomePage(){
        $events = Event::all();
        return view('/guestuserpages/home',[
            "events"=>$events,
        ]);
    }
    public function ViewContactPage(){
        return view('/guestuserpages/contactpage');
    }

    public function ViewAboutPage(){
        return view('/guestuserpages/aboutpage');
    }
    public function ViewEventsPage(){
        $events = Event::all();
        return view('/verifieduserpages/eventspage',[
            "events"=>$events,
        ]);
    }
    public function index(){
        $events = Event::all();
        return view('/verifieduserpages/createpage',[
            "events"=>$events,
        ]);
    }
    public function store(Request $request)
    {
        $newEvent = new Event();
        $newEvent->location = $request->input('location');
        $newEvent->name = $request->input('name');
        $newEvent->description = $request->input('description');
        $newEvent->event_start = $request->input('event_start');
        $newEvent->event_end = $request->input('event_end');
        $newEvent->price = $request->input('price');
        Storage::makeDirectory('public/images');
        $src = Storage::putFile('public/images', $request->file('photo'));
        $src =str_replace('public', 'storage', $src);
        $newEvent->photo = $src;
        $newEvent->save();
        return redirect('events');
    }

    public function showEditEvents($id) {
        $events = Event::findOrFail($id);
        return view('/verifieduserpages/editeventspage', [
            'event' => $events
        ]);
    }
    public function processEditEvents(Request $request, $id) {
        $Editevent = Event::findOrFail($id);
        $Editevent->location = $request->location;
        $Editevent->name = $request->name;
        $Editevent->description = $request->description;
        $Editevent->event_start = $request->event_start;
        $Editevent->price = $request->price;
        Storage::makeDirectory('public/images');
        $src = Storage::putFile('public/images', $request->file('photo'));
        $src =str_replace('public', 'storage', $src);
        $Editevent->photo = $src;
        $Editevent->save();

        return redirect()->route('events');
    }

    public function deleteEvent($id) {
        $deleteEvent = Event::findOrFail($id);
        $deleteEvent->delete();

        return redirect()->route('events');
    }
}
