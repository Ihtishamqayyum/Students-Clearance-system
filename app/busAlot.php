<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class busAlot extends Model
{
    public function student()
{
    return $this-> belongsTo('App\Student','student_id','id');
}
    public function bus()
    {
        return $this->hasOne('App\busAvailable','id','bus_id');
    }
    public function semester()
    {
        return $this->hasOne('App\semester','id','semester_id');
    }
    public function fee()
    {
        return $this->belongsTo('App\fee','id','student_id');
    }

}
