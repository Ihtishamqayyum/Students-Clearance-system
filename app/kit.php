<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kit extends Model
{
    public function alotKits()
    {
        return $this->belongsTo('App\alotKit','kit_id','id');
    }
}
