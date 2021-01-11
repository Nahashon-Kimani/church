<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ministry extends Model
{
    public function currentLeader()
    {
        return $this->belongsTo('App\Member', 'current_leader', 'id');
    }
}
