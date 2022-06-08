<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Course;
use App\Models\Classes;
use App\Models\Teacher;
use App\Models\Department;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $students = User::where('role',User::ROLE_STUDENT);
        
        if(request()->has('search')){
            $students = $students->where('name','like','%'.request('search').'%');
        }

        // Search by class
        if(request()->has('class')){
            $students = $students->where('class_id',request('class'));
        }

        // Search by course
        if(request()->has('course')){
            $students = $students->whereHas('courses_ids',function($q){
                $q->where('course_id',request('course'));
            });
        }

        $students = $students->get();
        return view('admin.student.index',compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $classes = Classes::all();
        $courses = Course::all();
        return view('admin.student.create',compact('classes','courses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $student = new User;
        if($request->hasFile('image'))
        {
            $image = $request->image;
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/teacher/profile');
            $image->move($destinationPath, $name);
            $student->image = $name;
        }
        $student->name = $request->teacher_name;
        $student->email = $request->email;
        $student->class_id = $request->class_id;
    
        $student->password = bcrypt($request->password);
        $student->role = User::ROLE_STUDENT;
        $student->save();

        // sync courses
        $student->updateCourses($request->courses);

        toastr()->success('Student Added successfully!');
        return redirect('students');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = User::where('id',$id)->where('role',User::ROLE_STUDENT)->with('courses_ids')->first();
        if(!$student){
            return redirect()->route('students.index');
        }
      
        // dd($student);
        $classes = Classes::all();
        $courses = Course::all();
        $student_courses = $student->courses_ids->pluck('course_id')->toArray();
    
        return view('admin.student.edit',compact('student','classes','courses','student_courses'));
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
        
        $student = User::find($id);
        if($request->hasFile('image'))
        {
            $image = $request->image;
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/teacher/profile');
            $image->move($destinationPath, $name);
            $student->image = $name;
        }
        $student->name = $request->teacher_name;
        $student->email = $request->email;
        $student->class_id = $request->class_id;
        

        if($request->password){
            $student->password = bcrypt($request->password);
        }

        $student->save();

        // sync courses
        $student->updateCourses($request->courses);

        toastr()->success('Student Updated successfully!');
       
        return redirect()->back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = User::find($id);
        $student->delete();
        toastr()->error('Student Deleted successfully!');
        return redirect('students');
    }

    
}
