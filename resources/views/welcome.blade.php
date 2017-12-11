<!-- welcome.blade.php -->

<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
		<title>Go Fish!</title>
        
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
	   @if(isset($username))
	  <div className='nav-item'>
		<a href='/profile'>Profile ({{$username}})</a>
      </div>
      <div className='nav-item'>
        <a href='/' onclick='logout(); return false;'>Logout</a>
      </div>
      @endif

	  
	  </div>
    </body>
</html>