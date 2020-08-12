<?php

namespace App\Http\Controllers\Dashboard;

use App\Event;
use App\EventAttachment;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::orderBy('date','desc')->get();
        return view('dashboard.events.index',[
            'events' => $events
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.events.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title'=>'bail|required|min:4|max:100',
            'description'=>'required',
            'date'=>'required',
        ]);
        // Create the event object and add it to the db :
        $event = new Event();
        $event->title = $request->input('title');
        $event->description = $request->input('description');
        $event->activity = $request->activities;

        $event->date = $request->date;
        $event->save();
        $event_id = $event->id;
        /*
         * Vidéos
         */
        if(is_array($request->video)){
            foreach ($request->video as $video){
                if($video != ""){
                    $event_attachments = new EventAttachment();
                    $event_attachments->type = "v";
                    $event_attachments->value = $video;
                    $event_attachments->event_id =  $event_id;
                    $event_attachments->save();
                }
            }
        }
        /*
         * Images
         */
        if(is_array($request->image)){
            $i = 0;
            foreach ($request->image as $img){
                if ($img != "") {
                    $i++;
                    $image = $img;
                    $name = $i . '-' . $image->getClientOriginalName();
                    $destinationPath = public_path('/assets/images/events/'.$event_id );
                    $image->move($destinationPath, $name);
                    $event_attachments = new EventAttachment();
                    $event_attachments->type = "f";
                    $event_attachments->value = $name;
                    $event_attachments->event_id = $event_id;
                    $event_attachments->save();
                }
            }
        }
        return redirect()->route('events.show',$event_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $event = Event::find($id);
        if(Auth::user()->role == 1){
            return view('dashboard.events.edit',[
                'event'=> $event,
            ]);
        }
        else{
            return redirect()->route('dashboard.events.index');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title'=>'bail|required|min:4|max:100',
            'description'=>'required',
            'date'=>'required',
        ]);
        $event = Event::findOrFail($id);
        $event->title = $request->input('title');
        $event->description = $request->input('description');
        $event->activity = $request->activities;
        $event->date = $request->date;
        $event->save();
        $event_id  = $event->id;
        return redirect()->route('events.show',$event_id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $attachments = EventAttachment::all()->where('event_id','=',$id);
        foreach ($attachments as $attachment){
            EventAttachment::destroy($attachment->id);
            if($attachment->type == 'f')
                unlink(public_path('/assets/images/events/'.$attachment->value));
        }
        Event::destroy($id);
        return redirect()->route('dashboard.events.index');
    }
}
