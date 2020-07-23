<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Post;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $posts= Post::with('user')->orderBy('created_at','desc')->get();
        return view('dashboard.posts.index',[
            'posts' => $posts
        ]);
    }
    public function show($id)
    {

    }


}
