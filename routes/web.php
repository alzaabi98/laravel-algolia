<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

use Illuminate\Http\Request;

Route::get('search', function(Request $request){
    
    if ($request->has('q')) {
        $q = $request->q  ;

        $users = App\User::search($q)->get();
       
    
        return $users;
    } else {
        return response()->json('not found');
    }
   
  
});


Route::get('/searchPosts', function(Request $request) {

    if ($request->has('q')) {
        $q = $request->q  ;

        $posts = App\Post::search($q)->get();
       
    
        return $posts;
    } else {
        return response()->json('not found');
    }
});

Route::view('/instantsearch', 'instantsearch');

Route::view('/instantpost', 'instantpost');