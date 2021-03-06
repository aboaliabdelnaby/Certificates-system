<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //
    public function courses()
    {
        return $this->belongsToMany(Course::class, 'students_courses')
        ->withPivot('status')
    	->withTimestamps();
    }
}
