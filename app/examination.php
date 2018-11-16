<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class examination extends Model
{
    public function student()
    {
        return $this->belongsTo('App\student','student_id','id');
    }
    public function subject(){
        return $this->belongsTo('App\subject','subject_id','id');
    }
}
