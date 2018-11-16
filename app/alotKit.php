<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class alotKit extends Model
{
    public function kits()
    {
        return $this->belongsTo('App\kit', 'kit_id', 'id');
    }

    public function student()
    {
        return $this->belongsTo('App\Student','student_id','id');
    }
}
