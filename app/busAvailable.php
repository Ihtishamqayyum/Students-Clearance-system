<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class busAvailable extends Model
{
    public function busType()
    {
        return $this->belongsTo('App\busAlot','bus_id','id');
    }
}
