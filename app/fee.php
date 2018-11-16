<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class fee extends Model
{
    public function fee()
    {
        return $this->belongsTo('App\Student','student_id','id');
    }
    public function type()
    {
        return $this->belongsTo('App\feeType','level','id');
    }
    public function studentfee()
    {
        return $this->hasMany('App\busAlot','id','student_id');
    }
    public function studenthostelfee()
    {
        return $this->hasMany('App\rAlot','id','student_id');
    }
    public function semesterFee()
    {
        return $this->belongsTo('App\Student','student_id','id');
    }
    public function semester()
    {
        return $this->belongsto('App\semester','semester_id','id');
    }
}
