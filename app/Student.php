<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
     public function student()
    {
        return $this->belongsTo('App\User','userId','id');
    }
    public function department()
    {
        return $this->hasOne('App\department','id','depId');
    }
    public function batch()
    {
        return $this->hasOne('App\batch','id','batchId');
    }
/*public function subject()
{
   return $this->hasMany('App\subject','id','id');
}*/

    public function program()
    {
        return $this->hasOne('App\program','id','programId');
    }
    public function issuebook()
    {
        return $this->belongsTo('App\bookIssue','id','student_id');
    }

}
