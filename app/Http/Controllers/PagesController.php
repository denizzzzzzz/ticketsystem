<?php

namespace App\Http\Controllers;

use App\Models\Events;
use Illuminate\Http\Request;


class PagesController extends Controller
{
    public function ViewHomePage(){
        $events = Events::all();
        return view('Home',[
            "events"=>$events,
        ]);
    }

    public function ViewContactPage(){
        return view('contactpage');
    }

    public function ViewAboutPage(){
        return view('aboutpage');
    }
    public function ViewEventsPage(){
        $events = Events::all();
        return view('events',[
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
        return redirect('Events')->with('flash_message', 'Team Addedd!');
    }



}
