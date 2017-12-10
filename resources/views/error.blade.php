<!-- error.blade.php -->

<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
		<title>Uh Oh</title>
        <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">
        <link href="{{ URL::asset('css/site.css') }}" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>
    <body>
		
        <div>
            <div id="react"></div>
			<script src="{{asset('js/app.js')}}" ></script>
        </div>

        <div id='err_msg'>
            <h1>A problem has occurred</h1>
            <h3>{{$err_msg}}</h3>
        </div>

    </body>
</html>