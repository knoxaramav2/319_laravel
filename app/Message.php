<?php
namespace App;
use App\User;
use Illuminate\Database\Eloquent\Model;
class Message extends Model
{

    protected $appends = array('user');
	
	
    public function getUserAttribute($value
	) {
        return User::find($this->user_id);
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}