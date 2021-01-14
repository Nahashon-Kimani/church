<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{

    public function member()
    {
        return $this->belongsTo('App\Member', 'member_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo('App\User', 'created_by', 'id');
    }

    public function service()
    {
        return $this->belongsTo('App\Service', 'service_id', 'id');
    }
}
