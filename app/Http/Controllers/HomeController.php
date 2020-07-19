<?php

namespace App\Http\Controllers;

use App\Event;

class HomeController extends Controller
{
    public function home(){
        return view('index',[
            'events' => Event::all()
        ]);
    }
}
