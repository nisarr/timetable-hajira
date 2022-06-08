<?php

namespace App\Http\Controllers\Student;

use App\Models\Room;
use App\Models\Course;
use App\Models\Classes;
use App\Models\Teacher;
use App\Models\TimeSlot;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TimeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $showtime = auth()->user()->student_timeslots()->where('class_id',auth()->user()->class_id)->with([
            'teacher',
            'class',
            'course',
            'room'
        ])->get();

        // dd($showtime);
        return view('student.timetable.timetable',compact('showtime'));

    }

}
