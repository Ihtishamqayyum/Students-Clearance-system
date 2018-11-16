<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class department extends Model
{
    public function book(){
    	return $this->hasMany('App\book');
    }
    public function students()
    {
        return $this->hasMany('App\student','depId','id');
    }
    /*public function department()
    {
        return $this->belongsTo('App\department');
    }*/
   /* public function dep()
    {
        return $this->belongsTo('App\user','department_id',)
    }*/

}
