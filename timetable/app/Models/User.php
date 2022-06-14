<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\StudentCourse;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    const ROLE_ADMIN    = 'admin';
    const ROLE_TEACHER  = 'teacher';
    const ROLE_STUDENT  = 'student';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'depart_id',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function department(){
        return $this->belongsTo('App\Models\Department','depart_id');
    }

    public function teacher_classes(){
        return $this->hasManyThrough(Classes::class,TimeSlot::class,'teacher_id','id','id','class_id');
    }

    public function teacher_courses(){
        return $this->hasManyThrough(Course::class,TimeSlot::class,'teacher_id','id','id','course_id');
    }

    public function teacher_timeslots(){
        return $this->hasMany(TimeSlot::class,'teacher_id');
    }
    

    // Student
    
    public function courses(){
        return $this->belongsToMany('App\Models\Course','student_courses','student_id','course_id');
    }

    public function courses_ids(){
        return $this->hasMany('App\Models\StudentCourse','student_id');
    }

    public function class(){
        return $this->belongsTo('App\Models\Classes','class_id');
    }

    public function student_timeslots(){
        return $this->hasManyThrough(TimeSlot::class,StudentCourse::class,'student_id','course_id','id','course_id');
    }
    
    public function updateCourses($courses){
        return $this->courses()->sync($courses);
    }

    
}
