<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Room;
use App\Models\Teacher;
use App\Models\TimeSlot;
use App\Models\Classes;
use App\Models\User;
use Illuminate\Http\Request;

class TimeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $times = TimeSlot::all();
        return view('admin.timetable.index',compact('times'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $teachers = User::where('role',User::ROLE_TEACHER)->get();
        $courses = Course::all();
        $rooms = Room::all();
        $classes = Classes::all();
        return view('admin.timetable.create',compact('teachers','courses','rooms','classes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $day        = $request->day;
        $stratTime  = $request->start_time;
        $class      = $request->class_id;
        $teacher    = $request->teacher_id;
        $rooms      = $request->room_id;

        $checkTime = TimeSlot::Where('day',$day)
        ->where('start_time',$stratTime)
        ->where('class_id',$class)
        ->where('teacher_id',$teacher)
        ->where('room_id',$rooms)
        ->first();
        if(empty($checkTime)){
            
        $checkTime1 = TimeSlot::Where('day',$day)
        ->where('start_time',$stratTime)
        ->where('class_id',$class)
        ->where('room_id',$rooms)
        ->first();
            if(empty($checkTime1)){
                $times = new TimeSlot;
                $times->day = $request->day;
                $times->start_time	= $request->start_time;
                $times->end_time = $request->end_time;
                $times->class_id = $request->class_id;
                $times->teacher_id = $request->teacher_id;
                $times->course_id = $request->course_id;
                $times->room_id = $request->room_id;
                $times->save();
                toastr()->success('Time Added successfully!');
                return redirect('timeslots');
            }
            else{
                toastr()->info('Time Already Added!');
                return redirect('timeslots');
            }
           
        }
        else{
            toastr()->info('Time Already Added!');
            return redirect('timeslots');
        }
        
    }

    public function DayCheck(){
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $time = TimeSlot::find($id);
        // dd($time);
        $teachers = User::where('role',User::ROLE_TEACHER)->get();
        $courses = Course::all();
        $rooms = Room::all();
        $classes = Classes::all();
        return view('admin.timetable.edit',compact('teachers','courses','rooms','classes','time'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $day        = $request->day;
        $stratTime  = $request->start_time;
        $class      = $request->class_id;
        $teacher    = $request->teacher_id;
        $rooms      = $request->room_id;

        $checkTime = TimeSlot::Where('day',$day)
        ->where('start_time',$stratTime)
        ->where('class_id',$class)
        ->where('teacher_id',$teacher)
        ->where('room_id',$rooms)
        ->first();
        if(empty($checkTime)){
            
        $checkTime1 = TimeSlot::Where('day',$day)
        ->where('start_time',$stratTime)
        ->where('class_id',$class)
        ->where('room_id',$rooms)
        ->first();
            if(empty($checkTime1)){
                $times = TimeSlot::find($id);
                $times->day = $request->day;
                $times->start_time	= $request->start_time;
                $times->end_time = $request->end_time;
                $times->class_id = $request->class_id;
                $times->teacher_id = $request->teacher_id;
                $times->course_id = $request->course_id;
                $times->room_id = $request->room_id;
                $times->save();
                toastr()->success('Time Updated successfully!');
                return redirect('timeslots');
            }
            else{
                toastr()->info('Time Already Added!');
                return redirect('timeslots');
            }
           
        }
        else{
            toastr()->info('Time Already Added!');
            return redirect('timeslots');
        }
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $times = TimeSlot::find($id);
        $times->delete();
        toastr()->error('TimeSlots Deleted Successfuly!');
        return redirect('timeslots');
    }

    public function timeshow(){
        $showtime = TimeSlot::all();
        return view('admin.timetable.timetable',compact('showtime'));
    }
}
