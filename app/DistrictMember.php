<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DistrictMember extends Model
{
    public function memberName()
    {
        return $this->belongsTo('App\Member', 'member_id', 'id');
    }
}
