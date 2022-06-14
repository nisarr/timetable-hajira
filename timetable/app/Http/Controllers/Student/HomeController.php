<?php

namespace App\Http\Controllers\Student;

use App\Models\User;
use App\Models\Course;
use App\Models\Classes;
use App\Models\Teacher;
use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
         
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = auth()->user();

        
        // $week_days = $user->teacher_timeslots()->distinct('day')->select(DB::raw('COUNT(id) as total,day'))->pluck('total','day');
        $week_days = $user->student_timeslots()->where('class_id',$user->class_id)->select('day', DB::raw('count(*) as total_classes'))->groupBy('day')->pluck('total_classes','day');
        
  
        $week_days_all = [
            'Monday' => 0,
            'Tuesday' => 0,
            'Wednesday' => 0,
            'Thursday' => 0,
            'Friday' => 0,
            'Saturday' => 0,
            'Sunday' => 0,
        ];
      
        foreach($week_days as $key => $value){
            $week_days_all[$key] = $value;
        }
        
        return view('student.dashboard',compact('week_days_all'));
    }
}
