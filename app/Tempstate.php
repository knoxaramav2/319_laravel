<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tempstate extends Model
{
    protected $fillable = [
        'host_hand', 'client_hand', 'deck', 'host_points',
        'client_points', 'turn_state'
    ];
}
