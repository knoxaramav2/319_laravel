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

Route::get('/help', function(){
    return view('help');
});

Route::get('/login', 'UserController@loginView');
Route::post('/login', 'UserController@loginAs');

Route::get('/add-item', function () {
    return view('welcome');
});

Route::get('/display-item', function () {
    return view('welcome');
});

Route::resource('items', 'ItemController');