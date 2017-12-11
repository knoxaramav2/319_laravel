<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
		<title>Help</title>
        <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">
        <link href="{{ URL::asset('css/site.css') }}" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>
    <body>
        
		<div id="react"></div>
        <script src="{{asset('js/app.js')}}" ></script>
		
        <div class='blog'>
            <h2>About Go Fish!</h2>
            <p>A simple browser version of the game Go Fish.</p>
            <p>
                Similar to the original card game, the rules are simple:
                Two players are given a hand of 5 cards from a standard playing
                card deck. With each turn, players attempt to complete a set of 
                four of a kind set of a particular card in order to earn a point. 
            </p>
            
            <p>
                Each turn, alternating between players, the active player can request
                a card from the opposite player. If said player has a card of the requested
                suit, the player must forefeit the card. When a player collects four of a kind,
                those cards are removed from play, and the player gets a point.
            </p>

        </div>

    </body>
</html>