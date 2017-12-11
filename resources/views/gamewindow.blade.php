<!-- welcome.blade.php -->

<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
		<title>Play Go Fish!</title>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		
		<link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css"></link>
		<link href="{{ URL::asset('css/site.css') }}" rel="stylesheet"></link>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>
    <body>
        
        <div>
            <div id="react"></div>
			<script src="{{asset('js/app.js')}}" ></script>
        </div>	
	  
	  <div class="container">
        <div class='gamezone_info'>
            <span class='gamezone_info_item'>Host: {{$game->host_id}}</span>
            <span class='gamezone_info_item'>Client: {{$game->client_id}}</span>
            <span class='gamezone_info_item'>Game: {{$game->name}}</span>
            <br>
            <span class='gamezone_info_item' id='game_state'>| </span>
        </div>

        <div class='gamezone'>
            <h2>Your Hand</h2>
        </div>
        <div class='gamezone'>
            <h2>Your Hand</h2>
        </div>
	  
	  </div>
    </body>
</html>