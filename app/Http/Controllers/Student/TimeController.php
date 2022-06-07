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

        $showtime = TimeSlot::where('teacher_id',auth()->user()->id)->with([
            'teacher',
            'class',
            'course',
            'room'
        ])->get();

        // dd($showtime);
        return view('admin.teacher_time.time',compact('showtime'));

    }

}
