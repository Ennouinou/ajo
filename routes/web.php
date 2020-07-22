<?php

use App\Event;
use App\Post;
use Carbon\Carbon;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function(){
    $now =Carbon::now();
    $events = Event::all()->where('date', '>=', $now->toDateTimeString());
    $posts = Post::all();
    return view('index',[
        'events' => $events,
        'posts'  => $posts,
    ]);
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/signup', function () {
    return view('signup');
});
Route::get('/administration', function () {
    return view('dashboard.index');
});

Route::get('/sidebar-left', function () {
    return view('sidebar-left');
});
Route::resource('/events','EventController');
Route::resource('/posts','PostController');


Auth::routes();

Route::get('/administration', 'HomeController@index')->name('dashboard');

Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function (){
    Route::resource('/users','UsersController');
});
