<!-- welcome.blade.php -->

<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
		<title>Chat</title>
        <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">
        <link href="{{ URL::asset('css/site.css') }}" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/0.12.16/vue.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/1.3.7/socket.io.min.js"></script>
    </head>
	
	
    <body>
		<div>
            <div id="react"></div>
			<script src="{{asset('js/app.js')}}" ></script>
        </div>
		
		<div id="chat" class="container">
		
		   <h1>Game Chat</h1>

		  <ul id="messages">
			<li v-repeat="message: messages">@{{message}}</li>
		  </ul>
		  <form v-on="submit: send">
			<input v-model="message"></input>
			<button>Send</button>
		  </form>
        </div>
		
		
		<script type="text/javascript" src="{{ asset('js/chat.js') }}"></script>

		
    </body>
</html>