<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
		<title>Profile</title>
        <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">
        <link href="{{ URL::asset('css/site.css') }}" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>
    <body>
        
    <div>
            <div id="react"></div>
			<script src="{{asset('js/app.js')}}" ></script>
        </div>	

        <div class='profile_bg'>
            <h1>{{$user->name}}'s Profile</h1>
            
            <div class='profile_stats'>
                <div>
                    <span>Joined: {{date('m-d-Y', strtotime($user->created_at))}}</span>
                </div>
                <div>
                    <span>Email: {{$user->email}}}</span>
                </div>
                <div>
                    <span>Id: {{$user->id}}</span>
                </div>
                <div>
                    <h3>Game Stats</h3>
                </div>
                <div>
                    <span>Wins: {{$user->wins}}</span>
                </div>
                <div>
                    <span>Losses: {{$user->losses}}</span>
                </div>
            </div>
            <div>
                <h3>Manage Games</h3>
            </div>

            <table class='game_list'>
                <tr class='game_list_item'>
                    <th>Game</th>
                    <th>Created</th>
                    <th>Continue</th>
                </tr>
                @foreach($hosted_games as $game)
                <tr class='game_list_item'>
                    <td>{{$game->name}}</td>
                    <td>{{$game->created_at}}</td>
                    <td><button>Continue</button></td>
                </tr>
                @endforeach
            </table>

            <div>
                <h3>Joined Games</h3>
                <table class='game_list'>
                <tr class='game_list_item'>
                    <th>Creator</th>
                    <th>Created</th>
                    <th>Continue</th>
                </tr>
                @foreach($joined_games as $game)
                <tr class='game_list_item'>
                    <td>{{$game->host_id}}</td>
                    <td>{{$game->created_at}}</td>
                    <td><button>Continue</button></td>
                </tr>
                @endforeach
                </table>
            </div>

            <div>
                <h3>Game Invitations</h3>
                <table class='game_list'>
                <tr class='game_list_item'>
                    <th>Creator</th>
                    <th>Created</th>
                    <th>Join</th>
                </tr>
                @foreach($invites as $game)
                <tr class='game_list_item'>
                    <td>{{$game->host_id}}</td>
                    <td>{{$game->created_at}}</td>
                    <td><button>Join</button></td>
                </tr>
                @endforeach
                </table>
            </div>

            <div>
                <h3>Create new game</h3>
            </div>

            @foreach($errors->all() as $error)
            <div class='error'>
                {{$error}}
            </div>
            @endforeach

            <form method="POST" id='game_form' action="games">
                <div>
                    <label for="game_name">Game Name</label>
                    <input type="text" id="game_name" name='game_name'></input>
                </div>
                <div>
                    <label for="client_name">Invite Player</label>
                    <input type="text" id="client_name" name='client_name'></input>
                </div>
                <div>
                    <input type="submit" value="Create new game"></input>
                </div>
                    
                {{csrf_field()}}
            </form>

        </div>
    </body>
</html>