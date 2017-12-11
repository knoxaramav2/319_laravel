<!-- welcome.blade.php -->

<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
		<title>Socket</title>
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
		
		
		   <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
			<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
			<script src="https://cdn.socket.io/socket.io-1.3.4.js"></script>
 
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2" >
              <div id="messages" ></div>
            </div>
        </div>
    </div>
    <script>
        var socket = io.connect('http://localhost:8890');
        socket.on('message', function (data) {
            $( "#messages" ).append( "<p>"+data+"</p>" );
          });
    </script>
		
		
    </body>
</html>