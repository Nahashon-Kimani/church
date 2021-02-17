<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GivingCategory extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User', 'created_by', 'id');
    }

   public function serviceName()
   {
       return $this->belongsTo('App\Service', 'service_id', 'id');
   }
}
