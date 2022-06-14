<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TimeSlot extends Model
{
    use HasFactory;

    public function teacher(){
        return $this->belongsTo('App\Models\User','teacher_id');
    }

    //course
    public function course(){
        return $this->belongsTo('App\Models\Course','course_id');
    }
      //Room
      public function room(){
        return $this->belongsTo('App\Models\Room','room_id');
    }
    //class
    public function class(){
        return $this->belongsTo('App\Models\Classes','class_id');
    }
}
