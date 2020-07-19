<?php

namespace App\Http\Controllers;

use App\Event;
use Carbon\Carbon;

class HomeController extends Controller
{
    public function home(){
        $now =Carbon::now();
        return view('index',[
            'events' => Event::all()->where('date', '>=', $now->toDateTimeString())
        ]);
    }
}
