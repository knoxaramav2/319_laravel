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

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        Session::flush();
        //validate
        $validate_rules = array(
            'name' => 'required|unique:users',
            'password' => 'required|confirmed',
            'password_confirmation' => 'required',
            'email' => 'required|email|unique:users,email'
        );

        $messages = array(
            'required' => 'Please fill in the :attribute field',
            'num' => 'The :attribute field must contain only letters and numbers',
            'unique' => 'A user already exists with the given :attribute',
            'confirm' => 'Passwords do not match'
        );

        $validator = Validator::make(Input::all(), $validate_rules, $messages);

        if ($validator->fails()){
            return Redirect::back()->withErrors($validator)->withInput();
        }

        $user = User::where('email', '=', $request->get('email'))->first();
        if ($user !== null){
            return view('welcome', ['name' => $user->name]);
        }

        User::create([
            'name' => $request->get('name'),
            'password' => Hash::make($request->get('password')),
            'email' => $request->get('email')
        ]);

        $user = User::where('name', '=', $request->get('name'))->first();

        if(isset($user) === false){
            return view('error', ['err_msg' => 'An error occurred while creating your profile']);
        }

        Session::put('username', $user->name);

        Session::flash('flash_message', 'User Added');
        return view('/welcome')->with(compact('user'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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

    public function profile(){
        $user = User::where('name', '=', Session()->get('username'))->first();
        $games = Game::where('host_id', '=', $user->name)->get();
        $invites = array();

        return view('profile', ['games' => $games, 'invites' => $invites])->with(compact('user'));
    }

    public function loginView(){

        //Get user

        return view('login');
    }

    public function loginAs(){

        Session::flush();

        //validate
        $validate_rules = array(
            'name' => 'required',
            'password' => 'required'
        );

        $messages = array(
            'required' => 'Please fill in the :attribute field',
        );

        $validator = Validator::make(Input::all(), $validate_rules, $messages);

        if ($validator->fails()){
            return Redirect::back()->withErrors($validator)->withInput();
        }

        $user = User::where('name', '=', Input::get('name'))->first();

        if (Hash::check(Input::get('password'), $user->password)){
            return view('error', ['err_msg' => 'Password does not match user']);
        }

        Session::put('username', $user->name);

        return redirect()->intended('/');
    }

    public function logout(){
        Session::flush();
        return view('welcome');
    }
}
