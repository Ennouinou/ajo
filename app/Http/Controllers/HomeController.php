<?php

namespace App\Http\Controllers;

use App\Event;
use App\Post;
use Carbon\Carbon;

class HomeController extends Controller
{
    public function home(){
        $now =Carbon::now();
        $events = Event::all()->where('date', '>=', $now->toDateTimeString());
        $posts = Post::all();
        return view('index',[
            'events' => $events,
            'posts'  => $posts,
        ]);
    }
}
