<?php

namespace App\Http\Controllers\Teacher;

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

        $total_classes = $user->teacher_classes()->count();
        $total_courses = $user->teacher_courses()->count();
        // $week_days = $user->teacher_timeslots()->distinct('day')->select(DB::raw('COUNT(id) as total,day'))->pluck('total','day');
        $week_days = $user->teacher_timeslots()->select('day', DB::raw('count(*) as total_classes'))->groupBy('day')->pluck('total_classes','day');
        
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
     
        return view('teacher.dashboard',compact('total_classes','total_courses','week_days_all'));
    }
}
