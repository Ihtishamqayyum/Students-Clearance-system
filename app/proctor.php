<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class proctor extends Model
{
    public function fine()
    {
        return $this->belongsTo('App\Student','student_id','id');
    }
    public function std()
    {
        return $this->belongsTo('App\Student','student_id','id');
    }
}
