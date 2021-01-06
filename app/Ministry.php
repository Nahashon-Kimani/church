<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ministry extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User', 'current_leader', 'id');
    }
}
