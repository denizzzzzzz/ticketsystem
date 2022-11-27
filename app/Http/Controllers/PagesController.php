<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function ViewHomePage(){
        return view('Home');
    }

    public function ViewContactPage(){
        return view('contactpage');
    }

    public function ViewAboutPage(){
        return view('aboutpage');
    }
    public function ViewEventsPage(){
        return view('events');
    }



}
