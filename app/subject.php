<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class subject extends Model
{
    public function department()
    {
        return $this->belongsTo('App\department','department_id','id');
    }
    public function program()
    {
        return $this->belongsTo('App\program','program_id','id');

    }
    public function semester()
    {
        return $this->belongsTo('App\semester','semester_id','id');

    }
    public function subject()
    {
        return $this->belongsTo('App\examination');
    }
   /* public function student()
    {
    return $this->belongsTo('App\student','student_id','id');
    }*/
}
