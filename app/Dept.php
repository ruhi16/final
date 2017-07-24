<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dept extends Model
{
    public function empls(){
    	return $this->hasMany('App\Empl');
    }
}
