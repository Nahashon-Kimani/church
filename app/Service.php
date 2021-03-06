<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User', 'created_by', 'id');
    }

    public function serviceName()
    {
        return $this->hasMany('App\GivingCategory');
    }
}
