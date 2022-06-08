<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Course;
use App\Models\Classes;
use App\Models\Teacher;
use App\Models\Department;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $total_classes = Classes::count();
        $total_courses = Course::count();
        $total_departments = Department::count();
        $total_teachers = User::where('role',User::ROLE_TEACHER)->count();
        $total_students = User::where('role',User::ROLE_STUDENT)->count();
        $students = User::where('role',User::ROLE_STUDENT)->with('class')->orderBy('id','desc')->limit(6)->get();
        return view('admin.dashboard',compact('total_classes','total_courses','total_departments','total_teachers','total_students','students'));
    }
}
