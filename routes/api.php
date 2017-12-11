<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//User API routes
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/testmail', function(){
    return view('emails/welcomeMail');
});
Route::get('/logout', 'UserController@logout');

//Game API routes
Route::get('/acceptInvite', 'GameController@acceptInvite');
