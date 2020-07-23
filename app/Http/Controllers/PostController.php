<?php

namespace App\Http\Controllers;


use App\Post;
use App\PostAttachment;

class PostController extends Controller
{
    public function index(){
        $posts= Post::with('user')->orderBy('created_at','desc')->get();
        return view('posts.index',[
            'posts' => $posts
        ]);
    }
    public function show($id)
    {
        $videos = PostAttachment::all()->where('post_id',$id)->where('type','v');
        $pictures = PostAttachment::all()->where('post_id',$id)->where('type','f');
        return view('posts.show',[
            'post'=> Post::find($id),
            'videos'=>$videos,
            'pictures' => $pictures
        ]);
    }


}
