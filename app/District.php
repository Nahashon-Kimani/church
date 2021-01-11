<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User', 'created_by', 'id');
    }

    public function deconInCharge()
    {
        return $this->belongsTo('App\Member', 'deacon_in_charge', 'id');
    }
}
