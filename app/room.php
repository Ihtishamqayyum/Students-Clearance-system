<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class room extends Model
{
    public function roomNo()
    {
        return $this->belongsTo('App\rAlot','room_id','id');
    }
}
