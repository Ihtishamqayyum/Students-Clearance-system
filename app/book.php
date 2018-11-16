<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class book extends Model
{
    public function issueBook()
    {
        return $this->belongsTo('App\bookIssue','book_Id','id');
    }
}
