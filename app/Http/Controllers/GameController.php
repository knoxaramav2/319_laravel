<?php

namespace App\Http\Controllers;


use App\User;
use App\Game;

use Illuminate\Http\Request;
use Session;
use Auth;
use Validator;
use Illuminate\Support\Facades\Input;
use Redirect;
use Hash;
use Log;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //pull game data

        return view('gamewindow');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate_rules = array(
            'game_name' => 'required',
            'client_name' => 'required'
        );

        $messages = array(
            'required' => 'Please fill in the :attribute field'
        );

        $validator = Validator::make(Input::all(), $validate_rules, $messages);

        $client = User::where('name', '=', Input::get('client_name'))->first();
        
        if (isset($client) == false){
            $validator->errors()->add('client_name', 'User not found');
        }

        if ($validator->fails()){
            return Redirect::back()->withErrors($validator)->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
