<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SessionUser extends Model
{
    protected $table = 'sessions_users';
    
    public function user()
    {
        return $this->belongsTo('App\User');
    }

}
