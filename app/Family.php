<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Family extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User', 'created_by', 'id');
    }

    public function member()
    {
        return $this->belongsTo('App\Member', 'family_name', 'id');
    }

    public function memberName()
    {
        return $this->belongsTo('App\Member', 'member_id', 'id');
    }
    
}
