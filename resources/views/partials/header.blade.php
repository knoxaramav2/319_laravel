<head>
<link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">
        <link href="{{ URL::asset('css/site.css') }}" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<div id='nav-bar' class='nav-bar'>
    <div class='nav-item'>
        <a href='/login'>Login/Signup</a>
    </div>
    @if(isset($username))
    <div class='nav-item'>
        <a href='/profile'>Profile ({{$username}})</a>
    </div>
    <div class='nav-item'>
        <a href='/' onclick='logout(); return false;'>Logout</a>
    </div>
    @endif
    <div class='nav-item'>
        <a href='/help'>Help</a>
    </div>
</div>

<script>
    function logout(){
        $.ajax({
            url: '/logout',
            type: 'GET',
            success: function(){
                document.location.href = '/';
            }
        });
    }
</script>