<?php

namespace App\Http\Controllers;

use App\Event;

class EventController extends Controller
{
    public function index(){
        return view('events.index',[
            'events' => Event::all()
        ]);
    }
    public function show($id)
    {
        return view('events.show',[
            'event'=> Event::find($id)
        ]);
    }


}
