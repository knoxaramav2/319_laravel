<?php

namespace App\Http\Controllers;


use App\User;
use App\Game;
use App\TempState;

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
        $game = Game::where('id', '=', Input::get('game_id'))->first();
        return view('gamewindow')->with(compact('game'));
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
        $host = User::where('name', '=', Session()->get('username'))->first();
        
        if (isset($client) == false){
            $validator->getMessageBag()->add('client_name', 'User not found');
            return Redirect::back()->withErrors($validator)->withInput();
        }

        if ($validator->fails()){
            return Redirect::back()->withErrors($validator)->withInput();
        }

        //get user information
        $game = Game::create([
            'name' => $request->get('game_name'),
            'host_id' => $host->id,
            'client_id' => $client->id
        ]);

        $state = TempState::create([
            'host_hand' => '',
            'client_hand' => '',
            'deck' => ''
        ]);

        return view('profile');
    }

    public function acceptInvite()
    {
        $game = Game::where('id', '=', Input::get('game_id'))->first();
        $game->client_accepted = '1';
        $game->save();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $game = Game::where('id', '=', $id)->first();

        return view('gamewindow')->with(compact('game'));
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
