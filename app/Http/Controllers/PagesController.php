<?php

namespace App\Http\Controllers;

use App\Models\Events;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function ViewHomePage(){
        $events = Events::all();
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
        $events = Events::all();
        return view('/verifieduserpages/eventspage',[
            "events"=>$events,
        ]);
    }

    public function index(){
        $events = Events::all();
        return view('createpage',[
            "events"=>$events,
        ]);
    }

    public function store(Request $request)
    {
        $input = $request->all();
        Events::create($input);
        return redirect('eventspage')->with('flash_message', 'Evenement toegevoegd!');
    }

    public function destroy($id)
    {
        Events::destroy($id);
        return redirect('eventspage')->with('flash_message', 'Evenement verwijderd!');  
    }
}
