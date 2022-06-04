<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;
use App\Models\Teacher;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teachers = Teacher::all();
        return view('admin.teacher.index',compact('teachers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departments = Department::all();
        // dd($departments);
        return view('admin.teacher.create',compact('departments'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $teachers = new Teacher;
        if($request->hasFile('image'))
        {
            $image = $request->image;
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/teacher/profile');
            $image->move($destinationPath, $name);
            $teachers->image = $name;
        }
        $teachers->teacher_name = $request->teacher_name;
        $teachers->email = $request->email;
        $teachers->depart_id = $request->depart_id;
        $teachers->save();
        toastr()->success('Teacher Added successfully!');
        return redirect('teacher');
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
        $teacher = Teacher::find($id);
        $departments = Department::all();
        return view('admin.teacher.edit',compact('teacher','departments'));
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
        $teachers = Teacher::find($id);
        if($request->hasFile('image'))
        {
            $image = $request->image;
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/teacher/profile');
            $image->move($destinationPath, $name);
            $teachers->image = $name;
        }
        $teachers->teacher_name = $request->teacher_name;
        $teachers->email = $request->email;
        $teachers->depart_id = $request->depart_id;
        $teachers->save();
        toastr()->success('Teacher Updated successfully!');
        return redirect('teachers');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $teachers = Teacher::find($id);
        $teachers->delete();
        toastr()->error('Teacher Deleted successfully!');
        return redirect('teachers');
    }
}
