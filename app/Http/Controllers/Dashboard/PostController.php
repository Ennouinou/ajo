<?php

namespace App\Http\Controllers\Dashboard;

use App\Event;
use App\Http\Controllers\Controller;
use App\Post;
use App\PostAttachment;
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
            'description'=>'required',
        ]);
        // Create the post object and add it to the db :
        $post = new Post();
        $post->title = $request->input('title');
        $post->description = $request->input('description');
        $post->user_id = Auth::id();
        if($request->events !="NULL")
         $post->event_id =  $request->events;
        $post->save();
        $post_id = $post->id;
        /*
         * Vidéos
         */
        if(is_array($request->video)){
            foreach ($request->video as $video){
                if($video != ""){
                    $post_attachments = new PostAttachment();
                    $post_attachments->type = "v";
                    $post_attachments->value = $video;
                    $post_attachments->post_id =  $post_id;
                    $post_attachments->save();
                }
            }
        }
        /*
         * Images
         */
        if(is_array($request->image)){
            foreach ($request->image as $img){
                if ($img != "") {
                    $image = $img;
                    $name = time() . '.' . $image->getClientOriginalExtension();
                    $destinationPath = public_path('/assets/images/posts');
                    $image->move($destinationPath, $name);
                    $post_attachments = new PostAttachment();
                    $post_attachments->type = "f";
                    $post_attachments->value = $name;
                    $post_attachments->post_id = $post_id;
                    $post_attachments->save();
                }
            }
        }
        // flash message : durée de vie : 1 http request
        $request->session()->flash('status','Post is created !!');
        return redirect()->route('posts.show',$post_id);
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
     * @param int $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $post = Post::find($id);
        return view('dashboard.posts.edit',[
            'post'=> $post,
        ]);
    }

    /**
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request,  $id)
    {
        $post = Post::findOrFail($id);
        $post->title = $request->input('title');
        $post->description = $request->input('description');
        $post->save();
        $post_id  = $post->id;
        return redirect()->route('posts.show',$post_id);
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
