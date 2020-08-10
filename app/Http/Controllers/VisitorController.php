<?php

namespace App\Http\Controllers;

use App\Event;
use App\Mail\SendMail;
use App\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class VisitorController extends Controller
{
    public function home(){
        $now =Carbon::now();
        $events = Event::all()->where('date', '>=', $now->toDateTimeString());
        $posts = Post::orderBy('created_at','desc')->with('attachments')->get()->take(7);
        return view('index',[
            'events' => $events,
            'posts'  => $posts,
        ]);
    }
    public function about(){
        return view('about');
    }
}
