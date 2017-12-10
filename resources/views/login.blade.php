<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
		<title>Login</title>
        <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">
        <link href="{{ URL::asset('css/site.css') }}" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>
    <body>
        @include('partials/header')
        <script src="{{asset('js/app.js')}}" ></script>

        @if(isset($user))

        <a>Logout</a>

        @else

        TODO: Login form, Signup form
		
		<h3>Login</h3>
		<form method="post" action="/login">
			{{ csrf_field() }}
			<label>Username</label>
			<input type="text" placeholder="Enter Username" id="username" name="username">
			<br/>
			<label>Password</label>
			<input type="password" placeholder="Enter password" id="password" name="password">
			<br/><br/>
			<input type="button" value="Cancel" name="cancel" id="cancel" OnClick="location.href='/'">
			<input type="submit" value="Login" name="login" id="login">
			<br/><br/>
			<input type="button" value="Register Here" name="register" id="register" OnClick="location.href='/register'">

        @endif
		
    </body>
</html>