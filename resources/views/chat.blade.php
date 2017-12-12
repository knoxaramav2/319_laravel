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
    </head>
<body>

    <div >
        <div class="container">
            <div id="react" class="col-md-12">
                    @yield('content')
            </div>
        </div>
    </div>
	

    <!-- JavaScripts -->
  <script src="{{ asset('js/app.js') }}"></script>
   <script>
    //const csrf_token = "{{ csrf_token() }}";
    </script>
</body>
</html>