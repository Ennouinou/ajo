<?php

namespace App\Http\Controllers;

use App\Event;
use App\EventAttachment;

class EventController extends Controller
{
    public function index(){
        $events= Event::with('attachments')->latest()->paginate(9);
        return view('events.index',[
            'events' => $events
        ]);
    }
    public function show($id)
    {
        $videos = EventAttachment::all()->where('event_id',$id)->where('type','v');
        $pictures = EventAttachment::all()->where('event_id',$id)->where('type','f');
        return view('events.show',[
            'event'=> Event::find($id),
            'videos'=>$videos,
            'pictures' => $pictures
        ]);
    }


}
