<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class feeType extends Model
{
    public function feetype()
    {
        return $this->belongsTo('App\fee','level','id');
    }
}
