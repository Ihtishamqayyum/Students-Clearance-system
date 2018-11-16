<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class program extends Model
{
    public function program()
    {
        return $this->belongsTo('App\department','department_id','id');
    }
}
