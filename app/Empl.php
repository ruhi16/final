<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empl extends Model
{
    public function depts(){
    	return $this->belongsTo('App\Dept');
    }
}
