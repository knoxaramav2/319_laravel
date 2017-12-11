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

//use Session;

Route::resource('users', 'UserController');
Route::resource('games', 'GameController');

Route::get('/', function () {
    return view('welcome', ['username' => Session()->get('username')]);
});

Route::get('/help', function(){
    return view('help', ['username' => Session()->get('username')]);
});

Route::get('/login', 'UserController@loginView');
Route::post('/login', 'UserController@loginAs');

Route::get('/logout', 'UserController@logout');
Route::get('/profile', 'UserController@profile');


Route::get('/add-item', function () {
    return view('welcome');
});

Route::get('/display-item', function () {
    return view('welcome');
});

Route::get('/chat', function () {
    return view('chat');
});

Route::get('socket', 'ChatController@index');
Route::post('sendmessage', 'ChatController@sendMessage');
Route::get('writemessage', 'ChatController@writemessage');


Route::get('/test', function () {
    return view('test', ['username' => Session()->get('username')]);
});

Route::get('/home', 'HomeController@index')->name('home');


Route::resource('items', 'ItemController');