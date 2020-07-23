<?php

namespace App\Http\Controllers\Dashboard;

use App\Event;
use App\Http\Controllers\Controller;
use App\Post;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function myIndex(){
        $user_id = Auth::id();
        $posts= Post::orderBy('created_at','desc')->where('user_id',$user_id)->get();
        return view('dashboard.posts.myIndex',[
            'posts' => $posts
        ]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$posts= Post::with('user','event')->orderBy('created_at','desc')->get();
        $posts= Post::orderBy('created_at','desc')->with('user','event')->get();
        return view('dashboard.posts.index',[
            'posts' => $posts
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $events = Event::orderBy('created_at','desc')->get();
       return view('dashboard.posts.create',[
           'events' => $events
       ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validation : if we are working with Request
        $validatedData = $request->validate([
            'title'=>'bail|required|min:4|max:100',
            'description'=>'required'
        ]);
        // Create the post object and add it to the db :
        $post = new Post();
        $post->title = $request->input('title');
        $post->description = $request->input('description');
        $post->user_id = Auth::id();
        if($request->events !="NULL")
         $post->event_id =  $request->events;
        $post->save();
        // flash message : durée de vie : 1 http request
        $request->session()->flash('status','Post is created !!');
        return redirect()->route('dashboard.myPosts');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
