<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bookIssue extends Model
{
 public function book()
   {
       return $this->belongsTo('App\book', 'book_Id', 'id');
   }

    public function student()
    {
        return $this->belongsTo('App\Student','student_id','id');


    }



}
