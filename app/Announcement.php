<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Announcement extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User', 'created_by', 'id');
    }
}
