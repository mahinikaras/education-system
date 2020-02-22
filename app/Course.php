<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    //

    protected $guarded = [];


    public function course_duration(){


    	return $this->hasMany('App\Course_duration', 'course_id');

    }

}
