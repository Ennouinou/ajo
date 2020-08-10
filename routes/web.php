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

Route::get('/','VisitorController@home');
Route::get('/about','VisitorController@about');
Route::get('/administration', function () {
    return view('dashboard.index');
});

Route::get('/sidebar-left', function () {
    return view('sidebar-left');
});
Route::resource('/events','EventController');
Route::resource('/posts','PostController');


Auth::routes(
    ['verify' => true]
);

Route::get('/administration', 'HomeController@index')->name('dashboard')->middleware('verified');

Route::namespace('Dashboard')->prefix('dashboard')->name('dashboard.')->group(function (){
    Route::resource('/events','EventController');
    Route::resource('/users','UsersController');
    Route::resource('/posts','PostController');
    Route::get('/myPosts','PostController@myIndex')->name('myPosts');

});
